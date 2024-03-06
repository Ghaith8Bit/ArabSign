<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'website.',
], function () {
    Route::get('/', [WebsiteController::class, 'home'])->name('home');
    Route::group([
        'prefix' => 'content',
        'as' => 'content.',
    ], function () {
        Route::get('/', [WebsiteController::class, 'content_index'])->name('index');
        Route::get('/{id}', [WebsiteController::class, 'content_show'])->name('show');
    });
});
