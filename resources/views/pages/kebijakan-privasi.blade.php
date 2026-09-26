@extends('layouts.app')

@section('title', 'Kebijakan Privasi — FTR-Coder')
@section('meta_description', 'Kebijakan privasi FTR-Coder: bagaimana kami mengumpulkan dan menggunakan data kontak Anda saat meminta akses demo produk.')

@section('content')
    <h1 style="margin-bottom: 1.5rem;">Kebijakan Privasi</h1>

    <div style="max-width: 700px; line-height: 1.8; color: var(--text-muted);">
        <p style="margin-bottom: 1rem;">
            Untuk memberikan akses demo produk, kami mengumpulkan data kontak (nomor WhatsApp) dari
            pengunjung yang menghubungi kami. Data ini digunakan semata-mata untuk keperluan
            follow-up terkait penawaran jasa FTR-Coder, dan <strong>tidak dibagikan ke pihak ketiga</strong>
            dalam bentuk apapun.
        </p>
        <p>
            Jika Anda memiliki pertanyaan terkait data yang kami simpan, silakan hubungi kami
            langsung melalui halaman <a href="{{ route('kontak') }}" style="color: var(--accent);">Kontak</a>.
        </p>
    </div>
@endsection