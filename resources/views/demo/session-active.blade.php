@extends('layouts.app')

@section('title', 'Demo Aktif — ' . $produk->judul_id)

@section('content')
    <div style="max-width: 500px; margin: 3rem auto; text-align: center;">
        <div style="font-size: 3rem; margin-bottom: 1rem;">✅</div>
        <h1 style="font-size: 1.4rem; margin-bottom: 0.5rem;">Sesi Demo Aktif</h1>
        <p style="color: var(--text-muted); margin-bottom: 2rem;">
            Selamat mencoba demo <strong>{{ $produk->judul_id }}</strong>. Sesi Anda berlaku selama 30 menit.
        </p>

        <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem;">
            <p style="color: var(--text-muted); font-size: 0.9rem;">
                🚧 Tampilan demo interaktif untuk produk ini sedang dalam pengembangan.
                Fitur ini akan segera hadir.
            </p>
        </div>

        <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: 1.5rem;">
            ID Sesi Anda: <span style="font-family: 'Courier New', monospace; color: var(--accent);">{{ Str::limit($sessionId, 12) }}...</span>
        </p>
    </div>
@endsection