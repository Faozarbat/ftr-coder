<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate sitemap.xml berisi seluruh halaman statis + halaman detail produk aktif.
     *
     * Sengaja dibuat dinamis (bukan file XML statis) supaya otomatis ikut
     * bertambah setiap ada produk baru, tanpa perlu di-generate ulang manual.
     */
    public function index(): Response
    {
        $halamanStatis = [
            ['url' => route('home'), 'changefreq' => 'monthly', 'priority' => '1.0'],
            ['url' => route('produk.index'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['url' => route('tentang-kami'), 'changefreq' => 'yearly', 'priority' => '0.6'],
            ['url' => route('proses-kerja'), 'changefreq' => 'yearly', 'priority' => '0.6'],
            ['url' => route('kontak'), 'changefreq' => 'yearly', 'priority' => '0.5'],
            ['url' => route('kebijakan-privasi'), 'changefreq' => 'yearly', 'priority' => '0.3'],
        ];

        $produk = Produk::where('is_active', true)->orderBy('urutan')->get();

        $halamanProduk = $produk->map(fn (Produk $p) => [
            'url' => $p->demo_type === 'company-profile'
                ? route('demo.token-form', 'company-profile')
                : route('produk.show', $p->slug),
            'changefreq' => 'monthly',
            'priority' => '0.8',
            'lastmod' => $p->updated_at?->toAtomString(),
        ])->all();

        $entries = array_merge($halamanStatis, $halamanProduk);

        $xml = view('sitemap.index', compact('entries'))->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}