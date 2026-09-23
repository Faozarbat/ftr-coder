<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
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
    public function show(string $slug): View
    {
        $produk = Produk::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('produk.show', compact('produk'));
    }
}