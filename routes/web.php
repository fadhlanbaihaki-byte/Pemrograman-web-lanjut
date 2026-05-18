<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Halaman Beranda
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Halaman Tentang Kami
Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

// Halaman Daftar Produk
Route::get('/produk', function () {
    return view('pages.produk');
})->name('produk');

// Halaman Detail Produk
// Dalam implementasi nyata, $slug digunakan untuk query database
Route::get('/produk/{slug}', function (string $slug) {
    // Contoh: $produk = Produk::where('slug', $slug)->firstOrFail();
    // return view('pages.produk-detail', compact('produk'));
    return view('pages.produk-detail');
})->name('produk.detail');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');