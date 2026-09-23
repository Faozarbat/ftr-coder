@extends('layouts.app')

@section('title', 'Produk & Jasa — FTR-Coder')
@section('meta_description', 'Jelajahi produk website statis, dinamis, dan web app dari FTR-Coder — lengkap dengan demo interaktif.')

@section('content')
    <h1 style="margin-bottom: 0.5rem;">Produk & Jasa Kami</h1>
    <p style="color: var(--text-muted); margin-bottom: 2rem;">Pilih kategori, coba demo interaktifnya, dan hubungi kami untuk diskusi lebih lanjut.</p>

    @forelse ($kategori as $kat)
        @if ($kat->produk->count() > 0)
            <div style="margin-bottom: 2.5rem;">
                <h2 style="margin-bottom: 1rem; border-bottom: 1px solid var(--border); padding-bottom: 0.5rem;">
                    {{ $kat->nama_id }}
                </h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem;">
                    @foreach ($kat->produk as $produk)
                        <a href="{{ route('produk.show', $produk->slug) }}" style="text-decoration: none; color: inherit;">
                            <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.5rem; height: 100%;">
                                <h3 style="margin-bottom: 0.5rem;">{{ $produk->judul_id }}</h3>
                                @if ($produk->teknologi)
                                    <span style="font-family: 'Courier New', monospace; font-size: 0.75rem; background: var(--bg-dark); color: var(--accent); padding: 0.15rem 0.5rem; border-radius: 4px; display: inline-block; margin-bottom: 0.5rem;">
                                        {{ $produk->teknologi }}
                                    </span>
                                @endif
                                <p style="color: var(--text-muted); font-size: 0.9rem;">{{ $produk->ringkasan_id }}</p>
                            </div>
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