<?php

namespace Database\Seeders;

use App\Models\KategoriProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama_id' => 'Company Profile',
                'nama_en' => 'Company Profile',
                'slug' => 'company-profile',
                'deskripsi_id' => 'Website profil perusahaan yang menampilkan identitas dan layanan bisnis Anda.',
                'urutan' => 1,
            ],
            [
                'nama_id' => 'Toko Online / Marketplace',
                'nama_en' => 'Online Store / Marketplace',
                'slug' => 'toko-online',
                'deskripsi_id' => 'Sistem jual-beli online lengkap dengan katalog produk dan transaksi.',
                'urutan' => 2,
            ],
            [
                'nama_id' => 'Website Berita',
                'nama_en' => 'News Website',
                'slug' => 'berita',
                'deskripsi_id' => 'Platform publikasi berita dan artikel dengan sistem manajemen konten.',
                'urutan' => 3,
            ],
            [
                'nama_id' => 'Landing Page',
                'nama_en' => 'Landing Page',
                'slug' => 'landing-page',
                'deskripsi_id' => 'Halaman promosi satu halaman untuk produk, event, atau campaign tertentu.',
                'urutan' => 4,
            ],
            [
                'nama_id' => 'Sistem Booking / Reservasi',
                'nama_en' => 'Booking System',
                'slug' => 'booking',
                'deskripsi_id' => 'Sistem pemesanan online untuk klinik, salon, rental, dan bisnis jasa lainnya.',
                'urutan' => 5,
            ],
            [
                'nama_id' => 'Sistem POS (Point of Sale)',
                'nama_en' => 'POS System',
                'slug' => 'pos',
                'deskripsi_id' => 'Sistem kasir digital untuk resto, kafe, dan toko retail.',
                'urutan' => 6,
            ],
            [
                'nama_id' => 'Sistem Kursus & Pelatihan',
                'nama_en' => 'Course & Training Management',
                'slug' => 'kursus',
                'deskripsi_id' => 'Sistem manajemen pendaftaran, pembayaran, dan sertifikasi untuk lembaga kursus dan pelatihan.',
                'urutan' => 7,
            ],
        ];

        foreach ($kategori as $k) {
            KategoriProduk::updateOrCreate(['slug' => $k['slug']], $k);
        }
    }
}