<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>{{ $kwitansi->nomor_kwitansi }}</title>
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; color: #222; font-size: 12px; padding: 24px; }
    .frame { border: 2px solid #d98e3c; border-radius: 6px; padding: 24px; }
    
    /* Header menggunakan tabel agar aman di PDF */
    .header-table { width: 100%; border-collapse: collapse; border-bottom: 1px solid #eee; padding-bottom: 14px; margin-bottom: 18px; }
    .header-table td { vertical-align: top; }
    .header h1 { font-size: 16px; color: #d98e3c; }
    .header .biz-meta { font-size: 9.5px; color: #777; margin-top: 4px; }
    .title { text-align: right; }
    .title h2 { font-size: 18px; letter-spacing: 1px; color: #333; }
    .title .nomor { font-size: 12px; font-weight: bold; margin-top: 4px; }

    /* Baris informasi menggunakan tabel dengan padding agar tidak mepet */
    .info-table { width: 100%; border-collapse: collapse; margin-bottom: 18px; }
    .info-table td { padding: 6px 0; font-size: 12px; vertical-align: top; }
    .info-table .label { width: 140px; color: #888; font-weight: normal; }
    .info-table .val { color: #222; }

    .amount-box { margin: 20px 0; padding: 16px; background: #f9f6f1; border-radius: 6px; text-align: center; }
    .amount-box .label { font-size: 10px; text-transform: uppercase; color: #999; letter-spacing: 0.5px; }
    .amount-box .amount { font-size: 22px; font-weight: bold; color: #d98e3c; margin-top: 6px; }

    /* Footer menggunakan tabel */
    .footer-table { width: 100%; border-collapse: collapse; margin-top: 24px; font-size: 10px; color: #999; }
    .footer-table td { vertical-align: bottom; }
    .footer-table .right { text-align: right; }
</style>
</head>
<body>
    <div class="frame">
        <table class="header-table">
            <tr>
                <td>
                    <h1>{{ config('invoice.nama_usaha') }}</h1>
                    <div class="biz-meta">
                        @if (config('invoice.wa_usaha')) WA: {{ config('invoice.wa_usaha') }} @endif
                    </div>
                </td>
                <td class="title">
                    <h2>KWITANSI</h2>
                    <div class="nomor">{{ $kwitansi->nomor_kwitansi }}</div>
                </td>
            </tr>
        </table>

        <table class="info-table">
            <tr>
                <td class="label">Telah terima dari</td>
                <td class="val"><strong>{{ $kwitansi->klien->nama }}</strong></td>
            </tr>
            <tr>
                <td class="label">Untuk pembayaran</td>
                <td class="val">{{ $kwitansi->untuk_pembayaran }}</td>
            </tr>
            @if ($kwitansi->invoice)
                <tr>
                    <td class="label">Invoice terkait</td>
                    <td class="val">{{ $kwitansi->invoice->nomor_invoice }}</td>
                </tr>
            @endif
            @if ($kwitansi->metode_pembayaran)
                <tr>
                    <td class="label">Metode</td>
                    <td class="val">{{ $kwitansi->metode_pembayaran }}</td>
                </tr>
            @endif
            <tr>
                <td class="label">Tanggal</td>
                <td class="val">{{ $kwitansi->tanggal->translatedFormat('d F Y') }}</td>
            </tr>
        </table>

        <div class="amount-box">
            <div class="label">Jumlah Diterima</div>
            <div class="amount">Rp {{ number_format($kwitansi->jumlah, 0, ',', '.') }}</div>
        </div>

        <table class="footer-table">
            <tr>
                <td>Dicetak otomatis {{ now()->translatedFormat('d F Y H:i') }}</td>
                <td class="right">{{ config('invoice.nama_usaha') }}</td>
            </tr>
        </table>
    </div>
</body>
</html>