@extends('layouts.app')

@section('title', 'Produk & Jasa — FTR-Coder')
@section('meta_description', 'Jelajahi produk website statis, dinamis, dan web app dari FTR-Coder — lengkap dengan demo interaktif.')

@section('extra_head')
<style>
    .produk-section { margin-bottom: 3rem; }

    .produk-section h2 {
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--accent);
        font-family: 'Courier New', monospace;
        margin-bottom: 1.25rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid var(--border);
    }

    .produk-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 300px));
        gap: 1.25rem;
        justify-content: start;
    }

    .produk-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 1.5rem;
        text-decoration: none;
        color: inherit;
        display: flex;
        flex-direction: column;
        gap: 0.6rem;
        transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .produk-card:hover {
        transform: translateY(-4px);
        border-color: var(--accent);
        box-shadow: 0 8px 24px rgba(0,0,0,0.35);
    }

    .produk-badge {
        font-family: 'Courier New', monospace;
        font-size: 0.72rem;
        background: rgba(217, 142, 60, 0.12);
        color: var(--accent);
        padding: 0.2rem 0.55rem;
        border-radius: 5px;
        display: inline-block;
        width: fit-content;
    }

    .produk-card h3 { font-size: 1.05rem; }

    .produk-card p {
        color: var(--text-muted);
        font-size: 0.88rem;
        flex-grow: 1;
    }

    .produk-card .lihat {
        color: var(--accent);
        font-size: 0.85rem;
        font-weight: 600;
        margin-top: 0.25rem;
    }
</style>
@endsection

@section('content')
    <div style="text-align: center; margin-bottom: 3rem;">
        <p style="color: var(--accent); font-family: 'Courier New', monospace; font-size: 0.85rem; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 0.5rem;">
            Katalog Layanan
        </p>
        <h1 style="margin-bottom: 0.5rem;">Produk & Jasa Kami</h1>
        <p style="color: var(--text-muted); max-width: 500px; margin: 0 auto;">
            Pilih kategori, coba demo interaktifnya, dan hubungi kami untuk diskusi lebih lanjut.
        </p>
    </div>

    @forelse ($kategori as $kat)
        @if ($kat->produk->count() > 0)
            <div class="produk-section">
                <h2>{{ $kat->nama_id }}</h2>
                <div class="produk-grid">
                    @foreach ($kat->produk as $produk)
                        <a href="{{ route('produk.show', $produk->slug) }}" class="produk-card">
                            @if ($produk->teknologi)
                                <span class="produk-badge">{{ $produk->teknologi }}</span>
                            @endif
                            <h3>{{ $produk->judul_id }}</h3>
                            <p>{{ $produk->ringkasan_id }}</p>
                            <span class="lihat">Lihat Detail &rarr;</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    @empty
    @endforelse

    @if ($kategori->every(fn($kat) => $kat->produk->count() === 0))
        <p style="color: var(--text-muted); text-align: center; padding: 3rem 0;">
            Produk sedang disiapkan. Silakan hubungi kami langsung untuk info lebih lanjut.
        </p>
    @endif
@endsection