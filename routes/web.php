<?php

use App\Http\Controllers\CMSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailGunungTangkuban;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\UMKMController;
// use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailGlamping;
use App\Http\Controllers\DetailSunrise;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

    Route::get('/', [CMSController::class, 'index'])
    ->name('cms.home');

    Route::get('/pariwisata', [PariwisataController::class, 'index'])
        ->name('pariwisata.dashboard');

    Route::get('/umkm', [UMKMController::class, 'index'])
        ->name('umkm.dashboard');

    Route::get('/detailgunungtangkuban', [DetailGunungTangkuban::class, 'index'])
        ->name('detailgunungtangkuban.dashboard');
    
    Route::get('/detailglamping', [DetailGlamping::class, 'index'])
        ->name('detailglamping.dashboard');
    
    Route::get('/detailsunrise', [DetailSunrise::class, 'index'])
        ->name('detailsunrise.dashboard');

    Route::get('/review', [ReviewController::class, 'index'])
        ->name('review.dashboard');
    