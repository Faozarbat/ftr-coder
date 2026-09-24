<?php

namespace Database\Seeders;

use App\Models\DemoPosProduct;
use Illuminate\Database\Seeder;

class DemoPosProductSeeder extends Seeder
{
    public function run(): void
    {
        $produk = [
            ['nama' => 'Kopi Hitam', 'kategori' => 'Minuman', 'harga' => 12000, 'icon' => '☕', 'urutan' => 1],
            ['nama' => 'Es Teh Manis', 'kategori' => 'Minuman', 'harga' => 8000, 'icon' => '🧊', 'urutan' => 2],
            ['nama' => 'Nasi Goreng', 'kategori' => 'Makanan', 'harga' => 22000, 'icon' => '🍛', 'urutan' => 3],
            ['nama' => 'Ayam Geprek', 'kategori' => 'Makanan', 'harga' => 20000, 'icon' => '🍗', 'urutan' => 4],
            ['nama' => 'Kentang Goreng', 'kategori' => 'Camilan', 'harga' => 15000, 'icon' => '🍟', 'urutan' => 5],
            ['nama' => 'Roti Bakar', 'kategori' => 'Camilan', 'harga' => 13000, 'icon' => '🍞', 'urutan' => 6],
        ];

        foreach ($produk as $item) {
            DemoPosProduct::updateOrCreate(
                ['nama' => $item['nama']],
                $item + ['is_active' => true]
            );
        }
    }
}
