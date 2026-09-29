<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProdukController extends Controller
{
    /**
     * Tampilkan daftar semua produk (index).
     */
    public function index(): View
    {
        $kategori = KategoriProduk::with(['produk' => function ($query) {
            $query->where('is_active', true)->orderBy('urutan');
        }])->orderBy('urutan')->get();

        return view('produk.index', compact('kategori'));
    }

    /**
     * Tampilkan detail satu produk berdasarkan slug.
     */
    public function show(string $slug): View|RedirectResponse
    {
        $produk = Produk::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Company profile tidak punya halaman detail sendiri — langsung ke
        // katalog demo (yang juga jadi tempat input token lewat popup).
        if ($produk->demo_type === 'company-profile') {
            return redirect()->route('demo.token-form', 'company-profile');
        }
        if ($produk->demo_type === 'pos') {
            return redirect()->route('demo.token-form', 'pos');
        }
        if ($produk->demo_type === 'toko-online') {
            return redirect()->route('demo.token-form', 'toko-online');
        }
        return view('produk.show', compact('produk'));
    }
}