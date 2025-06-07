<?php

use App\Http\Controllers\CMSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

    Route::get('/', [CMSController::class, 'index'])
    ->name('cms.home');

    Route::get('/pariwisata', [PariwisataController::class, 'index'])
        ->name('pariwisata.dashboard');

    Route::get('/umkm', [UMKMController::class, 'index'])
        ->name('umkm.dashboard');

    Route::get('/detail', [DetailController::class, 'index'])
        ->name('detail.dashboard');
    