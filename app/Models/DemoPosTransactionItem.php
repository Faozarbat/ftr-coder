<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DemoPosTransactionItem extends Model
{
    protected $table = 'demo_pos_transaction_items';

    protected $fillable = [
        'demo_pos_transaction_id',
        'demo_pos_product_id',
        'qty',
        'harga_saat_itu',
    ];

    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(DemoPosTransaction::class, 'demo_pos_transaction_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(DemoPosProduct::class, 'demo_pos_product_id');
    }
}
