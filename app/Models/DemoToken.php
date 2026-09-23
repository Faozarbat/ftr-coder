<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoToken extends Model
{
    protected $table = 'demo_tokens';

    protected $fillable = [
        'token',
        'demo_type',
        'session_id',
        'is_used',
        'contact_name',
        'expired_at',
        'session_expired_at',
    ];

    protected $casts = [
        'is_used' => 'boolean',
        'expired_at' => 'datetime',
        'session_expired_at' => 'datetime',
    ];
}