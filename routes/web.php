<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TokenController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Demo\PosController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/proses-kerja', [PageController::class, 'prosesKerja'])->name('proses-kerja');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/kebijakan-privasi', [PageController::class, 'kebijakanPrivasi'])->name('kebijakan-privasi');

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
    Route::post('/tambah', [PosController::class, 'tambahItem'])->name('tambah');
    Route::delete('/item/{item}', [PosController::class, 'hapusItem'])->name('hapus');
    Route::post('/checkout', [PosController::class, 'checkout'])->name('checkout');
    Route::get('/struk/{transaksi}', [PosController::class, 'receipt'])->name('receipt');
}); 
Route::get('/demo/{demoType}', [DemoController::class, 'showTokenForm'])->name('demo.token-form');
Route::post('/demo/{demoType}/verify', [DemoController::class, 'verify'])->name('demo.verify');
Route::get('/demo/{demoType}/session', [DemoController::class, 'sessionActive'])->name('demo.session');
