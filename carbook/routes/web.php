<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Frontend\HomepageController::class, 'index']);

Route::get('/services', [\App\Http\Controllers\Frontend\ServiceController::class, 'index']);

Route::get('/cars/{slug}', [\App\Http\Controllers\Frontend\CarController::class, 'show']);

Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index']);