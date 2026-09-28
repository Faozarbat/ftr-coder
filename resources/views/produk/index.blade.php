@extends('layouts.app')

@section('title', 'Produk & Jasa — FTR-Coder')
@section('meta_description', 'Jelajahi produk website statis, dinamis, dan web app dari FTR-Coder — lengkap dengan demo interaktif.')

@section('extra_head')
<style>
    .produk-intro { max-width: 560px; margin-bottom: 2.5rem; }
    .produk-intro h1 { font-size: 2rem; margin-bottom: 0.6rem; }
    .produk-intro p { color: var(--text-muted); }

    .produk-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1px;
        background: var(--border);
        border: 1px solid var(--border);
        border-radius: 10px;
        overflow: hidden;
    }

    .produk-card {
        background: var(--bg-card);
        padding: 1.75rem 1.5rem;
        text-decoration: none;
        color: inherit;
        display: flex;
        flex-direction: column;
        min-height: 210px;
    }

    .produk-card:hover { background: var(--border); }

    .produk-kategori {
        color: var(--accent);
        font-size: 0.8rem;
        margin-bottom: 0.6rem;
    }

    .produk-card h3 {
        font-size: 1.1rem;
        line-height: 1.35;
        margin-bottom: 0.6rem;
    }

    .produk-card p {
        color: var(--text-muted);
        font-size: 0.9rem;
        line-height: 1.55;
        flex-grow: 1;
    }

    .produk-tech {
        font-family: 'Courier New', monospace;
        font-size: 0.75rem;
        color: var(--text-muted);
        margin-top: 1.25rem;
        padding-top: 1rem;
        border-top: 1px solid var(--border);
    }

    @media (max-width: 640px) {
        .produk-grid { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
    <div class="produk-intro">
        <h1>Produk & Jasa Kami</h1>
        <p>Tujuh kategori layanan, masing-masing dengan demo yang bisa langsung Anda coba sebelum memutuskan.</p>
    </div>

    @php
        $semuaProduk = $kategori->flatMap(fn ($kat) => $kat->produk->map(fn ($p) => [$kat, $p]));
    @endphp

    @if ($semuaProduk->isNotEmpty())
        <div class="produk-grid">
            @foreach ($semuaProduk as [$kat, $produk])
                <a href="{{ $produk->demo_type === 'company-profile' ? route('demo.token-form', 'company-profile') : route('produk.show', $produk->slug) }}" class="produk-card reveal">
                    <span class="produk-kategori">{{ $kat->nama_id }}</span>
                    <h3>{{ $produk->judul_id }}</h3>
                    <p>{{ $produk->ringkasan_id }}</p>
                    @if ($produk->teknologi)
                        <span class="produk-tech">Dibangun dengan {{ $produk->teknologi }}</span>
                    @endif
                </a>
            @endforeach
        </div>
    @else
        <p style="color: var(--text-muted); text-align: center; padding: 3rem 0;">
            Produk sedang disiapkan. Silakan hubungi kami langsung untuk info lebih lanjut.
        </p>
    @endif
@endsection