@extends('layouts.admin')

@section('title', 'Klien')

@section('content')
    <div class="toolbar">
        <h1>Klien</h1>
        <a href="{{ route('admin.klien.create') }}" class="btn btn-accent">+ Tambah Klien</a>
    </div>

    @if (session('success'))
        <div class="success-box">✅ {{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="success-box" style="border-color: var(--danger); color: var(--danger); background: rgba(var(--danger-rgb), 0.12);">⚠️ {{ session('error') }}</div>
    @endif

    <div class="toolbar">
        <form method="GET">
            <input type="text" name="cari" placeholder="Cari nama / perusahaan / WA" value="{{ request('cari') }}">
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
        </form>
    </div>

    <table class="data-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Perusahaan</th>
                <th>WhatsApp</th>
                <th class="num">Invoice</th>
                <th class="num">Kwitansi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($klien as $k)
                <tr>
                    <td>
                        {{ $k->nama }}
                        {{-- Tampilkan catatan di bawah nama jika ada --}}
                        @if($k->catatan)
                            <div style="font-size: 0.85rem; color: var(--text-mut, #888); margin-top: 2px;">
                                📝 {{ $k->catatan }}
                            </div>
                        @endif
                    </td>
                    <td class="mut">{{ $k->nama_perusahaan ?: '-' }}</td>
                    <td class="mut">{{ $k->whatsapp ?: '-' }}</td>
                    <td class="num">{{ $k->invoices_count }}</td>
                    <td class="num">{{ $k->kwitansi_count }}</td>
                    <td>
                        <div class="row-actions">
                            <a href="{{ route('admin.klien.edit', $k) }}" class="btn btn-outline btn-sm">Edit</a>
                            <form method="POST" action="{{ route('admin.klien.destroy', $k) }}" onsubmit="return confirm('Hapus klien {{ $k->nama }}?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="mut">Belum ada klien. <a href="{{ route('admin.klien.create') }}">Tambah yang pertama &rarr;</a></td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination">{{ $klien->links() }}</div>
@endsection