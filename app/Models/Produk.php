<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'kategori_produk_id',
        'judul_id',
        'judul_en',
        'slug',
        'ringkasan_id',
        'ringkasan_en',
        'deskripsi_id',
        'deskripsi_en',
        'demo_type',
        'teknologi',
        'is_active',
        'urutan',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Satu produk milik satu kategori.
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_produk_id');
    }
}