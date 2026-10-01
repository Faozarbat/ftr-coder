<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemoToken;
use App\Models\Invoice;
use App\Models\Klien;
use App\Models\Kwitansi;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $bulanIni = Carbon::now()->startOfMonth();

        $pendapatanBulanIni = Kwitansi::where('tanggal', '>=', $bulanIni)->sum('jumlah');

        $invoiceBelumDibayar = Invoice::where('status', Invoice::STATUS_BELUM_DIBAYAR);
        $jumlahInvoiceBelumDibayar = (clone $invoiceBelumDibayar)->count();
        $totalInvoiceBelumDibayar = (clone $invoiceBelumDibayar)->sum('total');

        $jumlahKlien = Klien::count();

        $tokenTerpakaiBulanIni = DemoToken::where('is_used', true)
            ->where('updated_at', '>=', $bulanIni)
            ->count();

        // Pendapatan 6 bulan terakhir (termasuk bulan berjalan), buat grafik batang CSS.
        $grafikPendapatan = collect(range(5, 0))->map(function ($i) {
            $bulan = Carbon::now()->subMonths($i);
            $total = Kwitansi::whereYear('tanggal', $bulan->year)
                ->whereMonth('tanggal', $bulan->month)
                ->sum('jumlah');

            return [
                'label' => $bulan->translatedFormat('M Y'),
                'total' => (float) $total,
            ];
        });
        $maxGrafik = max(1, $grafikPendapatan->max('total'));

        $invoiceTerbaru = Invoice::with('klien')->orderByDesc('id')->limit(6)->get();
        $tokenTerbaru = DemoToken::orderByDesc('id')->limit(6)->get();

        // Ringkasan token per kategori (sepanjang waktu) — dipakai untuk
        // melihat demo mana yang paling laku.
        $tokenPerKategori = DemoToken::where('is_used', true)
            ->selectRaw('demo_type, count(*) as jumlah')
            ->groupBy('demo_type')
            ->orderByDesc('jumlah')
            ->get();

        return view('admin.dashboard', compact(
            'pendapatanBulanIni',
            'jumlahInvoiceBelumDibayar',
            'totalInvoiceBelumDibayar',
            'jumlahKlien',
            'tokenTerpakaiBulanIni',
            'grafikPendapatan',
            'maxGrafik',
            'invoiceTerbaru',
            'tokenTerbaru',
            'tokenPerKategori',
        ));
    }
}
