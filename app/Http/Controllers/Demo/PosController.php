<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\DemoToken;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PosController extends Controller
{
    /**
     * GET /demo/pos/app — Aplikasi demo kasir, self-contained di sisi client
     * (state disimpan di localStorage browser, tidak ada query database
     * untuk data transaksi/keranjang sama sekali).
     *
     * Controller ini cuma bertugas: (1) memastikan visitor lolos middleware
     * demo.session:pos, (2) kasih tahu view kapan sesinya berakhir supaya
     * bisa ditampilkan sebagai countdown visual.
     */
    public function index(Request $request, string $no): View
{
    $view = "demo.pos.demo-{$no}";
    abort_unless(view()->exists($view), 404);

    $sessionId = $request->attributes->get('demo_session_id');
    $token = DemoToken::where('session_id', $sessionId)
        ->where('demo_type', 'pos')->first();

    return view($view, [
        'expiresAt' => $token?->session_expired_at?->toIso8601String(),
    ]);
}
}