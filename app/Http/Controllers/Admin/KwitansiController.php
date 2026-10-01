<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Klien;
use App\Models\Kwitansi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KwitansiController extends Controller
{
    public function index(Request $request): View
    {
        $kwitansi = Kwitansi::query()
            ->with(['klien', 'invoice'])
            ->when($request->filled('cari'), function ($q) use ($request) {
                $cari = $request->input('cari');
                $q->where('nomor_kwitansi', 'like', "%{$cari}%")
                    ->orWhereHas('klien', fn ($q) => $q->where('nama', 'like', "%{$cari}%"));
            })
            ->orderByDesc('tanggal')
            ->orderByDesc('id')
            ->paginate(15)
            ->withQueryString();

        return view('admin.kwitansi.index', compact('kwitansi'));
    }

    /**
     * Kalau datang dari halaman invoice ("Catat Pembayaran"), invoice & klien
     * sudah terisi otomatis lewat query string ?invoice_id=.
     */
    public function create(Request $request): View
    {
        $klien = Klien::orderBy('nama')->get();
        $invoiceTerpilih = null;

        if ($request->filled('invoice_id')) {
            $invoiceTerpilih = Invoice::with('klien')->find($request->input('invoice_id'));
        }

        return view('admin.kwitansi.form', compact('klien', 'invoiceTerpilih'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'klien_id' => 'required|exists:klien,id',
            'invoice_id' => 'nullable|exists:invoices,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric|min:0.01',
            'untuk_pembayaran' => 'required|string|max:255',
            'metode_pembayaran' => 'nullable|string|max:100',
            'catatan' => 'nullable|string|max:1000',
        ]);

        $kwitansi = Kwitansi::create($data);

        return redirect()->route('admin.kwitansi.show', $kwitansi)
            ->with('success', "Kwitansi {$kwitansi->nomor_kwitansi} dibuat.");
    }

    public function show(Kwitansi $kwitansi): View
    {
        $kwitansi->load(['klien', 'invoice']);

        return view('admin.kwitansi.show', compact('kwitansi'));
    }

    public function destroy(Kwitansi $kwitansi): RedirectResponse
    {
        $nomor = $kwitansi->nomor_kwitansi;
        $kwitansi->delete();

        return redirect()->route('admin.kwitansi.index')->with('success', "Kwitansi {$nomor} dihapus.");
    }

    public function pdf(Kwitansi $kwitansi)
    {
        $kwitansi->load(['klien', 'invoice']);

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.kwitansi.pdf', compact('kwitansi'))
            ->setPaper('a5', 'landscape');

        $namaFile = 'Kwitansi-' . str_replace('/', '-', $kwitansi->nomor_kwitansi) . '.pdf';

        return $pdf->stream($namaFile);
    }
}
