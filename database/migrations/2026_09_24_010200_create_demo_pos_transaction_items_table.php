<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demo_pos_transaction_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demo_pos_transaction_id')
                ->constrained('demo_pos_transactions')
                ->cascadeOnDelete();
            $table->foreignId('demo_pos_product_id')
                ->constrained('demo_pos_products')
                ->cascadeOnDelete();
            $table->unsignedInteger('qty')->default(1);
            $table->unsignedInteger('harga_saat_itu'); // snapshot harga saat item ditambahkan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demo_pos_transaction_items');
    }
};
