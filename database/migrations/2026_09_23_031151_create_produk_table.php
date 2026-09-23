<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_produk_id')->constrained('kategori_produk')->cascadeOnDelete();
            $table->string('judul_id');
            $table->string('judul_en')->nullable();
            $table->string('slug')->unique();
            $table->string('ringkasan_id')->nullable();
            $table->string('ringkasan_en')->nullable();
            $table->longText('deskripsi_id')->nullable();
            $table->longText('deskripsi_en')->nullable();
            $table->string('demo_type')->nullable();
            $table->string('teknologi')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};