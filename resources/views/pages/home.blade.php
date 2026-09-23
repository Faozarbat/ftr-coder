@extends('layouts.app')

@section('title', 'FTR-Coder — Jasa Pembuatan Website & Web App dengan Demo Interaktif')

@section('content')
    <section style="text-align: center; padding: 3rem 0;">
        <h1 style="font-size: 2.2rem; margin-bottom: 1rem;">
            Website & Web App yang Bisa Anda <span style="color: var(--accent);">Coba Langsung</span>
        </h1>
        <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto 1.5rem;">
            FTR-Coder (sebelumnya FTR-Web) membangun website statis, dinamis, dan web app —
            lengkap dengan demo interaktif untuk setiap kategori produk, sebelum Anda memutuskan.
        </p>
        <a href="{{ route('produk.index') }}" style="background: var(--accent); color: #14161a; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600;">
            Lihat Produk & Demo
        </a>
    </section>

    <section style="padding: 2rem 0; border-top: 1px solid var(--border);">
        <h2 style="margin-bottom: 1.5rem;">Kategori Layanan</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem;">
            <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem;">
                <h3 style="margin-bottom: 0.5rem;">Web Statis</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Landing page, company profile, portfolio — cepat dan ringan.</p>
            </div>
            <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem;">
                <h3 style="margin-bottom: 0.5rem;">Web Dinamis</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Toko online, sistem berita, booking — dengan panel admin.</p>
            </div>
            <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem;">
                <h3 style="margin-bottom: 0.5rem;">Web App</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Sistem POS, manajemen sekolah, accounting — logic lebih kompleks.</p>
            </div>
        </div>
    </section>
@endsection