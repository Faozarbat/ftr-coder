<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>{{ $kwitansi->nomor_kwitansi }}</title>
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; color: #222; font-size: 12px; padding: 24px; }
    .frame { border: 2px solid #d98e3c; border-radius: 6px; padding: 22px; }
    .header { display: flex; justify-content: space-between; border-bottom: 1px solid #eee; padding-bottom: 12px; margin-bottom: 16px; }
    .header h1 { font-size: 16px; color: #d98e3c; }
    .header .biz-meta { font-size: 9.5px; color: #777; margin-top: 2px; }
    .header .title { text-align: right; }
    .header .title h2 { font-size: 18px; letter-spacing: 1px; }
    .header .title .nomor { font-size: 12px; font-weight: bold; margin-top: 3px; }

    .row { display: flex; margin-bottom: 8px; font-size: 12px; }
    .row .label { width: 130px; color: #888; }

    .amount-box { margin: 18px 0; padding: 14px; background: #f9f6f1; border-radius: 6px; text-align: center; }
    .amount-box .label { font-size: 10px; text-transform: uppercase; color: #999; letter-spacing: 0.5px; }
    .amount-box .amount { font-size: 22px; font-weight: bold; color: #d98e3c; margin-top: 4px; }

    .footer { margin-top: 24px; display: flex; justify-content: space-between; font-size: 10px; color: #999; }
</style>
</head>
<body>
    <div class="frame">
        <div class="header">
            <div>
                <h1>{{ config('invoice.nama_usaha') }}</h1>
                <div class="biz-meta">
                    @if (config('invoice.wa_usaha')) WA: {{ config('invoice.wa_usaha') }} @endif
                </div>
            </div>
            <div class="title">
                <h2>KWITANSI</h2>
                <div class="nomor">{{ $kwitansi->nomor_kwitansi }}</div>
            </div>
        </div>

        <div class="row"><span class="label">Telah terima dari</span><strong>{{ $kwitansi->klien->nama }}</strong></div>
        <div class="row"><span class="label">Untuk pembayaran</span><span>{{ $kwitansi->untuk_pembayaran }}</span></div>
        @if ($kwitansi->invoice)
            <div class="row"><span class="label">Invoice terkait</span><span>{{ $kwitansi->invoice->nomor_invoice }}</span></div>
        @endif
        @if ($kwitansi->metode_pembayaran)
            <div class="row"><span class="label">Metode</span><span>{{ $kwitansi->metode_pembayaran }}</span></div>
        @endif
        <div class="row"><span class="label">Tanggal</span><span>{{ $kwitansi->tanggal->translatedFormat('d F Y') }}</span></div>

        <div class="amount-box">
            <div class="label">Jumlah Diterima</div>
            <div class="amount">Rp {{ number_format($kwitansi->jumlah, 0, ',', '.') }}</div>
        </div>

        <div class="footer">
            <span>Dicetak otomatis {{ now()->translatedFormat('d F Y H:i') }}</span>
            <span>{{ config('invoice.nama_usaha') }}</span>
        </div>
    </div>
</body>
</html>
