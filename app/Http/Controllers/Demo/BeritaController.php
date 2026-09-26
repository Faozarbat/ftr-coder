<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\DemoToken;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BeritaController extends Controller
{
    /**
     * GET /demo/berita/app — Aplikasi demo portal berita, self-contained
     * di sisi client (state di localStorage), sama polanya dengan
     * PosController, BookingController, dan TokoOnlineController.
     */
    public function index(Request $request): View
    {
        $sessionId = $request->attributes->get('demo_session_id');

        $token = DemoToken::where('session_id', $sessionId)
            ->where('demo_type', 'berita')
            ->first();

        return view('demo.berita.app', [
            'expiresAt' => $token?->session_expired_at?->toIso8601String(),
        ]);
    }
}