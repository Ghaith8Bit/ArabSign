<?php

use App\Enums\LibraryTypeEnum;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Include website routes
include __DIR__ . '/website.php';

// Include dashboard routes
include __DIR__ . '/dashboard.php';



