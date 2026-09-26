<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\DemoToken;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TokoOnlineController extends Controller
{
    /**
     * GET /demo/toko-online/app — Aplikasi demo toko online, self-contained
     * di sisi client (state di localStorage), sama polanya dengan
     * PosController dan BookingController.
     */
    public function index(Request $request): View
    {
        $sessionId = $request->attributes->get('demo_session_id');

        $token = DemoToken::where('session_id', $sessionId)
            ->where('demo_type', 'toko-online')
            ->first();

        return view('demo.toko-online.app', [
            'expiresAt' => $token?->session_expired_at?->toIso8601String(),
        ]);
    }
}