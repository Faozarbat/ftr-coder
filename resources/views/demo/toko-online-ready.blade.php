@extends('layouts.app')

@section('title', 'Demo Aktif - ' . $produk->judul_id . ' — FTR-Coder')

@section('content')
<style>
    .ready-wrap { max-width: 480px; margin: 3rem auto; text-align: center; }
    .ready-icon { font-size: 42px; margin-bottom: 12px; }
    .ready-wrap h1 { font-size: 1.4rem; margin-bottom: 8px; }
    .ready-wrap p { color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.75rem; }
    .ready-btn { display: inline-block; background: var(--accent); color: #14161a; padding: 0.9rem 1.8rem; border-radius: 10px; text-decoration: none; font-weight: 700; font-size: 1.05rem; }
    .ready-btn:hover { opacity: 0.92; }
    .ready-note { color: var(--text-muted); font-size: 0.8rem; margin-top: 1rem; }
    .ready-back { color: var(--accent); font-size: 0.85rem; margin-top: 2rem; display: inline-block; }
</style>

<div class="ready-wrap">
    <div class="ready-icon">✅</div>
    <h1>Token Berhasil, Demo Siap Dicoba</h1>
    <p>Sesi demo {{ $produk->judul_id }} kamu aktif selama 30 menit. Demo akan terbuka di tab baru supaya kamu tetap bisa balik ke halaman ini.</p>

    <a href="{{ route('demo.toko-online.index', $no) }}" target="_blank" rel="noopener" class="ready-btn">
         Buka Demo di Tab Baru
    </a>

    <p class="ready-note">Kalau tab baru tidak terbuka otomatis (browser memblokir popup), klik tombol di atas sekali lagi.</p>

    <br>
    <a href="{{ route('produk.index') }}" class="ready-back">← Kembali ke Katalog Produk</a>
</div>
@endsection