@extends('layouts.admin')

@section('title', $invoice->nomor_invoice)

@section('content')
    <div class="toolbar">
        <div>
            <h1 style="margin-bottom:0.3rem;">{{ $invoice->nomor_invoice }}</h1>
            <span class="badge badge-{{ $invoice->status }}">{{ \App\Models\Invoice::labelStatus($invoice->status) }}</span>
        </div>
        <div class="row-actions">
            <a href="{{ route('admin.invoice.pdf', $invoice) }}" target="_blank" class="btn btn-outline btn-sm">📄 PDF</a>
            @if ($invoice->status !== \App\Models\Invoice::STATUS_BATAL)
                <a href="{{ route('admin.invoice.edit', $invoice) }}" class="btn btn-outline btn-sm">Edit</a>
            @endif
            <a href="{{ route('admin.invoice.index') }}" class="btn btn-outline btn-sm">&larr; Daftar</a>
        </div>
    </div>

    @if (session('success'))
        <div class="success-box">✅ {{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="success-box" style="border-color: var(--danger); color: var(--danger); background: rgba(var(--danger-rgb), 0.12);">⚠️ {{ session('error') }}</div>
    @endif

    <div class="two-col">
        <div class="panel">
            <h3>Klien</h3>
            <p style="font-weight:600;">{{ $invoice->klien->nama }}</p>
            @if ($invoice->klien->nama_perusahaan)<p class="mut">{{ $invoice->klien->nama_perusahaan }}</p>@endif
            @if ($invoice->klien->whatsapp)<p class="mut">WA: {{ $invoice->klien->whatsapp }}</p>@endif
            @if ($invoice->klien->email)<p class="mut">{{ $invoice->klien->email }}</p>@endif
        </div>
        <div class="panel">
            <h3>Info Invoice</h3>
            <p class="mut">Tanggal: <span style="color:var(--text-light);">{{ $invoice->tanggal_invoice->translatedFormat('d F Y') }}</span></p>
            <p class="mut">Jatuh tempo: <span style="color:var(--text-light);">{{ optional($invoice->tanggal_jatuh_tempo)->translatedFormat('d F Y') ?? '-' }}</span></p>
            <p class="mut">Dibayar: <span style="color:var(--text-light);">Rp {{ number_format($invoice->total_dibayar, 0, ',', '.') }}</span></p>
            <p class="mut">Sisa: <span style="color:var(--accent); font-weight:600;">Rp {{ number_format($invoice->sisa_tagihan, 0, ',', '.') }}</span></p>
        </div>
    </div>

    <div class="panel">
        <h3>Rincian Item</h3>
        <table class="data-table">
            <thead><tr><th>Deskripsi</th><th class="num">Qty</th><th class="num">Harga Satuan</th><th class="num">Subtotal</th></tr></thead>
            <tbody>
                @foreach ($invoice->items as $item)
                    <tr>
                        <td>{{ $item->deskripsi }}</td>
                        <td class="num">{{ rtrim(rtrim(number_format($item->qty, 2, ',', '.'), '0'), ',') }}</td>
                        <td class="num">Rp {{ number_format($item->harga_satuan, 0, ',', '.') }}</td>
                        <td class="num">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="summary-box">
            <div class="summary-row"><span>Subtotal</span><span>Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</span></div>
            <div class="summary-row mut"><span>PPN {{ rtrim(rtrim(number_format($invoice->ppn_persen, 1, ',', '.'), '0'), ',') }}%</span><span>Rp {{ number_format($invoice->ppn_nominal, 0, ',', '.') }}</span></div>
            @if ($invoice->diskon_ppn_nominal > 0)
                <div class="summary-row mut"><span>Diskon Penyesuaian PPN</span><span>- Rp {{ number_format($invoice->diskon_ppn_nominal, 0, ',', '.') }}</span></div>
            @endif
            @if ($invoice->diskon_tambahan_nominal > 0)
                <div class="summary-row mut"><span>Diskon Tambahan</span><span>- Rp {{ number_format($invoice->diskon_tambahan_nominal, 0, ',', '.') }}</span></div>
            @endif
            <div class="summary-row total"><span>Total</span><span>Rp {{ number_format($invoice->total, 0, ',', '.') }}</span></div>
        </div>

        @if ($invoice->catatan)
            <p class="mut" style="margin-top:1rem; font-size:0.85rem;">Catatan: {{ $invoice->catatan }}</p>
        @endif
    </div>

    <div class="panel">
        <div class="toolbar" style="margin-bottom:0.75rem;">
            <h3 style="margin-bottom:0;">Riwayat Pembayaran (Kwitansi)</h3>
            @if ($invoice->status !== \App\Models\Invoice::STATUS_BATAL)
                <a href="{{ route('admin.kwitansi.create', ['invoice_id' => $invoice->id]) }}" class="btn btn-outline btn-sm">+ Catat Pembayaran</a>
            @endif
        </div>
        @forelse ($invoice->kwitansi as $kw)
            <a href="{{ route('admin.kwitansi.show', $kw) }}" class="list-row">
                <div>
                    <div class="list-title token-code">{{ $kw->nomor_kwitansi }}</div>
                    <div class="list-sub">{{ $kw->tanggal->translatedFormat('d M Y') }} &middot; {{ $kw->untuk_pembayaran }}</div>
                </div>
                <strong>Rp {{ number_format($kw->jumlah, 0, ',', '.') }}</strong>
            </a>
        @empty
            <p class="mut">Belum ada pembayaran tercatat.</p>
        @endforelse
    </div>

    <div class="panel">
        <h3>Ubah Status</h3>
        <div class="row-actions">
            @if ($invoice->status !== \App\Models\Invoice::STATUS_LUNAS)
                <form method="POST" action="{{ route('admin.invoice.tandai-lunas', $invoice) }}" onsubmit="return confirm('Tandai invoice ini Lunas?');">
                    @csrf <button type="submit" class="btn btn-outline btn-sm">✔ Tandai Lunas</button>
                </form>
            @endif
            @if ($invoice->status !== \App\Models\Invoice::STATUS_BATAL)
                <form method="POST" action="{{ route('admin.invoice.tandai-batal', $invoice) }}" onsubmit="return confirm('Batalkan invoice ini?');">
                    @csrf <button type="submit" class="btn btn-outline btn-sm">✕ Tandai Batal</button>
                </form>
            @endif
            <form method="POST" action="{{ route('admin.invoice.destroy', $invoice) }}" onsubmit="return confirm('Hapus invoice {{ $invoice->nomor_invoice }} permanen? Tidak bisa dibatalkan.');">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Hapus Invoice</button>
            </form>
        </div>
    </div>
@endsection
