<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Transaksi kasir per visitor demo.
     * Mengikuti aturan isolasi data Opsi A (dokumentasi utama bagian "Isolasi Data
     * Multi-Visitor"): setiap baris WAJIB ditag session_id milik token yang dipakai
     * visitor, bukan disimpan sebagai data global.
     */
    public function up(): void
    {
        Schema::create('demo_pos_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->index(); // dari demo_tokens.session_id
            $table->enum('status', ['open', 'paid'])->default('open');
            $table->unsignedInteger('paid_amount')->nullable();
            $table->unsignedInteger('change_amount')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demo_pos_transactions');
    }
};
