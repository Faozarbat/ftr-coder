<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CounterDokumen extends Model
{
    protected $table = 'counter_dokumen';

    protected $fillable = ['tipe', 'nomor_terakhir'];

    /**
     * Ambil nomor urut berikutnya untuk $tipe ('invoice'/'kwitansi') secara
     * atomik (aman dari race condition kalau 2 invoice dibuat bersamaan) dan
     * TIDAK PERNAH mundur — beda dari sekadar MAX(nomor_dokumen) yang bisa
     * kepakai ulang kalau ada dokumen yang dihapus.
     */
    public static function ambilNomorBerikutnya(string $tipe, int $offset): int
    {
        return DB::transaction(function () use ($tipe, $offset) {
            $counter = static::query()->lockForUpdate()->firstOrCreate(
                ['tipe' => $tipe],
                ['nomor_terakhir' => $offset - 1]
            );

            // Kalau offset dinaikkan manual (mis. lewat .env) setelah counter
            // sempat berjalan lebih rendah dari offset baru, tetap hormati
            // offset baru itu, jangan malah turun.
            $nomorBaru = max($counter->nomor_terakhir + 1, $offset);

            $counter->update(['nomor_terakhir' => $nomorBaru]);

            return $nomorBaru;
        });
    }
}
