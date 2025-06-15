<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailGlamping;
use App\Http\Controllers\DetailGunungTangkuban;
use App\Http\Controllers\DetailSunrise;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailUmkmController;
use App\Http\Controllers\SessionController;

// ===================
// Public Routes
// ===================
Route::get('/', [CMSController::class, 'index'])->name('cms.home');

Route::get('/pariwisata', [PariwisataController::class, 'index'])->name('pariwisata.dashboard');
Route::get('/pariwisata/{id}', [PariwisataController::class, 'detail'])->name('pariwisata.detail');

Route::get('/umkm', [UMKMController::class, 'index'])->name('umkm.dashboard');
Route::get('/umkm/{id}', [UMKMController::class, 'detail'])->name('umkm.detail');

Route::get('/review', [ReviewController::class, 'index'])->name('review.dashboard');
Route::post('/rating', [DetailGlamping::class, 'store'])->name('rating.store');

// ===================
// Auth Session Routes
// ===================
Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'registerProcess'])->name('registerProcess');

// Logout (with redirect)
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // arahkan ke halaman utama setelah logout
})->name('logout');

// Login page view
Route::get('/login', function () {
    return view('auth.login'); // pastikan view auth/login.blade.php ada
})->name('login');

// ===================
// Admin Routes
// ===================
Route::prefix('admin')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    // Pariwisata CRUD
    Route::get('/{id}/edit', [PariwisataController::class, 'edit'])->name('pariwisata.edit');
    Route::delete('/{id}', [PariwisataController::class, 'destroy'])->name('pariwisata.destroy');
    Route::put('/{id}', [PariwisataController::class, 'update'])->name('pariwisata.update');
    Route::post('/tourism-objects', [AdminController::class, 'store'])->name('tourism-objects.store');

    // UMKM CRUD
    Route::get('/umkm', [UMKMController::class, 'adminIndex'])->name('umkm.index'); // Diperbaiki di sini
    Route::post('/umkm', [DetailUmkmController::class, 'store'])->name('umkm.store');
    Route::get('/umkm/{id}/edit', [UMKMController::class, 'edit'])->name('umkm.edit');
    Route::delete('/umkm/{id}', [UMKMController::class, 'destroy'])->name('umkm.destroy');
    Route::put('/umkm/{id}', [UMKMController::class, 'update'])->name('umkm.update'); // Path juga disesuaikan
});
