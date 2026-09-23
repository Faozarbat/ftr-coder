<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/proses-kerja', [PageController::class, 'prosesKerja'])->name('proses-kerja');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/kebijakan-privasi', [PageController::class, 'kebijakanPrivasi'])->name('kebijakan-privasi');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{slug}', [ProdukController::class, 'show'])->name('produk.show');