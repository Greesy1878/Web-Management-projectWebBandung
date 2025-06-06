<?php

use App\Http\Controllers\CMSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PariwisataController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

    Route::get('/', [CMSController::class, 'index'])
    ->name('cms.home');

    Route::get('/pariwisata', [PariwisataController::class, 'index'])
        ->name('pariwisata.dashboard');