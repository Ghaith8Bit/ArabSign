<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LibraryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
], function () {

    // Main Routes
    Route::get('/home', [DashboardController::class, 'home'])->name('home');

    // Category Routes
    Route::group([
        'prefix' => 'category',
        'as' => 'category.',
    ],
        function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::post('/', [CategoryController::class, 'store'])->name('store');
            Route::patch('/{id}', [CategoryController::class, 'update'])->name('update');
            Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
        });

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

    // Content Routes
    Route::group([
        'prefix' => 'content',
        'as' => 'content.',
    ],
        function () {
            Route::get('/', [ContentController::class, 'index'])->name('index');
            Route::get('/create', [ContentController::class, 'create'])->name('create');
            Route::post('/', [ContentController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [ContentController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [ContentController::class, 'update'])->name('update');
            Route::delete('/{id}', [ContentController::class, 'destroy'])->name('destroy');
        });
});
