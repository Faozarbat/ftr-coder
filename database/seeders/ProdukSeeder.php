<?php

namespace Database\Seeders;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = [
            [
                'kategori_slug' => 'company-profile',
                'judul_id' => 'Website Company Profile',
                'slug' => 'website-company-profile',
                'ringkasan_id' => 'Tampilkan profil dan layanan bisnis Anda secara profesional.',
                'deskripsi_id' => "Website company profile dirancang untuk membangun kepercayaan calon klien terhadap bisnis Anda.\n\nCocok untuk UMKM, korporat, maupun personal branding yang ingin tampil profesional di dunia digital.",
                'demo_type' => 'company-profile',
                'teknologi' => 'Laravel',
                'urutan' => 1,
            ],
            [
                'kategori_slug' => 'toko-online',
                'judul_id' => 'Sistem Toko Online',
                'slug' => 'sistem-toko-online',
                'ringkasan_id' => 'Jual produk Anda secara online dengan sistem katalog dan transaksi lengkap.',
                'deskripsi_id' => "Sistem toko online lengkap dengan katalog produk, keranjang belanja, dan manajemen pesanan.\n\nCocok untuk bisnis retail yang ingin memperluas jangkauan penjualan secara digital.",
                'demo_type' => 'toko-online',
                'teknologi' => 'Laravel',
                'urutan' => 2,
            ],
            [
                'kategori_slug' => 'berita',
                'judul_id' => 'Platform Website Berita',
                'slug' => 'platform-website-berita',
                'ringkasan_id' => 'Publikasikan artikel dan berita dengan sistem manajemen konten yang mudah digunakan.',
                'deskripsi_id' => "Platform berita dengan sistem manajemen konten (CMS) untuk memudahkan publikasi artikel.\n\nCocok untuk media lokal, komunitas, maupun blog personal.",
                'demo_type' => 'berita',
                'teknologi' => 'Laravel',
                'urutan' => 3,
            ],
            [
                'kategori_slug' => 'landing-page',
                'judul_id' => 'Landing Page Promosi',
                'slug' => 'landing-page-promosi',
                'ringkasan_id' => 'Halaman promosi fokus konversi untuk produk atau event tertentu.',
                'deskripsi_id' => "Landing page satu halaman yang dirancang fokus untuk konversi \u2014 cocok untuk campaign, event, atau peluncuran produk baru.",
                'demo_type' => 'landing-page',
                'teknologi' => 'Laravel',
                'urutan' => 4,
            ],
            [
                'kategori_slug' => 'booking',
                'judul_id' => 'Sistem Booking & Reservasi',
                'slug' => 'sistem-booking-reservasi',
                'ringkasan_id' => 'Kelola pemesanan pelanggan secara online, kapan saja.',
                'deskripsi_id' => "Sistem booking online untuk klinik, salon, rental kendaraan, atau lapangan olahraga.\n\nPelanggan bisa memesan jadwal tanpa perlu menghubungi Anda secara manual.",
                'demo_type' => 'booking',
                'teknologi' => 'Laravel',
                'urutan' => 5,
            ],
            [
                'kategori_slug' => 'pos',
                'judul_id' => 'Sistem Kasir (POS)',
                'slug' => 'sistem-kasir-pos',
                'ringkasan_id' => 'Catat transaksi penjualan secara real-time, kurangi selisih kasir.',
                'deskripsi_id' => "Sistem Point of Sale untuk mencatat transaksi penjualan secara real-time.\n\nCocok untuk resto, kafe, dan toko retail yang ingin proses kasir lebih cepat dan akurat.",
                'demo_type' => 'pos',
                'teknologi' => 'Laravel',
                'urutan' => 6,
            ],
            [
                'kategori_slug' => 'kursus',
                'judul_id' => 'Sistem Kursus & Pelatihan',
                'slug' => 'sistem-kursus-pelatihan',
                'ringkasan_id' => 'Kelola pendaftaran, pembayaran, dan sertifikasi peserta pelatihan dalam satu sistem.',
                'deskripsi_id' => "Sistem manajemen kursus dan pelatihan untuk lembaga pendidikan non-formal, LPK, hingga penyelenggara training bersertifikat.\n\nMencakup pendaftaran online, verifikasi bukti pembayaran, kwitansi otomatis, dan panel staff dengan hak akses berbeda untuk tiap peran — admin, pendaftaran, koordinator training, hingga keuangan.",
                'demo_type' => 'kursus',
                'teknologi' => 'Laravel',
                'urutan' => 7,
            ],
        ];

        foreach ($produk as $p) {
            $kategoriId = KategoriProduk::where('slug', $p['kategori_slug'])->value('id');

            Produk::updateOrCreate(
                ['slug' => $p['slug']],
                [
                    'kategori_produk_id' => $kategoriId,
                    'judul_id' => $p['judul_id'],
                    'ringkasan_id' => $p['ringkasan_id'],
                    'deskripsi_id' => $p['deskripsi_id'],
                    'demo_type' => $p['demo_type'],
                    'teknologi' => $p['teknologi'],
                    'urutan' => $p['urutan'],
                    'is_active' => true,
                ]
            );
        }
    }
}