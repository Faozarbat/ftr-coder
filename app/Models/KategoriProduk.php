<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriProduk extends Model
{
    protected $table = 'kategori_produk';

    protected $fillable = [
        'nama_id',
        'nama_en',
        'slug',
        'deskripsi_id',
        'deskripsi_en',
        'icon',
        'urutan',
    ];

    /**
     * Satu kategori punya banyak produk.
     */
    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class);
    }
}