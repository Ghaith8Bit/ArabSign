<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
], function () {
    Route::get('/home', [DashboardController::class, 'home'])->name('home');
    Route::get('/library', [DashboardController::class, 'home'])->name('library');
});
