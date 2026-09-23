@extends('layouts.app')

@section('title', 'Kontak — FTR-Coder')
@section('meta_description', 'Hubungi FTR-Coder untuk diskusi kebutuhan website atau web app Anda.')

@section('content')
    <h1 style="margin-bottom: 0.5rem;">Hubungi Kami</h1>
    <p style="color: var(--text-muted); margin-bottom: 2rem;">Punya kebutuhan spesifik atau ingin diskusi langsung? Kontak kami di bawah ini.</p>

    <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 2rem; max-width: 450px;">
        <h3 style="margin-bottom: 0.5rem;">WhatsApp</h3>
        <p style="color: var(--text-muted); margin-bottom: 1rem;">Respon tercepat, cocok untuk diskusi awal atau minta demo produk.</p>
        <a href="https://wa.me/6281999263536" target="_blank" style="background: var(--accent); color: #14161a; padding: 0.65rem 1.25rem; border-radius: 6px; text-decoration: none; font-weight: 600; display: inline-block;">
            Chat via WhatsApp
        </a>
    </div>

    <div style="margin-top: 2rem; max-width: 450px;">
        <h3 style="margin-bottom: 0.5rem;">Punya kebutuhan di luar produk yang tersedia?</h3>
        <p style="color: var(--text-muted); font-size: 0.9rem;">
            Kami juga menerima proyek custom di luar kategori produk yang ditampilkan.
            Ceritakan kebutuhan Anda langsung lewat WhatsApp, dan kami akan diskusikan solusinya.
        </p>
    </div>
@endsection