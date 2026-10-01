<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Penghitung nomor invoice/kwitansi TERPISAH dari tabel invoices/kwitansi
     * itu sendiri. Sengaja begitu: kalau nomor diambil dari MAX(nomor_invoice)
     * pada baris yang ADA, menghapus invoice akan membuat nomornya kepakai
     * ulang oleh invoice berikutnya — persis yang ingin dihindari (nomor harus
     * naik terus, tidak boleh dipakai ulang, supaya jadi jejak audit yang bisa
     * dipercaya). Baris di tabel ini TIDAK PERNAH dihapus/mundur.
     */
    public function up(): void
    {
        Schema::create('counter_dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('tipe')->unique(); // 'invoice' atau 'kwitansi'
            $table->unsignedInteger('nomor_terakhir')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('counter_dokumen');
    }
};
