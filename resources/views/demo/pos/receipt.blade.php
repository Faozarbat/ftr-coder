@extends('layouts.app')

@section('title', 'Struk Pembayaran - Demo POS FTR-Coder')

@section('content')
<style>
    .receipt-wrap { max-width:420px; margin:40px auto; background:var(--bg-card); border:1px solid var(--border); border-radius:8px; padding:24px; font-family:'Courier New', monospace; color:var(--text-light); }
    .receipt-wrap h2 { text-align:center; margin-top:0; }
    .receipt-meta { text-align:center; color:var(--text-muted); font-size:12px; margin-bottom:16px; }
    .receipt-row { display:flex; justify-content:space-between; font-size:13px; padding:4px 0; border-bottom:1px dashed var(--border); }
    .receipt-total { display:flex; justify-content:space-between; font-weight:700; margin-top:12px; padding-top:12px; border-top:1px solid var(--border); }
    .receipt-actions { text-align:center; margin-top:20px; }
    .receipt-actions a { display:inline-block; background:var(--accent); color:#14161a; padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700; }
</style>

<div class="receipt-wrap">
    <h2>🧾 Struk Demo</h2>
    <p class="receipt-meta">FTR-Coder — Demo Sistem Kasir (POS)<br>{{ $transaksi->completed_at->format('d M Y, H:i') }}</p>

    @foreach ($transaksi->items as $item)
        <div class="receipt-row">
            <span>{{ $item->product->nama }} x{{ $item->qty }}</span>
            <span>Rp {{ number_format($item->qty * $item->harga_saat_itu, 0, ',', '.') }}</span>
        </div>
    @endforeach

    <div class="receipt-total">
        <span>Total</span>
        <span>Rp {{ number_format($transaksi->total, 0, ',', '.') }}</span>
    </div>
    <div class="receipt-row">
        <span>Dibayar</span>
        <span>Rp {{ number_format($transaksi->paid_amount, 0, ',', '.') }}</span>
    </div>
    <div class="receipt-row">
        <span>Kembali</span>
        <span>Rp {{ number_format($transaksi->change_amount, 0, ',', '.') }}</span>
    </div>

    <div class="receipt-actions">
        <a href="{{ route('demo.pos.index') }}">Coba Transaksi Baru</a>
    </div>
</div>
@endsection
