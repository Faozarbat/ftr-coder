<?php

namespace App\Http\Middleware;

use App\Models\DemoToken;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Response;

/**
 * Middleware reusable untuk semua aplikasi demo sesungguhnya (POS, Booking, dst).
 * Dipakai lewat alias 'demo.session:{demoType}', misal 'demo.session:pos'.
 *
 * Tugasnya:
 * 1. Pastikan visitor sudah lolos verifikasi token (session_id tersimpan di
 *    Laravel session dengan key demo_session_{demoType}, lihat DemoController::verify()).
 * 2. Pastikan sesi belum melewati session_expired_at pada baris demo_tokens terkait.
 * 3. Menaruh session_id yang aktif ke $request->attributes, supaya semua query
 *    di controller aplikasi demo WAJIB difilter berdasarkan session_id ini
 *    (aturan isolasi data Opsi A).
 */
class EnsureDemoSessionActive
{
    public function handle(Request $request, Closure $next, string $demoType): Response
    {
        $sessionId = session("demo_session_{$demoType}");

        if (! $sessionId) {
            return redirect()->route('demo.token-form', $demoType)
                ->withErrors(['token' => 'Sesi demo tidak ditemukan. Silakan masukkan token terlebih dahulu.']);
        }

        $token = DemoToken::where('session_id', $sessionId)
            ->where('demo_type', $demoType)
            ->first();

        $expired = $token && $token->session_expired_at
            ? Carbon::parse($token->session_expired_at)->isPast()
            : false;

        if (! $token || $expired) {
            session()->forget("demo_session_{$demoType}");

            return redirect()->route('demo.token-form', $demoType)
                ->withErrors(['token' => 'Sesi demo sudah berakhir. Silakan masukkan token baru.']);
        }

        $request->attributes->set('demo_session_id', $sessionId);

        return $next($request);
    }
}