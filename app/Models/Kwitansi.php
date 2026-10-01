<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kwitansi extends Model
{
    protected $table = 'kwitansi';

    protected $fillable = [
        'nomor_kwitansi',
        'klien_id',
        'invoice_id',
        'tanggal',
        'jumlah',
        'untuk_pembayaran',
        'metode_pembayaran',
        'catatan',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jumlah' => 'decimal:2',
    ];

    protected static function booted(): void
    {
        static::creating(function (Kwitansi $kwitansi) {
            if (empty($kwitansi->nomor_kwitansi)) {
                $kwitansi->nomor_kwitansi = static::generateNomor();
            }
        });
    }

    public function klien(): BelongsTo
    {
        return $this->belongsTo(Klien::class);
    }

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    /**
     * Format: KW/{tahun}/{urut 4 digit}. Pakai CounterDokumen (penghitung
     * permanen terpisah dari Invoice, lihat Invoice::generateNomor()).
     */
    public static function generateNomor(): string
    {
        $offset = (int) config('invoice.nomor_offset_kwitansi');
        $urut = CounterDokumen::ambilNomorBerikutnya('kwitansi', $offset);

        return sprintf('KW/%s/%04d', now()->format('Y'), $urut);
    }
}
