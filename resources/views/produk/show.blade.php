@extends('layouts.app')

@section('title', $produk->judul_id . ' — FTR-Coder')
@section('meta_description', $produk->ringkasan_id)

@section('content')
    <a href="{{ route('produk.index') }}" style="color: var(--text-muted); text-decoration: none; font-size: 0.9rem;">&larr; Kembali ke Produk</a>

    <h1 style="margin-top: 1rem; margin-bottom: 0.5rem;">{{ $produk->judul_id }}</h1>

    @if ($produk->teknologi)
        <span style="font-family: 'Courier New', monospace; font-size: 0.8rem; background: var(--bg-card); color: var(--accent); padding: 0.2rem 0.6rem; border-radius: 4px; display: inline-block; margin-bottom: 1.5rem;">
            {{ $produk->teknologi }}
        </span>
    @endif

    <div style="color: var(--text-light); line-height: 1.8; max-width: 700px; margin-bottom: 2rem;">
        {!! nl2br(e($produk->deskripsi_id)) !!}
    </div>

    <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem; max-width: 500px;">
        <h3 style="margin-bottom: 0.5rem;">Ingin coba demo-nya?</h3>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
            Hubungi kami via WhatsApp untuk mendapatkan akses demo interaktif produk ini.
        </p>
        <a href="https://wa.me/6281999263536?text=Halo,%20saya%20mau%20coba%20demo%20{{ urlencode($produk->judul_id) }}%20FTR-Coder"
           target="_blank"
           style="background: var(--accent); color: #14161a; padding: 0.65rem 1.25rem; border-radius: 6px; text-decoration: none; font-weight: 600; display: inline-block;">
            Coba Demo via WhatsApp
        </a>
    </div>
@endsection