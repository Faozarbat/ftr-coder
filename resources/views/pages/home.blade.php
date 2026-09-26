@extends('layouts.app')

@section('title', 'FTR-Coder — Jasa Pembuatan Website & Aplikasi Web dengan Demo Interaktif')
@section('meta_description', 'FTR-Coder (sebelumnya FTR-Web) adalah jasa pembuatan website dan aplikasi web berbasis Laravel — company profile, toko online, sistem booking, POS, hingga portal berita. Coba demo interaktifnya sebelum Anda memutuskan.')

@section('content')
    <section style="text-align: center; padding: 3rem 0;">
        <p style="color: var(--accent); font-family: 'Courier New', monospace; font-size: 2.5rem; letter-spacing: 2px; margin-bottom: 0.75rem; text-transform: uppercase;">
            Jasa Pembuatan & Pengembangan Program
        </p>
        <h1 style="font-size: 2.2rem; margin-bottom: 1rem;">
            Jasa Pembuatan Website & Aplikasi Web yang Bisa Anda <span style="color: var(--accent);">Coba Langsung</span>
        </h1>
        <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto 1.5rem;">
            FTR-Coder (sebelumnya FTR-Web) mengerjakan website statis, website dinamis, dan aplikasi web custom —
            dari company profile sampai sistem kasir dan toko online. Setiap kategori produk punya
            demo interaktif yang bisa langsung Anda coba sendiri, bukan sekadar deskripsi atau tangkapan layar.
        </p>
        <a href="{{ route('produk.index') }}" style="background: var(--accent); color: #14161a; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600;">
            Lihat Produk & Demo
        </a>
    </section>

    <section style="padding: 2rem 0; border-top: 1px solid var(--border);">
        <h2 style="margin-bottom: 1.5rem;">Kategori Layanan</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem;">
            <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem;">
                <h3 style="margin-bottom: 0.5rem;">Website Statis</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Landing page, company profile, dan portfolio — dibangun cepat, ringan, dan gampang di-maintain sendiri.</p>
            </div>
            <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem;">
                <h3 style="margin-bottom: 0.5rem;">Website Dinamis</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Toko online, portal berita, dan sistem booking — lengkap dengan panel admin untuk kelola konten sendiri.</p>
            </div>
            <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem;">
                <h3 style="margin-bottom: 0.5rem;">Aplikasi Web (Web App)</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Sistem kasir (POS), manajemen kursus & pelatihan, sampai accounting — untuk alur kerja yang lebih kompleks.</p>
            </div>
        </div>
    </section>

    <section style="padding: 2rem 0; border-top: 1px solid var(--border);">
        <h2 style="margin-bottom: 1.5rem;">Kenapa Coba FTR-Coder</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem;">
            <div>
                <h3 style="margin-bottom: 0.5rem; font-size: 1rem; color: var(--accent);">Demo Nyata, Bukan Mockup</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Setiap produk bisa langsung dicoba sebagai aplikasi sungguhan — bukan cuma screenshot atau video promosi.</p>
            </div>
            <div>
                <h3 style="margin-bottom: 0.5rem; font-size: 1rem; color: var(--accent);">Satu Developer, Tanggung Jawab Penuh</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Anda bicara langsung dengan yang mengerjakan kode, bukan lewat berlapis tim marketing.</p>
            </div>
            <div>
                <h3 style="margin-bottom: 0.5rem; font-size: 1rem; color: var(--accent);">Proses Transparan</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Dari briefing sampai deploy, Anda tahu persis tahapan yang sedang berjalan. Lihat <a href="{{ route('proses-kerja') }}" style="color: var(--accent);">alur kerja kami</a>.</p>
            </div>
        </div>
    </section>
@endsection