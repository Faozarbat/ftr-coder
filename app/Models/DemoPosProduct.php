<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoPosProduct extends Model
{
    protected $table = 'demo_pos_products';

    protected $fillable = [
        'nama',
        'kategori',
        'harga',
        'icon',
        'is_active',
        'urutan',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
