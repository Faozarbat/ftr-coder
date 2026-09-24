<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\DemoPosProduct;
use App\Models\DemoPosTransaction;
use App\Models\DemoPosTransactionItem;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PosController extends Controller
{
    /**
     * GET /demo/pos — Halaman utama kasir: grid produk + keranjang aktif visitor.
     */
    public function index(Request $request): View
    {
        $sessionId = $request->attributes->get('demo_session_id');

        $produkKasir = DemoPosProduct::where('is_active', true)
            ->orderBy('urutan')
            ->get();

        $transaksi = $this->openTransaction($sessionId);
        $transaksi->load('items.product');

        return view('demo.pos.index', [
            'produkKasir' => $produkKasir,
            'transaksi' => $transaksi,
        ]);
    }

    /**
     * POST /demo/pos/tambah — Tambah 1 produk ke keranjang (atau tambah qty jika sudah ada).
     */
    public function tambahItem(Request $request): RedirectResponse
    {
        $sessionId = $request->attributes->get('demo_session_id');

        $validated = $request->validate([
            'demo_pos_product_id' => ['required', 'exists:demo_pos_products,id'],
            'qty' => ['nullable', 'integer', 'min:1', 'max:99'],
        ]);

        $produk = DemoPosProduct::findOrFail($validated['demo_pos_product_id']);
        $qty = $validated['qty'] ?? 1;

        $transaksi = $this->openTransaction($sessionId);

        $item = $transaksi->items()->where('demo_pos_product_id', $produk->id)->first();

        if ($item) {
            $item->increment('qty', $qty);
        } else {
            $transaksi->items()->create([
                'demo_pos_product_id' => $produk->id,
                'qty' => $qty,
                'harga_saat_itu' => $produk->harga,
            ]);
        }

        return back()->with('success', "{$produk->nama} ditambahkan ke keranjang.");
    }

    /**
     * DELETE /demo/pos/item/{item} — Hapus 1 baris item dari keranjang.
     */
    public function hapusItem(Request $request, DemoPosTransactionItem $item): RedirectResponse
    {
        $sessionId = $request->attributes->get('demo_session_id');

        // Wajib: pastikan item ini benar milik transaksi session visitor ini,
        // bukan milik session visitor lain (mencegah IDOR antar-visitor).
        if ($item->transaksi->session_id !== $sessionId) {
            abort(403);
        }

        $item->delete();

        return back()->with('success', 'Item dihapus dari keranjang.');
    }

    /**
     * POST /demo/pos/checkout — Selesaikan transaksi, hitung kembalian.
     */
    public function checkout(Request $request): RedirectResponse
    {
        $sessionId = $request->attributes->get('demo_session_id');
        $transaksi = $this->openTransaction($sessionId);
        $transaksi->load('items');

        if ($transaksi->items->isEmpty()) {
            return back()->with('error', 'Keranjang masih kosong.');
        }

        $total = $transaksi->total;

        $validated = $request->validate([
            'paid_amount' => ['required', 'integer', "min:{$total}"],
        ], [
            'paid_amount.min' => 'Uang dibayar kurang dari total belanja.',
        ]);

        $transaksi->update([
            'status' => 'paid',
            'paid_amount' => $validated['paid_amount'],
            'change_amount' => $validated['paid_amount'] - $total,
            'completed_at' => now(),
        ]);

        return redirect()->route('demo.pos.receipt', ['transaksi' => $transaksi->id]);
    }

    /**
     * GET /demo/pos/struk/{transaksi} — Halaman struk setelah pembayaran.
     */
    public function receipt(Request $request, DemoPosTransaction $transaksi): View
    {
        $sessionId = $request->attributes->get('demo_session_id');

        if ($transaksi->session_id !== $sessionId) {
            abort(403);
        }

        $transaksi->load('items.product');

        return view('demo.pos.receipt', ['transaksi' => $transaksi]);
    }

    /**
     * Ambil transaksi 'open' milik session_id ini, atau buat baru kalau belum ada.
     * Semua query di controller ini SELALU difilter session_id (aturan isolasi Opsi A).
     */
    private function openTransaction(string $sessionId): DemoPosTransaction
    {
        return DemoPosTransaction::firstOrCreate([
            'session_id' => $sessionId,
            'status' => 'open',
        ]);
    }
}
