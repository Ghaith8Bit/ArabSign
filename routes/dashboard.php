<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
], function () {

    //
    Route::get('/home', [DashboardController::class, 'home'])->name('home');

    // Library Routes
    Route::group([
        'prefix' => 'library',
        'as' => 'library.',
    ],
        function () {
            Route::get('/', [LibraryController::class, 'index'])->name('index');
            Route::post('/', [LibraryController::class, 'store'])->name('store');
            Route::delete('/{id}', [LibraryController::class, 'destroy'])->name('destroy');
        });
});
