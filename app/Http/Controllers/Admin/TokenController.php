<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemoToken;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TokenController extends Controller
{
    /**
     * Tampilkan daftar token & form generate baru.
     */
    public function index()
    {
        $tokens = DemoToken::orderBy('created_at', 'desc')->paginate(20);

        $demoTypes = Produk::where('is_active', true)
            ->whereNotNull('demo_type')
            ->pluck('demo_type', 'judul_id');

        return view('admin.tokens', compact('tokens', 'demoTypes'));
    }

    /**
     * Generate token baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'demo_type' => 'required|string',
            'contact_name' => 'nullable|string|max:255',
        ]);

        $token = DemoToken::create([
            'token' => strtoupper(Str::random(8)),
            'demo_type' => $request->demo_type,
            'session_id' => (string) Str::uuid(),
            'is_used' => false,
            'contact_name' => $request->contact_name,
            'expired_at' => now()->addHour(),
        ]);

        return redirect()->route('admin.tokens')->with('success', 'Token berhasil dibuat: ' . $token->token);
    }

    /**
     * Batalkan / hapus token yang belum dipakai.
     */
    public function destroy(DemoToken $token)
    {
        if ($token->is_used) {
            return redirect()->route('admin.tokens')->with('success', 'Token yang sudah terpakai tidak bisa dibatalkan.');
        }

        $kode = $token->token;
        $token->delete();

        return redirect()->route('admin.tokens')->with('success', "Token {$kode} berhasil dibatalkan.");
    }
}