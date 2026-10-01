@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 style="margin-bottom: 1.5rem;">Dashboard</h1>

    @if (session('success'))
        <div class="success-box">✅ {{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="success-box" style="border-color: var(--danger); color: var(--danger); background: rgba(var(--danger-rgb), 0.12);">⚠️ {{ session('error') }}</div>
    @endif

    <div class="stat-grid">
        <div class="stat-card">
            <span class="stat-label">Pendapatan Bulan Ini</span>
            <span class="stat-value">Rp {{ number_format($pendapatanBulanIni, 0, ',', '.') }}</span>
            <span class="stat-sub">dari kwitansi yang tercatat</span>
        </div>
        <div class="stat-card">
            <span class="stat-label">Invoice Belum Dibayar</span>
            <span class="stat-value">{{ $jumlahInvoiceBelumDibayar }}</span>
            <span class="stat-sub">total Rp {{ number_format($totalInvoiceBelumDibayar, 0, ',', '.') }}</span>
        </div>
        <div class="stat-card">
            <span class="stat-label">Klien Terdaftar</span>
            <span class="stat-value">{{ $jumlahKlien }}</span>
            <span class="stat-sub"><a href="{{ route('admin.klien.index') }}">lihat semua &rarr;</a></span>
        </div>
        <div class="stat-card">
            <span class="stat-label">Token Terpakai Bulan Ini</span>
            <span class="stat-value">{{ $tokenTerpakaiBulanIni }}</span>
            <span class="stat-sub"><a href="{{ route('admin.tokens') }}">lihat semua &rarr;</a></span>
        </div>
    </div>

    <div class="panel">
        <h3>Pendapatan 6 Bulan Terakhir</h3>
        <div class="bar-chart">
            @foreach ($grafikPendapatan as $bulan)
                <div class="bar-col">
                    <div class="bar-value">{{ $bulan['total'] > 0 ? 'Rp ' . number_format($bulan['total'] / 1000, 0, ',', '.') . 'rb' : '' }}</div>
                    <div class="bar" style="height: {{ max(4, round($bulan['total'] / $maxGrafik * 120)) }}px;"></div>
                    <div class="bar-label">{{ $bulan['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="two-col">
        <div class="panel">
            <h3>Invoice Terbaru</h3>
            @forelse ($invoiceTerbaru as $inv)
                <a href="{{ route('admin.invoice.show', $inv) }}" class="list-row">
                    <div>
                        <div class="list-title">{{ $inv->nomor_invoice }}</div>
                        <div class="list-sub">{{ $inv->klien->nama ?? '-' }}</div>
                    </div>
                    <div style="text-align:right;">
                        <div class="list-title">Rp {{ number_format($inv->total, 0, ',', '.') }}</div>
                        <span class="badge badge-{{ $inv->status }}">{{ \App\Models\Invoice::labelStatus($inv->status) }}</span>
                    </div>
                </a>
            @empty
                <p class="mut">Belum ada invoice. <a href="{{ route('admin.invoice.create') }}">Buat invoice pertama &rarr;</a></p>
            @endforelse
        </div>

        <div class="panel">
            <h3>Token Demo per Kategori (terpakai)</h3>
            @forelse ($tokenPerKategori as $t)
                <div class="list-row" style="cursor:default;">
                    <span>{{ $t->demo_type }}</span>
                    <strong>{{ $t->jumlah }}</strong>
                </div>
            @empty
                <p class="mut">Belum ada token yang terpakai.</p>
            @endforelse

            <h3 style="margin-top: 1.5rem;">Token Terbaru</h3>
            @forelse ($tokenTerbaru as $t)
                <div class="list-row" style="cursor:default;">
                    <div>
                        <div class="list-title token-code">{{ $t->token }}</div>
                        <div class="list-sub">{{ $t->demo_type }}</div>
                    </div>
                    <span class="badge {{ $t->is_used ? 'badge-lunas' : 'badge-belum_dibayar' }}">{{ $t->is_used ? 'Terpakai' : 'Belum' }}</span>
                </div>
            @empty
                <p class="mut">Belum ada token.</p>
            @endforelse
        </div>
    </div>
@endsection