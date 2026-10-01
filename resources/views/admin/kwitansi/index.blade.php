@extends('layouts.admin')

@section('title', 'Kwitansi')

@section('content')
    <div class="toolbar">
        <h1>Kwitansi</h1>
        <a href="{{ route('admin.kwitansi.create') }}" class="btn btn-accent">+ Buat Kwitansi</a>
    </div>

    @if (session('success'))
        <div class="success-box">✅ {{ session('success') }}</div>
    @endif

    <div class="toolbar">
        <form method="GET">
            <input type="text" name="cari" placeholder="Cari nomor / nama klien" value="{{ request('cari') }}">
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
        </form>
    </div>

    <table class="data-table">
        <thead>
            <tr><th>Nomor</th><th>Klien</th><th>Untuk Pembayaran</th><th>Tanggal</th><th class="num">Jumlah</th><th></th></tr>
        </thead>
        <tbody>
            @forelse ($kwitansi as $kw)
                <tr>
                    <td><a href="{{ route('admin.kwitansi.show', $kw) }}" class="token-code" style="text-decoration:none;">{{ $kw->nomor_kwitansi }}</a></td>
                    <td>{{ $kw->klien->nama ?? '-' }}</td>
                    <td class="mut">{{ $kw->untuk_pembayaran }}{{ $kw->invoice ? ' ('.$kw->invoice->nomor_invoice.')' : '' }}</td>
                    <td class="mut">{{ $kw->tanggal->translatedFormat('d M Y') }}</td>
                    <td class="num">Rp {{ number_format($kw->jumlah, 0, ',', '.') }}</td>
                    <td><a href="{{ route('admin.kwitansi.show', $kw) }}" class="btn btn-outline btn-sm">Lihat</a></td>
                </tr>
            @empty
                <tr><td colspan="6" class="mut">Belum ada kwitansi. <a href="{{ route('admin.kwitansi.create') }}">Buat yang pertama &rarr;</a></td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination">{{ $kwitansi->links() }}</div>
@endsection
