<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_invoice')->unique();
            $table->foreignId('klien_id')->constrained('klien')->restrictOnDelete();
            $table->date('tanggal_invoice');
            $table->date('tanggal_jatuh_tempo')->nullable();

            // status sengaja string biasa (bukan enum kolom DB) supaya gampang
            // ditambah nilai baru tanpa migration baru. Nilai baku: belum_dibayar, lunas, batal.
            $table->string('status')->default('belum_dibayar');

            $table->decimal('subtotal', 14, 2)->default(0);

            // PPN ditampilkan transparan di invoice, tapi otomatis di-nol-kan lewat
            // "diskon penyesuaian" senilai sama — karena penerbit belum PKP/berbadan
            // hukum resmi, jadi belum boleh benar-benar memungut PPN. Tinggal hapus
            // logic diskon ini kalau status usaha sudah resmi PKP di masa depan.
            $table->decimal('ppn_persen', 5, 2)->default(0);
            $table->decimal('ppn_nominal', 14, 2)->default(0);
            $table->decimal('diskon_ppn_nominal', 14, 2)->default(0);

            // Diskon tambahan yang benar-benar diberikan ke klien (opsional, manual)
            $table->decimal('diskon_tambahan_nominal', 14, 2)->default(0);

            $table->decimal('total', 14, 2)->default(0);

            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
