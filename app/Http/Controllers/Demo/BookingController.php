<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\DemoToken;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * GET /demo/booking/app — Aplikasi demo booking klinik, self-contained
     * di sisi client (state di localStorage), sama polanya dengan PosController.
     */
    public function index(Request $request): View
    {
        $sessionId = $request->attributes->get('demo_session_id');

        $token = DemoToken::where('session_id', $sessionId)
            ->where('demo_type', 'booking')
            ->first();

        return view('demo.booking.app', [
            'expiresAt' => $token?->session_expired_at?->toIso8601String(),
        ]);
    }
}
