@extends('layouts.admin')

@section('title', $invoice->exists ? 'Edit Invoice' : 'Buat Invoice')

@section('content')
    <h1 style="margin-bottom: 1.5rem;">{{ $invoice->exists ? "Edit Invoice {$invoice->nomor_invoice}" : 'Buat Invoice' }}</h1>

    @if ($errors->any())
        <div class="success-box" style="border-color: var(--danger); color: var(--danger); background: rgba(var(--danger-rgb), 0.12);">
            ⚠️ Ada isian yang belum benar, cek lagi di bawah.
        </div>
    @endif

    <div class="form-box">
        <form method="POST" action="{{ $invoice->exists ? route('admin.invoice.update', $invoice) : route('admin.invoice.store') }}" id="invoiceForm">
            @csrf
            @if ($invoice->exists) @method('PUT') @endif

            <div class="field-row">
                <div class="field">
                    <label>Klien *</label>
                    <select name="klien_id" required>
                        <option value="">-- Pilih Klien --</option>
                        @foreach ($klien as $k)
                            <option value="{{ $k->id }}" @selected(old('klien_id', $invoice->klien_id) == $k->id)>{{ $k->nama_tampilan }}</option>
                        @endforeach
                    </select>
                    @error('klien_id') <div class="field-error">{{ $message }}</div> @enderror
                    <div style="margin-top:0.4rem;"><a href="{{ route('admin.klien.create') }}" target="_blank" class="mut" style="font-size:0.8rem;">+ klien baru (buka tab baru)</a></div>
                </div>
                <div class="field">
                    <label>Tanggal Invoice *</label>
                    <input type="date" name="tanggal_invoice" value="{{ old('tanggal_invoice', optional($invoice->tanggal_invoice)->format('Y-m-d') ?? now()->format('Y-m-d')) }}" required>
                    @error('tanggal_invoice') <div class="field-error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="field">
                <label>Jatuh Tempo (opsional)</label>
                <input type="date" name="tanggal_jatuh_tempo" value="{{ old('tanggal_jatuh_tempo', optional($invoice->tanggal_jatuh_tempo)->format('Y-m-d')) }}" style="max-width: 220px;">
                @error('tanggal_jatuh_tempo') <div class="field-error">{{ $message }}</div> @enderror
            </div>

            <hr style="border-color: var(--border); margin: 1.5rem 0;">

            <label style="display:block; font-size:0.85rem; color:var(--text-muted); margin-bottom:0.6rem;">Item Invoice *</label>

            <div class="item-row" style="font-size:0.75rem; color:var(--text-muted); margin-bottom:0.3rem;">
                <span>Deskripsi</span><span>Qty</span><span>Harga Satuan</span><span>Subtotal</span><span></span>
            </div>

            <div id="itemRows"></div>

            <button type="button" class="btn btn-outline btn-sm" id="addRow" style="margin-bottom:1.5rem;">+ Tambah Item</button>
            @error('items') <div class="field-error">{{ $message }}</div> @enderror

            <div class="summary-box">
                <div class="field">
                    <label>Diskon Tambahan (opsional, Rp)</label>
                    <input type="number" step="1" min="0" name="diskon_tambahan_nominal" id="diskonTambahan" value="{{ old('diskon_tambahan_nominal', $invoice->diskon_tambahan_nominal ?? 0) }}">
                </div>
                <div class="summary-row"><span>Subtotal</span><span id="previewSubtotal">Rp 0</span></div>
                <div class="summary-row mut"><span>PPN 11%</span><span id="previewPpn">Rp 0</span></div>
                <div class="summary-row mut"><span>Diskon Penyesuaian PPN *</span><span id="previewDiskonPpn">- Rp 0</span></div>
                <div class="summary-row total"><span>Total Tagihan</span><span id="previewTotal">Rp 0</span></div>
                <p class="mut" style="font-size:0.72rem; margin-top:0.5rem;">* PPN ditampilkan transparan tapi dinetralkan lewat diskon — belum PKP resmi, belum boleh memungut PPN sungguhan. Angka final dihitung ulang di server.</p>
            </div>

            <div class="field" style="margin-top:1.5rem;">
                <label>Catatan di Invoice (opsional — mis. info rekening, syarat pembayaran)</label>
                <textarea name="catatan" rows="2">{{ old('catatan', $invoice->catatan) }}</textarea>
            </div>

            <button type="submit" class="btn btn-accent">{{ $invoice->exists ? 'Simpan Perubahan' : 'Buat Invoice' }}</button>
            <a href="{{ $invoice->exists ? route('admin.invoice.show', $invoice) : route('admin.invoice.index') }}" class="btn btn-outline">Batal</a>
        </form>
    </div>

    <template id="rowTemplate">
        <div class="item-row">
            <input type="text" name="items[__I__][deskripsi]" placeholder="Mis. Jasa Pembuatan Website" class="js-deskripsi" required>
            <input type="number" name="items[__I__][qty]" step="0.01" min="0.01" value="1" class="js-qty" required>
            <input type="number" name="items[__I__][harga_satuan]" step="1" min="0" value="0" class="js-harga" required>
            <input type="text" class="js-subtotal" value="Rp 0" disabled>
            <button type="button" class="item-remove js-remove" title="Hapus baris">&times;</button>
        </div>
    </template>

    <script>
    (function () {
        var rowsWrap = document.getElementById('itemRows');
        var template = document.getElementById('rowTemplate');
        var rowIndex = 0;

        @php
            $dataItemAwal = old('items') ?: collect($items ?? [])->map(fn ($i) => [
                'deskripsi' => is_array($i) ? ($i['deskripsi'] ?? '') : $i->deskripsi,
                'qty' => is_array($i) ? ($i['qty'] ?? 1) : $i->qty,
                'harga_satuan' => is_array($i) ? ($i['harga_satuan'] ?? 0) : $i->harga_satuan,
            ])->values()->all();
        @endphp
        var dataAwal = @json($dataItemAwal);

        function formatRupiah(n) {
            n = Math.round(n || 0);
            return 'Rp ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }

        function addRow(data) {
            var html = template.innerHTML.replace(/__I__/g, rowIndex++);
            var wrapper = document.createElement('div');
            wrapper.innerHTML = html.trim();
            var row = wrapper.firstElementChild;

            if (data) {
                row.querySelector('.js-deskripsi').value = data.deskripsi || '';
                row.querySelector('.js-qty').value = data.qty || 1;
                row.querySelector('.js-harga').value = data.harga_satuan || 0;
            }

            row.querySelector('.js-remove').addEventListener('click', function () {
                row.remove();
                hitungUlang();
            });
            ['.js-qty', '.js-harga'].forEach(function (sel) {
                row.querySelector(sel).addEventListener('input', hitungUlang);
            });

            rowsWrap.appendChild(row);
            hitungUlangBaris(row);
        }

        function hitungUlangBaris(row) {
            var qty = parseFloat(row.querySelector('.js-qty').value) || 0;
            var harga = parseFloat(row.querySelector('.js-harga').value) || 0;
            row.querySelector('.js-subtotal').value = formatRupiah(qty * harga);
            return qty * harga;
        }

        function hitungUlang() {
            var subtotal = 0;
            rowsWrap.querySelectorAll('.item-row').forEach(function (row) {
                subtotal += hitungUlangBaris(row);
            });
            var ppn = subtotal * 0.11;
            var diskonTambahan = parseFloat(document.getElementById('diskonTambahan').value) || 0;
            var total = Math.max(0, subtotal + ppn - ppn - diskonTambahan);

            document.getElementById('previewSubtotal').textContent = formatRupiah(subtotal);
            document.getElementById('previewPpn').textContent = formatRupiah(ppn);
            document.getElementById('previewDiskonPpn').textContent = '- ' + formatRupiah(ppn);
            document.getElementById('previewTotal').textContent = formatRupiah(total);
        }

        document.getElementById('addRow').addEventListener('click', function () { addRow(null); hitungUlang(); });
        document.getElementById('diskonTambahan').addEventListener('input', hitungUlang);

        if (dataAwal && dataAwal.length) {
            dataAwal.forEach(function (d) { addRow(d); });
        } else {
            addRow(null);
        }
        hitungUlang();

        document.getElementById('invoiceForm').addEventListener('submit', function (e) {
            if (rowsWrap.querySelectorAll('.item-row').length === 0) {
                e.preventDefault();
                alert('Minimal harus ada 1 item invoice.');
            }
        });
    })();
    </script>
@endsection
