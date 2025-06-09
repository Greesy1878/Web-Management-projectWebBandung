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

    Route::get('/', [CMSController::class, 'index'])
    ->name('cms.home');

    Route::get('/pariwisata', [PariwisataController::class, 'index'])
        ->name('pariwisata.dashboard');

    Route::get('/umkm', [UMKMController::class, 'index'])
        ->name('umkm.dashboard');

    Route::get('/pariwisata/{id}', [PariwisataController::class, 'detail'])
        ->name('pariwisata.detail');
    
    Route::get('/review', [ReviewController::class, 'index'])
        ->name('review.dashboard');

    Route::post('/rating', [DetailGlamping::class, 'store'])
        ->name('rating.store');


    