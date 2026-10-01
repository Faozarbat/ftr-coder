@extends('layouts.admin')

@section('title', 'Buat Kwitansi')

@section('content')
    <h1 style="margin-bottom: 1.5rem;">Buat Kwitansi</h1>

    @if ($errors->any())
        <div class="success-box" style="border-color: var(--danger); color: var(--danger); background: rgba(var(--danger-rgb), 0.12);">
            ⚠️ Ada isian yang belum benar, cek lagi di bawah.
        </div>
    @endif

    <div class="form-box" style="max-width: 560px;">
        <form method="POST" action="{{ route('admin.kwitansi.store') }}">
            @csrf

            <div class="field">
                <label>Klien *</label>
                <select name="klien_id" required>
                    <option value="">-- Pilih Klien --</option>
                    @foreach ($klien as $k)
                        <option value="{{ $k->id }}" @selected(old('klien_id', $invoiceTerpilih->klien_id ?? null) == $k->id)>{{ $k->nama_tampilan }}</option>
                    @endforeach
                </select>
                @error('klien_id') <div class="field-error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Invoice Terkait (opsional)</label>
                <input type="hidden" name="invoice_id" value="{{ old('invoice_id', $invoiceTerpilih->id ?? '') }}">
                @if ($invoiceTerpilih)
                    <input type="text" value="{{ $invoiceTerpilih->nomor_invoice }} — sisa Rp {{ number_format($invoiceTerpilih->sisa_tagihan, 0, ',', '.') }}" disabled>
                @else
                    <input type="text" value="Tidak terhubung ke invoice manapun" disabled>
                @endif
                <p class="mut" style="font-size:0.78rem; margin-top:0.3rem;">Untuk menghubungkan ke invoice, buka halaman invoice-nya lalu klik "Catat Pembayaran".</p>
            </div>

            <div class="field-row">
                <div class="field">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" value="{{ old('tanggal', now()->format('Y-m-d')) }}" required>
                </div>
                <div class="field">
                    <label>Jumlah (Rp) *</label>
                    <input type="number" step="1" min="1" name="jumlah" value="{{ old('jumlah', isset($invoiceTerpilih) ? (int) $invoiceTerpilih->sisa_tagihan : '') }}" required>
                    @error('jumlah') <div class="field-error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="field">
                <label>Untuk Pembayaran *</label>
                <input type="text" name="untuk_pembayaran" value="{{ old('untuk_pembayaran', $invoiceTerpilih ? 'Pembayaran ' . $invoiceTerpilih->nomor_invoice : '') }}" placeholder="Mis. DP 50% - Website Company Profile" required>
                @error('untuk_pembayaran') <div class="field-error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Metode Pembayaran</label>
                <select name="metode_pembayaran">
                    <option value="">-- Pilih --</option>
                    <option value="Transfer Bank" @selected(old('metode_pembayaran') === 'Transfer Bank')>Transfer Bank</option>
                    <option value="Tunai" @selected(old('metode_pembayaran') === 'Tunai')>Tunai</option>
                    <option value="QRIS" @selected(old('metode_pembayaran') === 'QRIS')>QRIS</option>
                    <option value="Lainnya" @selected(old('metode_pembayaran') === 'Lainnya')>Lainnya</option>
                </select>
            </div>

            <div class="field">
                <label>Catatan (opsional)</label>
                <textarea name="catatan" rows="2">{{ old('catatan') }}</textarea>
            </div>

            <button type="submit" class="btn btn-accent">Buat Kwitansi</button>
            <a href="{{ $invoiceTerpilih ? route('admin.invoice.show', $invoiceTerpilih) : route('admin.kwitansi.index') }}" class="btn btn-outline">Batal</a>
        </form>
    </div>
@endsection
