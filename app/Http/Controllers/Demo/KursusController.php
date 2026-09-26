<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\DemoToken;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KursusController extends Controller
{
    /**
     * GET /demo/kursus/app — Aplikasi demo LPK Maju Bersama (portal klien +
     * panel staff), self-contained di sisi client (state di localStorage),
     * sama polanya dengan controller demo lain.
     */
    public function index(Request $request): View
    {
        $sessionId = $request->attributes->get('demo_session_id');

        $token = DemoToken::where('session_id', $sessionId)
            ->where('demo_type', 'kursus')
            ->first();

        return view('demo.kursus.app', [
            'expiresAt' => $token?->session_expired_at?->toIso8601String(),
        ]);
    }
}