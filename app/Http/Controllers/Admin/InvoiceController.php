<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Klien;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class InvoiceController extends Controller
{
    public function index(Request $request): View
    {
        $invoice = Invoice::query()
            ->with('klien')
            ->when($request->filled('status'), fn ($q) => $q->where('status', $request->input('status')))
            ->when($request->filled('cari'), function ($q) use ($request) {
                $cari = $request->input('cari');
                $q->where(function ($q) use ($cari) {
                    $q->where('nomor_invoice', 'like', "%{$cari}%")
                        ->orWhereHas('klien', fn ($q) => $q->where('nama', 'like', "%{$cari}%")
                            ->orWhere('nama_perusahaan', 'like', "%{$cari}%"));
                });
            })
            ->orderByDesc('tanggal_invoice')
            ->orderByDesc('id')
            ->paginate(15)
            ->withQueryString();

        return view('admin.invoice.index', compact('invoice'));
    }

    public function create(): View
    {
        $klien = Klien::orderBy('nama')->get();

        return view('admin.invoice.form', [
            'invoice' => new Invoice(),
            'klien' => $klien,
            'items' => [],
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedInvoice($request);

        $invoice = DB::transaction(function () use ($data) {
            $invoice = Invoice::create([
                'klien_id' => $data['klien_id'],
                'tanggal_invoice' => $data['tanggal_invoice'],
                'tanggal_jatuh_tempo' => $data['tanggal_jatuh_tempo'] ?? null,
                'catatan' => $data['catatan'] ?? null,
            ]);

            $this->simpanItem($invoice, $data['items']);
            $invoice->hitungUlangTotal($data['diskon_tambahan_nominal'] ?? 0);

            return $invoice;
        });

        return redirect()->route('admin.invoice.show', $invoice)
            ->with('success', "Invoice {$invoice->nomor_invoice} dibuat.");
    }

    public function show(Invoice $invoice): View
    {
        $invoice->load(['klien', 'items', 'kwitansi']);

        return view('admin.invoice.show', compact('invoice'));
    }

    public function edit(Invoice $invoice): View
    {
        $invoice->load('items');
        $klien = Klien::orderBy('nama')->get();

        return view('admin.invoice.form', [
            'invoice' => $invoice,
            'klien' => $klien,
            'items' => $invoice->items,
        ]);
    }

    public function update(Request $request, Invoice $invoice): RedirectResponse
    {
        $data = $this->validatedInvoice($request);

        DB::transaction(function () use ($invoice, $data) {
            $invoice->update([
                'klien_id' => $data['klien_id'],
                'tanggal_invoice' => $data['tanggal_invoice'],
                'tanggal_jatuh_tempo' => $data['tanggal_jatuh_tempo'] ?? null,
                'catatan' => $data['catatan'] ?? null,
            ]);

            $invoice->items()->delete();
            $this->simpanItem($invoice, $data['items']);
            $invoice->hitungUlangTotal($data['diskon_tambahan_nominal'] ?? 0);
        });

        return redirect()->route('admin.invoice.show', $invoice)
            ->with('success', "Invoice {$invoice->nomor_invoice} diperbarui.");
    }

    public function destroy(Invoice $invoice): RedirectResponse
    {
        if ($invoice->kwitansi()->exists()) {
            return back()->with('error', "Invoice {$invoice->nomor_invoice} tidak bisa dihapus karena sudah ada kwitansi pembayaran terhubung. Hapus kwitansinya dulu, atau tandai Batal saja.");
        }

        $nomor = $invoice->nomor_invoice;
        $invoice->delete();

        return redirect()->route('admin.invoice.index')->with('success', "Invoice {$nomor} dihapus.");
    }

    public function tandaiLunas(Invoice $invoice): RedirectResponse
    {
        $invoice->update(['status' => Invoice::STATUS_LUNAS]);

        return back()->with('success', "Invoice {$invoice->nomor_invoice} ditandai Lunas.");
    }

    public function tandaiBatal(Invoice $invoice): RedirectResponse
    {
        $invoice->update(['status' => Invoice::STATUS_BATAL]);

        return back()->with('success', "Invoice {$invoice->nomor_invoice} ditandai Batal.");
    }

    /**
     * Halaman khusus untuk dirender jadi PDF — layout polos tanpa nav admin.
     */
    public function pdf(Invoice $invoice)
    {
        $invoice->load(['klien', 'items']);

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.invoice.pdf', compact('invoice'))
            ->setPaper('a4', 'portrait');

        $namaFile = 'Invoice-' . str_replace('/', '-', $invoice->nomor_invoice) . '.pdf';

        return $pdf->stream($namaFile);
    }

    private function simpanItem(Invoice $invoice, array $items): void
    {
        foreach (array_values($items) as $i => $item) {
            $qty = (float) $item['qty'];
            $harga = (float) $item['harga_satuan'];

            InvoiceItem::create([
                'invoice_id' => $invoice->id,
                'deskripsi' => $item['deskripsi'],
                'qty' => $qty,
                'harga_satuan' => $harga,
                'subtotal' => round($qty * $harga, 2),
                'urutan' => $i,
            ]);
        }
    }

    private function validatedInvoice(Request $request): array
    {
        return $request->validate([
            'klien_id' => 'required|exists:klien,id',
            'tanggal_invoice' => 'required|date',
            'tanggal_jatuh_tempo' => 'nullable|date|after_or_equal:tanggal_invoice',
            'diskon_tambahan_nominal' => 'nullable|numeric|min:0',
            'catatan' => 'nullable|string|max:1000',
            'items' => 'required|array|min:1',
            'items.*.deskripsi' => 'required|string|max:255',
            'items.*.qty' => 'required|numeric|min:0.01',
            'items.*.harga_satuan' => 'required|numeric|min:0',
        ]);
    }
}
