<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\DemoToken;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyProfileController extends Controller
{
    /**
     * GET /demo/company-profile/app — Demo "Ruang & Rupa", self-contained
     * di sisi client, sama polanya dengan PosController/BeritaController dkk.
     *
     * Catatan: sejak diubah alurnya (lihat riwayat perubahan versi terbaru),
     * demo ini SEKARANG memakai token seperti demo lain — sebelumnya sempat
     * dikecualikan karena dianggap "statis". Perubahan datang dari owner.
     */
        public function index(Request $request, string $no): View
    {
        $view = "demo.company-profile.demo-{$no}";
        abort_unless(view()->exists($view), 404);

        $sessionId = $request->attributes->get('demo_session_id');
        $token = DemoToken::where('session_id', $sessionId)
            ->where('demo_type', 'company-profile')->first();

        return view($view, [
            'expiresAt' => $token?->session_expired_at?->toIso8601String(),
        ]);
    }
}