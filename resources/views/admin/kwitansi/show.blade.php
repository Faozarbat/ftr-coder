@extends('layouts.admin')

@section('title', $kwitansi->nomor_kwitansi)

@section('content')
    <div class="toolbar">
        <h1>{{ $kwitansi->nomor_kwitansi }}</h1>
        <div class="row-actions">
            <a href="{{ route('admin.kwitansi.pdf', $kwitansi) }}" target="_blank" class="btn btn-outline btn-sm">📄 PDF</a>
            <a href="{{ route('admin.kwitansi.index') }}" class="btn btn-outline btn-sm">&larr; Daftar</a>
        </div>
    </div>

    @if (session('success'))
        <div class="success-box">✅ {{ session('success') }}</div>
    @endif

    <div class="panel">
        <p class="mut">Klien: <span style="color:var(--text-light); font-weight:600;">{{ $kwitansi->klien->nama }}</span></p>
        @if ($kwitansi->invoice)
            <p class="mut">Invoice: <a href="{{ route('admin.invoice.show', $kwitansi->invoice) }}">{{ $kwitansi->invoice->nomor_invoice }}</a></p>
        @endif
        <p class="mut">Tanggal: <span style="color:var(--text-light);">{{ $kwitansi->tanggal->translatedFormat('d F Y') }}</span></p>
        <p class="mut">Untuk: <span style="color:var(--text-light);">{{ $kwitansi->untuk_pembayaran }}</span></p>
        @if ($kwitansi->metode_pembayaran)<p class="mut">Metode: <span style="color:var(--text-light);">{{ $kwitansi->metode_pembayaran }}</span></p>@endif
        @if ($kwitansi->catatan)<p class="mut">Catatan: {{ $kwitansi->catatan }}</p>@endif
        <p style="font-size:1.6rem; color:var(--accent); font-weight:700; margin-top:1rem;">Rp {{ number_format($kwitansi->jumlah, 0, ',', '.') }}</p>
    </div>

    <form method="POST" action="{{ route('admin.kwitansi.destroy', $kwitansi) }}" onsubmit="return confirm('Hapus kwitansi {{ $kwitansi->nomor_kwitansi }}? Nomor ini tidak akan dipakai ulang.');">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Hapus Kwitansi</button>
    </form>
@endsection
