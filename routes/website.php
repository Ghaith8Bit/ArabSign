<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'name' => 'website.',
], function () {
    Route::get('/', [WebsiteController::class, 'home'])->name('home');
});
