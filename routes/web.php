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

Route::get('', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/service', [App\Http\Controllers\AboutController::class, 'service'])->name('service');
Route::get('/book_now', [App\Http\Controllers\Parking_detailsController::class, 'book_now'])->name('book_now');
Route::get('/use_now', [App\Http\Controllers\Parking_detailsController::class, 'use_now'])->name('use_now');
Route::get('/reserve_now', [App\Http\Controllers\Parking_detailsController::class, 'reserve_now'])->name('reserve_now');
Route::get('/parking_details', [App\Http\Controllers\Parking_detailsController::class, 'parking_details'])->name('parking_details');
