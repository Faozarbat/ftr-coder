@extends('layouts.app')

@section('title', 'Coba Demo ' . $produk->judul_id . ' — FTR-Coder')

@section('content')
    <div style="max-width: 420px; margin: 2rem auto; text-align: center;">
        <p style="color: var(--accent); font-family: 'Courier New', monospace; font-size: 0.8rem; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 0.5rem;">
            Akses Demo
        </p>
        <h1 style="font-size: 1.5rem; margin-bottom: 0.5rem;">{{ $produk->judul_id }}</h1>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 2rem;">
            Masukkan kode token yang Anda dapatkan dari admin via WhatsApp.
        </p>

        @if ($errors->any())
            <div style="background: rgba(224, 98, 90, 0.1); border: 1px solid #e0625a; color: #e0625a; padding: 0.75rem 1rem; border-radius: 8px; margin-bottom: 1.25rem; font-size: 0.85rem;">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('demo.verify', $demoType) }}">
            @csrf
            <input
                type="text"
                name="token"
                placeholder="Masukkan kode token"
                autocomplete="off"
                autocapitalize="characters"
                required
                style="width: 100%; padding: 0.8rem; margin-bottom: 1rem; background: var(--bg-card); border: 1px solid var(--border); border-radius: 8px; color: var(--text-light); font-family: 'Courier New', monospace; font-size: 1.1rem; text-align: center; letter-spacing: 2px; text-transform: uppercase; box-sizing: border-box;"
            >
            <button type="submit" style="width: 100%; background: var(--accent); color: #14161a; padding: 0.75rem; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">
                Masuk ke Demo
            </button>
        </form>

        <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: 1.5rem;">
            Belum punya token?
            <a href="https://wa.me/6281999263536?text=Halo,%20saya%20mau%20coba%20demo%20{{ urlencode($produk->judul_id) }}%20FTR-Coder" target="_blank" style="color: var(--accent);">
                Hubungi kami via WhatsApp
            </a>
        </p>
    </div>
@endsection