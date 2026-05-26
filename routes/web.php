<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

// =============================================
// HALAMAN PUBLIK (GUEST)
// =============================================

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('tentang');
Route::get('/produk', [ProductController::class, 'index'])->name('produk');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('produk.detail');
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');

// =============================================
// ADMIN AUTH & PANEL
// =============================================

Route::prefix('admin')->name('admin.')->group(function () {

    // Login (bisa diakses tanpa login)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Protected - harus login dulu
    Route::middleware('admin')->group(function () {

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Products CRUD
        Route::resource('products', AdminProductController::class)->except(['show']);
    });
});
