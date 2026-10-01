@extends('layouts.admin')

@section('title', 'Invoice')

@section('content')
    <div class="toolbar">
        <h1>Invoice</h1>
        <a href="{{ route('admin.invoice.create') }}" class="btn btn-accent">+ Buat Invoice</a>
    </div>

    @if (session('success'))
        <div class="success-box">✅ {{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="success-box" style="border-color: var(--danger); color: var(--danger); background: rgba(var(--danger-rgb), 0.12);">⚠️ {{ session('error') }}</div>
    @endif

    <div class="toolbar">
        <form method="GET" style="align-items:center;">
            <input type="text" name="cari" placeholder="Cari nomor / nama klien" value="{{ request('cari') }}">
            <select name="status">
                <option value="">Semua Status</option>
                <option value="belum_dibayar" @selected(request('status') === 'belum_dibayar')>Belum Dibayar</option>
                <option value="lunas" @selected(request('status') === 'lunas')>Lunas</option>
                <option value="batal" @selected(request('status') === 'batal')>Batal</option>
            </select>
            <button type="submit" class="btn btn-outline btn-sm">Filter</button>
        </form>
    </div>

    <table class="data-table">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Klien</th>
                <th>Tanggal</th>
                <th class="num">Total</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($invoice as $inv)
                <tr>
                    <td><a href="{{ route('admin.invoice.show', $inv) }}" class="token-code" style="text-decoration:none;">{{ $inv->nomor_invoice }}</a></td>
                    <td>{{ $inv->klien->nama ?? '-' }}</td>
                    <td class="mut">{{ $inv->tanggal_invoice->translatedFormat('d M Y') }}</td>
                    <td class="num">Rp {{ number_format($inv->total, 0, ',', '.') }}</td>
                    <td><span class="badge badge-{{ $inv->status }}">{{ \App\Models\Invoice::labelStatus($inv->status) }}</span></td>
                    <td>
                        <div class="row-actions">
                            <a href="{{ route('admin.invoice.show', $inv) }}" class="btn btn-outline btn-sm">Lihat</a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="mut">Belum ada invoice. <a href="{{ route('admin.invoice.create') }}">Buat yang pertama &rarr;</a></td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination">{{ $invoice->links() }}</div>
@endsection
