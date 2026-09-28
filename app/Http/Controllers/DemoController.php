<?php

namespace App\Http\Controllers;

use App\Models\DemoToken;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\RateLimiter;

class DemoController extends Controller
{
    /**
     * Tampilkan form input token untuk jenis demo tertentu.
     */
    public function showTokenForm(string $demoType)
    {
        $produk = Produk::where('demo_type', $demoType)
            ->where('is_active', true)
            ->firstOrFail();

        // Company profile punya banyak pilihan template, jadi "form token"-nya
        // diganti halaman katalog (visitor pilih dulu gaya yang disuka, token
        // baru diminta lewat popup saat memilih salah satu kartu demo).
        if ($demoType === 'company-profile') {
            // Sesi token masih aktif? Kalau ya, klik kartu katalog langsung membuka
            // demo tanpa popup (satu token = 30 menit, bebas pindah antar demo).
            $sessionAktif = false;
            $sessionId = session('demo_session_company-profile');
            if ($sessionId) {
                $token = DemoToken::where('session_id', $sessionId)
                    ->where('demo_type', 'company-profile')
                    ->first();
                $sessionAktif = $token
                    && $token->session_expired_at
                    && Carbon::parse($token->session_expired_at)->isFuture();
            }

            return view('demo.company-profile.katalog', compact('produk', 'sessionAktif'));
        }

        return view('demo.token-form', compact('produk', 'demoType'));
    }

    /**
     * Validasi token yang diinput visitor.
     */
    public function verify(Request $request, string $demoType)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        $rateLimitKey = 'token-attempt:' . $request->ip() . ':' . $demoType;

        if (RateLimiter::tooManyAttempts($rateLimitKey, 5)) {
            $seconds = RateLimiter::availableIn($rateLimitKey);
            return back()->withErrors([
                'token' => "Terlalu banyak percobaan. Coba lagi dalam {$seconds} detik.",
            ]);
        }

        $inputToken = strtoupper(trim($request->token));

        $token = DemoToken::where('token', $inputToken)
            ->where('demo_type', $demoType)
            ->first();

        if (!$token || $token->is_used || $token->expired_at->isPast()) {
            RateLimiter::hit($rateLimitKey, 300); // kunci 5 menit setelah gagal

            return back()->withErrors([
                'token' => 'Token tidak valid, sudah dipakai, atau sudah kedaluwarsa. Hubungi kami via WhatsApp untuk token baru.',
            ]);
        }

        RateLimiter::clear($rateLimitKey);

        // Tandai token terpakai & mulai sesi demo
        $token->update([
            'is_used' => true,
            'session_expired_at' => now()->addMinutes(30),
        ]);

        session(['demo_session_' . $demoType => $token->session_id]);

        $params = ['demoType' => $demoType];
        if ($demoType === 'company-profile') {
            $params['no'] = $request->input('no'); // nomor demo yang dipilih di katalog
        }

        return redirect()->route('demo.session', $params);
    }

    /**
     * Halaman sesi demo aktif. Untuk demo_type yang sudah punya aplikasi demo
     * sesungguhnya (misal 'pos'), visitor melihat halaman transisi dengan
     * tombol untuk membuka demo di TAB BARU (bukan langsung redirect di tab
     * yang sama) — demo dirancang jadi "dunia sendiri" yang terpisah dari
     * website utama. Demo_type lain yang belum dibangun masih pakai halaman
     * placeholder.
     */
    public function sessionActive(string $demoType)
{
    $sessionId = session('demo_session_' . $demoType);

    if (!$sessionId) {
        return redirect()->route('demo.token-form', $demoType)
            ->withErrors(['token' => 'Sesi Anda belum aktif. Silakan masukkan token terlebih dahulu.']);
    }

    $produk = Produk::where('demo_type', $demoType)->firstOrFail();

    if ($demoType === 'pos') {
        return view('demo.pos-ready', compact('produk', 'demoType', 'sessionId'));
    }

    if ($demoType === 'booking') {
        return view('demo.booking-ready', compact('produk', 'demoType', 'sessionId'));
    }
    if ($demoType === 'toko-online') {
        return view('demo.toko-online-ready', compact('produk', 'demoType', 'sessionId'));
    }
    if ($demoType === 'berita') {
        return view('demo.berita-ready', compact('produk', 'demoType', 'sessionId'));
    }
    if ($demoType === 'kursus') {
        return view('demo.kursus-ready', compact('produk', 'demoType', 'sessionId'));
    }
    if ($demoType === 'company-profile') {
        $no = request('no');
        if (!preg_match('/^(0[1-9]|1[0-5])$/', (string) $no)) {
            $no = '01';
        }
        return view('demo.company-profile-ready', compact('produk', 'demoType', 'sessionId', 'no'));
    }
    return view('demo.session-active', compact('produk', 'demoType', 'sessionId'));
}
}