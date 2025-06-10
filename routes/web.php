<?php

use App\Http\Controllers\CMSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailGunungTangkuban;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailGlamping;
use App\Http\Controllers\DetailSunrise;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;

    Route::get('/', [CMSController::class, 'index'])
    ->name('cms.home');

    Route::get('/pariwisata', [PariwisataController::class, 'index'])
        ->name('pariwisata.dashboard');

    Route::get('/umkm', [UMKMController::class, 'index'])
        ->name('umkm.dashboard');

    Route::get('/umkm/{id}', [UMKMController::class, 'detail'])
        ->name('umkm.detail');
        
    Route::get('/pariwisata/{id}', [PariwisataController::class, 'detail'])
        ->name('pariwisata.detail');
    
    Route::get('/review', [ReviewController::class, 'index'])
        ->name('review.dashboard');

    Route::post('/rating', [DetailGlamping::class, 'store'])
        ->name('rating.store');
    
    route::get('/sesi', [SessionController::class, 'index']);
    route::post('/sesi/login', [SessionController::class, 'login']);
    route::get('/sesi/logout', [SessionController::class, 'logout']);
    route::get('/sesi/register', [SessionController::class, 'register']);
    route::post('/sesi/create', [SessionController::class, 'create']);
    
    Route::post('/logout', function () {
    Auth::logout();
    return redirect(to: '/'); // arahkan ke halaman utama setelah logout
    })->name('logout');

    Route::get('/login', function () {
    return view('auth.login'); // pastikan view auth/login.blade.php ada
    })->name('login');

    