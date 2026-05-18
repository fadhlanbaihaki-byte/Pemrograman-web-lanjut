<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

// Halaman Beranda
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Halaman Tentang Kami
Route::get('/tentang', [AboutController::class, 'index'])
    ->name('tentang');

// Halaman Daftar Produk
Route::get('/produk', [ProductController::class, 'index'])
    ->name('produk');

// Halaman Detail Produk
Route::get('/produk/{slug}', [ProductController::class, 'show'])
    ->name('produk.detail');

// Halaman Kontak
Route::get('/kontak', [ContactController::class, 'index'])
    ->name('kontak');