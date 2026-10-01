<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = [
        'nomor_invoice',
        'klien_id',
        'tanggal_invoice',
        'tanggal_jatuh_tempo',
        'status',
        'subtotal',
        'ppn_persen',
        'ppn_nominal',
        'diskon_ppn_nominal',
        'diskon_tambahan_nominal',
        'total',
        'catatan',
    ];

    protected $casts = [
        'tanggal_invoice' => 'date',
        'tanggal_jatuh_tempo' => 'date',
        'subtotal' => 'decimal:2',
        'ppn_persen' => 'decimal:2',
        'ppn_nominal' => 'decimal:2',
        'diskon_ppn_nominal' => 'decimal:2',
        'diskon_tambahan_nominal' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    const STATUS_BELUM_DIBAYAR = 'belum_dibayar';
    const STATUS_LUNAS = 'lunas';
    const STATUS_BATAL = 'batal';

    public static function labelStatus(string $status): string
    {
        return match ($status) {
            self::STATUS_LUNAS => 'Lunas',
            self::STATUS_BATAL => 'Batal',
            default => 'Belum Dibayar',
        };
    }

    protected static function booted(): void
    {
        static::creating(function (Invoice $invoice) {
            if (empty($invoice->nomor_invoice)) {
                $invoice->nomor_invoice = static::generateNomor();
            }
        });
    }

    public function klien(): BelongsTo
    {
        return $this->belongsTo(Klien::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(InvoiceItem::class)->orderBy('urutan');
    }

    public function kwitansi(): HasMany
    {
        return $this->hasMany(Kwitansi::class);
    }

    /**
     * Total yang sudah dibayar (dijumlah dari semua kwitansi terhubung).
     */
    public function getTotalDibayarAttribute(): float
    {
        return (float) $this->kwitansi()->sum('jumlah');
    }

    public function getSisaTagihanAttribute(): float
    {
        return max(0, (float) $this->total - $this->total_dibayar);
    }

    /**
     * Hitung ulang subtotal/PPN/diskon/total dari item-item yang tersimpan.
     * Dipanggil controller setelah item invoice disimpan/diubah/dihapus.
     * PPN selalu dinetralkan lewat diskon_ppn_nominal SELAMA
     * config('invoice.ppn_aktif_dipungut') masih false (lihat config/invoice.php).
     */
    public function hitungUlangTotal(?float $diskonTambahan = null): void
    {
        $subtotal = (float) $this->items()->sum('subtotal');
        $ppnPersen = (float) ($this->ppn_persen ?: config('invoice.ppn_persen_default'));
        $ppnNominal = round($subtotal * $ppnPersen / 100, 2);
        $ppnAktifDipungut = (bool) config('invoice.ppn_aktif_dipungut');
        $diskonPpn = $ppnAktifDipungut ? 0 : $ppnNominal;
        $diskonTambahan = $diskonTambahan ?? (float) $this->diskon_tambahan_nominal;

        $this->subtotal = $subtotal;
        $this->ppn_persen = $ppnPersen;
        $this->ppn_nominal = $ppnNominal;
        $this->diskon_ppn_nominal = $diskonPpn;
        $this->diskon_tambahan_nominal = $diskonTambahan;
        $this->total = max(0, $subtotal + $ppnNominal - $diskonPpn - $diskonTambahan);
        $this->save();
    }

    /**
     * Format: INV/{tahun}/{urut 4 digit}. Urut TIDAK dimulai dari 1 (lihat
     * config('invoice.nomor_offset_invoice')) dan TIDAK PERNAH mundur/dipakai
     * ulang — diambil dari CounterDokumen (penghitung permanen terpisah),
     * bukan MAX(nomor_invoice) dari baris yang ada, supaya invoice yang
     * dihapus tidak membuat nomornya kepakai ulang oleh invoice berikutnya.
     */
    public static function generateNomor(): string
    {
        $offset = (int) config('invoice.nomor_offset_invoice');
        $urut = CounterDokumen::ambilNomorBerikutnya('invoice', $offset);

        return sprintf('INV/%s/%04d', now()->format('Y'), $urut);
    }
}
