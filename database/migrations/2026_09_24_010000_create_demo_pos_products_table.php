<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Katalog produk untuk demo Sistem Kasir (POS).
     * Data ini GLOBAL (bukan per session_id) karena sifatnya katalog referensi,
     * bukan data transaksi milik visitor. Yang perlu isolasi session_id adalah
     * demo_pos_transactions & demo_pos_transaction_items (lihat migration berikutnya).
     */
    public function up(): void
    {
        Schema::create('demo_pos_products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori')->nullable();
            $table->unsignedInteger('harga'); // dalam Rupiah, tanpa desimal
            $table->string('icon')->nullable(); // emoji singkat untuk kartu produk
            $table->boolean('is_active')->default(true);
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demo_pos_products');
    }
};
