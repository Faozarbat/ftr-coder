<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Klien extends Model
{
    protected $table = 'klien';

    protected $fillable = [
        'nama',
        'nama_perusahaan',
        'email',
        'whatsapp',
        'alamat',
        'catatan',
    ];

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function kwitansi(): HasMany
    {
        return $this->hasMany(Kwitansi::class);
    }

    /**
     * Nama untuk ditampilkan di tabel/dropdown: "Nama (Perusahaan)" kalau
     * nama perusahaan diisi, kalau tidak cukup "Nama" saja.
     */
    public function getNamaTampilanAttribute(): string
    {
        return $this->nama_perusahaan
            ? "{$this->nama} ({$this->nama_perusahaan})"
            : $this->nama;
    }
}
