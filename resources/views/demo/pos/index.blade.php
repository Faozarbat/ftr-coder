@extends('layouts.app')

@section('title', 'Demo Sistem Kasir (POS) - FTR-Coder')
@section('meta_description', 'Coba langsung demo interaktif sistem kasir (POS) buatan FTR-Coder.')

@section('content')
<style>
    .pos-wrap { display:grid; grid-template-columns: 2fr 1fr; gap:24px; padding:32px 24px; max-width:1200px; margin:0 auto; }
    .pos-title { color:var(--text-light); font-family:'Courier New', monospace; margin-bottom:4px; }
    .pos-subtitle { color:var(--text-muted); margin-bottom:20px; }
    .pos-products { display:grid; grid-template-columns:repeat(auto-fill,minmax(140px,1fr)); gap:14px; }
    .pos-product-card { background:var(--bg-card); border:1px solid var(--border); border-radius:8px; padding:14px; text-align:center; }
    .pos-product-card .icon { font-size:28px; }
    .pos-product-card .nama { color:var(--text-light); font-weight:600; margin:8px 0 2px; font-size:14px; }
    .pos-product-card .harga { color:var(--accent); font-family:'Courier New', monospace; font-size:13px; margin-bottom:10px; }
    .pos-product-card button { width:100%; background:var(--accent); color:#14161a; border:none; padding:8px; border-radius:6px; font-weight:600; cursor:pointer; }
    .pos-cart { background:var(--bg-card); border:1px solid var(--border); border-radius:8px; padding:18px; align-self:start; position:sticky; top:20px; }
    .pos-cart h3 { color:var(--text-light); margin-top:0; font-family:'Courier New', monospace; }
    .pos-cart-item { display:flex; justify-content:space-between; align-items:flex-start; gap:8px; padding:8px 0; border-bottom:1px solid var(--border); color:var(--text-light); font-size:14px; }
    .pos-cart-item .qty { color:var(--text-muted); font-family:'Courier New', monospace; font-size:12px; }
    .pos-cart-item .subtotal { text-align:right; white-space:nowrap; }
    .pos-cart-item button { background:none; border:none; color:#c25a5a; cursor:pointer; font-size:12px; margin-top:4px; padding:0; }
    .pos-cart-total { display:flex; justify-content:space-between; margin-top:14px; padding-top:14px; border-top:1px solid var(--border); color:var(--text-light); font-weight:700; font-family:'Courier New', monospace; }
    .pos-cart form.checkout { margin-top:16px; }
    .pos-cart form.checkout input { width:100%; padding:10px; margin-bottom:10px; background:var(--bg-dark); border:1px solid var(--border); border-radius:6px; color:var(--text-light); box-sizing:border-box; }
    .pos-cart form.checkout button { width:100%; background:var(--accent); color:#14161a; border:none; padding:10px; border-radius:6px; font-weight:700; cursor:pointer; }
    .pos-flash { background:rgba(217,142,60,0.12); border:1px solid var(--accent); color:var(--accent); padding:10px 14px; border-radius:6px; margin-bottom:16px; font-size:14px; }
    .pos-flash.error { background:rgba(194,90,90,0.12); border-color:#c25a5a; color:#c25a5a; }
    .pos-empty { color:var(--text-muted); font-size:14px; padding:12px 0; }
    @media (max-width: 800px) {
        .pos-wrap { grid-template-columns:1fr; padding:20px 16px; }
        .pos-cart { position:static; }
    }
</style>

<div class="pos-wrap">
    <div>
        <h2 class="pos-title">Demo Sistem Kasir (POS)</h2>
        <p class="pos-subtitle">Pilih produk, lihat total dihitung otomatis, lalu coba proses pembayarannya.</p>

        @if (session('success'))
            <div class="pos-flash">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="pos-flash error">{{ session('error') }}</div>
        @endif

        <div class="pos-products">
            @foreach ($produkKasir as $produk)
                <div class="pos-product-card">
                    <div class="icon">{{ $produk->icon ?? '🛒' }}</div>
                    <div class="nama">{{ $produk->nama }}</div>
                    <div class="harga">Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
                    <form method="POST" action="{{ route('demo.pos.tambah') }}">
                        @csrf
                        <input type="hidden" name="demo_pos_product_id" value="{{ $produk->id }}">
                        <button type="submit">+ Tambah</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <div class="pos-cart">
        <h3>Keranjang</h3>

        @forelse ($transaksi->items as $item)
            <div class="pos-cart-item">
                <div>
                    {{ $item->product->nama }}
                    <div class="qty">{{ $item->qty }} x Rp {{ number_format($item->harga_saat_itu, 0, ',', '.') }}</div>
                </div>
                <div class="subtotal">
                    Rp {{ number_format($item->qty * $item->harga_saat_itu, 0, ',', '.') }}
                    <form method="POST" action="{{ route('demo.pos.hapus', $item->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="pos-empty">Keranjang masih kosong. Klik "+ Tambah" pada produk di sebelah kiri.</p>
        @endforelse

        <div class="pos-cart-total">
            <span>Total</span>
            <span>Rp {{ number_format($transaksi->total, 0, ',', '.') }}</span>
        </div>

        @if ($transaksi->items->isNotEmpty())
            <form method="POST" action="{{ route('demo.pos.checkout') }}" class="checkout">
                @csrf
                <input type="number" name="paid_amount" placeholder="Uang dibayar (Rp)" min="{{ $transaksi->total }}" required>
                @error('paid_amount')
                    <div class="pos-flash error" style="margin-bottom:10px;">{{ $message }}</div>
                @enderror
                <button type="submit">Proses Pembayaran</button>
            </form>
        @endif
    </div>
</div>
@endsection
