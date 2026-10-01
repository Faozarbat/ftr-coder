<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kwitansi', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kwitansi')->unique();
            $table->foreignId('klien_id')->constrained('klien')->restrictOnDelete();

            // Nullable dengan sengaja: kwitansi boleh berdiri sendiri (mis. terima DP
            // sebelum invoice resmi dibuat), tidak wajib selalu terhubung ke invoice.
            $table->foreignId('invoice_id')->nullable()->constrained('invoices')->nullOnDelete();

            $table->date('tanggal');
            $table->decimal('jumlah', 14, 2);
            $table->string('untuk_pembayaran');
            $table->string('metode_pembayaran')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kwitansi');
    }
};
