<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>{{ $invoice->nomor_invoice }}</title>
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; color: #222; font-size: 12px; padding: 30px; }
    
    /* Header menggunakan tabel agar aman di PDF engine */
    .header-table { width: 100%; border-collapse: collapse; border-bottom: 2px solid #d98e3c; padding-bottom: 16px; margin-bottom: 20px; }
    .header-table td { vertical-align: top; }
    .header h1 { font-size: 20px; color: #d98e3c; margin-bottom: 4px; }
    .header .biz-meta { font-size: 10.5px; color: #666; line-height: 1.5; }
    .doc-title { text-align: right; }
    .doc-title h2 { font-size: 22px; letter-spacing: 1px; color: #333; }
    .doc-title .nomor { font-size: 13px; font-weight: bold; margin-top: 4px; }
    .doc-title .status { display: inline-block; margin-top: 6px; padding: 2px 10px; border-radius: 10px; font-size: 10px; font-weight: bold; }
    .status-lunas { background: #e5f3ea; color: #2f7d4f; }
    .status-belum_dibayar { background: #fbeee0; color: #a15c1f; }
    .status-batal { background: #fbe5e3; color: #b3413a; }

    /* Info Grid menggunakan tabel */
    .info-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
    .info-table td { vertical-align: top; width: 50%; }
    .info-table .box h3 { font-size: 10px; text-transform: uppercase; letter-spacing: 0.5px; color: #999; margin-bottom: 5px; }
    .info-table .box p { font-size: 12px; line-height: 1.5; }
    .info-table .right { text-align: right; }

    table.items { width: 100%; border-collapse: collapse; margin-bottom: 18px; }
    table.items th { background: #f6f1ea; text-align: left; padding: 8px 10px; font-size: 10.5px; text-transform: uppercase; color: #777; border-bottom: 1px solid #ddd; }
    table.items td { padding: 9px 10px; border-bottom: 1px solid #eee; font-size: 12px; }
    table.items td.num, table.items th.num { text-align: right; }

    /* Summary menggunakan tabel agar presisi & tidak menempel */
    .summary-table { width: 300px; margin-left: auto; border-collapse: collapse; margin-bottom: 20px; }
    .summary-table td { padding: 5px 0; font-size: 12px; }
    .summary-table td.val { text-align: right; }
    .summary-table tr.total td { border-top: 2px solid #333; padding-top: 8px; font-size: 15px; font-weight: bold; color: #d98e3c; }
    .summary-table tr.mut td { color: #888; font-size: 11px; }

    .catatan { margin-top: 24px; padding: 12px 14px; background: #f9f6f1; border-left: 3px solid #d98e3c; font-size: 11px; color: #555; }
    .footer { margin-top: 40px; padding-top: 14px; border-top: 1px solid #eee; font-size: 10px; color: #999; text-align: center; }
</style>
</head>
<body>

    <table class="header-table">
        <tr>
            <td>
                <h1>{{ config('invoice.nama_usaha') }}</h1>
                <div class="biz-meta">
                    @if (config('invoice.alamat_usaha')){{ config('invoice.alamat_usaha') }}<br>@endif
                    @if (config('invoice.wa_usaha')) WA: {{ config('invoice.wa_usaha') }}<br>@endif
                    @if (config('invoice.email_usaha')) {{ config('invoice.email_usaha') }} @endif
                </div>
            </td>
            <td class="doc-title">
                <h2>INVOICE</h2>
                <div class="nomor">{{ $invoice->nomor_invoice }}</div>
                <div class="status status-{{ $invoice->status }}">{{ \App\Models\Invoice::labelStatus($invoice->status) }}</div>
            </td>
        </tr>
    </table>

    <table class="info-table">
        <tr>
            <td class="box">
                <h3>Ditagihkan Kepada</h3>
                <p><strong>{{ $invoice->klien->nama }}</strong></p>
                @if ($invoice->klien->nama_perusahaan)<p>{{ $invoice->klien->nama_perusahaan }}</p>@endif
                @if ($invoice->klien->alamat)<p>{{ $invoice->klien->alamat }}</p>@endif
                @if ($invoice->klien->whatsapp)<p>WA: {{ $invoice->klien->whatsapp }}</p>@endif
            </td>
            <td class="box right">
                <h3>Tanggal Invoice</h3>
                <p>{{ $invoice->tanggal_invoice->translatedFormat('d F Y') }}</p>
                @if ($invoice->tanggal_jatuh_tempo)
                    <h3 style="margin-top:10px;">Jatuh Tempo</h3>
                    <p>{{ $invoice->tanggal_jatuh_tempo->translatedFormat('d F Y') }}</p>
                @endif
            </td>
        </tr>
    </table>

    <table class="items">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th class="num">Qty</th>
                <th class="num">Harga Satuan</th>
                <th class="num">Subtotal</th>
            </tr>
        </thead>
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

    <table class="summary-table">
        <tr>
            <td>Subtotal</td>
            <td class="val">Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</td>
        </tr>
        @if ($invoice->ppn_nominal > 0)
            <tr class="mut">
                <td>PPN {{ rtrim(rtrim(number_format($invoice->ppn_persen, 1, ',', '.'), '0'), ',') }}%</td>
                <td class="val">Rp {{ number_format($invoice->ppn_nominal, 0, ',', '.') }}</td>
            </tr>
        @endif
        @if ($invoice->diskon_ppn_nominal > 0)
            <tr class="mut">
                <td>Diskon Penyesuaian PPN</td>
                <td class="val">- Rp {{ number_format($invoice->diskon_ppn_nominal, 0, ',', '.') }}</td>
            </tr>
        @endif
        @if ($invoice->diskon_tambahan_nominal > 0)
            <tr class="mut">
                <td>Diskon</td>
                <td class="val">- Rp {{ number_format($invoice->diskon_tambahan_nominal, 0, ',', '.') }}</td>
            </tr>
        @endif
        <tr class="total">
            <td>Total</td>
            <td class="val">Rp {{ number_format($invoice->total, 0, ',', '.') }}</td>
        </tr>
    </table>

    @if ($invoice->catatan || config('invoice.rekening_bank'))
        <div class="catatan">
            @if (config('invoice.rekening_bank'))<strong>Pembayaran:</strong> {{ config('invoice.rekening_bank') }}<br>@endif
            @if ($invoice->catatan){{ $invoice->catatan }}@endif
        </div>
    @endif

    <div class="footer">
        Invoice ini dibuat otomatis oleh sistem {{ config('invoice.nama_usaha') }} &middot; {{ now()->translatedFormat('d F Y H:i') }}
    </div>

</body>
</html>