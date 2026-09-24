<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DemoPosTransaction extends Model
{
    protected $table = 'demo_pos_transactions';

    protected $fillable = [
        'session_id',
        'status',
        'paid_amount',
        'change_amount',
        'completed_at',
    ];

    protected $casts = [
        'completed_at' => 'datetime',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(DemoPosTransactionItem::class);
    }

    /**
     * Total belanja, dihitung dari item yang sudah dimuat (butuh ->load('items')
     * atau ->with('items') dulu sebelum dipakai, supaya tidak query berulang).
     */
    public function getTotalAttribute(): int
    {
        return $this->items->sum(fn (DemoPosTransactionItem $item) => $item->qty * $item->harga_saat_itu);
    }
}
