<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TokenController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Demo\PosController;
use App\Http\Controllers\Demo\BookingController;
use App\Http\Controllers\Demo\TokoOnlineController;
use App\Http\Controllers\Demo\BeritaController;
use App\Http\Controllers\Demo\KursusController;
use App\Http\Controllers\Demo\CompanyProfileController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/proses-kerja', [PageController::class, 'prosesKerja'])->name('proses-kerja');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/kebijakan-privasi', [PageController::class, 'kebijakanPrivasi'])->name('kebijakan-privasi');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', function () {
    return response("User-agent: *\nDisallow: /admin\nSitemap: " . route('sitemap') . "\n", 200)
        ->header('Content-Type', 'text/plain');
})->name('robots');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{slug}', [ProdukController::class, 'show'])->name('produk.show');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit')->middleware('throttle:5,1');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/tokens', [TokenController::class, 'index'])->name('tokens');
        Route::post('/tokens', [TokenController::class, 'store'])->name('tokens.store');
        Route::delete('/tokens/{token}', [TokenController::class, 'destroy'])->name('tokens.destroy');
    });
});
Route::middleware('demo.session:pos')->prefix('demo/pos/app')->name('demo.pos.')->group(function () {
    Route::get('/', [PosController::class, 'index'])->name('index');
});
Route::middleware('demo.session:booking')->prefix('demo/booking/app')->name('demo.booking.')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
});
Route::middleware('demo.session:toko-online')->prefix('demo/toko-online/app')->name('demo.toko-online.')->group(function () {
    Route::get('/', [TokoOnlineController::class, 'index'])->name('index');
});
Route::middleware('demo.session:berita')->prefix('demo/berita/app')->name('demo.berita.')->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('index');
});
Route::middleware('demo.session:kursus')->prefix('demo/kursus/app')->name('demo.kursus.')->group(function () {
    Route::get('/', [KursusController::class, 'index'])->name('index');
});
Route::middleware('demo.session:company-profile')->prefix('demo/company-profile/app')->name('demo.company-profile.')->group(function () {
    // {no} = nomor demo 01..15 (file: resources/views/demo/company-profile/demo-{no}.blade.php)
    Route::get('/{no}', [CompanyProfileController::class, 'index'])->name('index')->where('no', '0[1-9]|1[0-5]');
});
Route::get('/demo/{demoType}', [DemoController::class, 'showTokenForm'])->name('demo.token-form');
Route::post('/demo/{demoType}/verify', [DemoController::class, 'verify'])->name('demo.verify');
Route::get('/demo/{demoType}/session', [DemoController::class, 'sessionActive'])->name('demo.session');