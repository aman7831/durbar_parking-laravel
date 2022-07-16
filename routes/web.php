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
    return view('/welcome');
});

Auth::routes();

// HTML CSS ROUTE 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/service', [App\Http\Controllers\AboutController::class, 'service'])->name('service');
Route::get('/book_now', [App\Http\Controllers\Parking_detailsController::class, 'book_now'])->name('book_now');
Route::get('/use_now', [App\Http\Controllers\Parking_detailsController::class, 'use_now'])->name('use_now');
Route::get('/reserve_now/{id}', [App\Http\Controllers\Parking_detailsController::class, 'reserve_now'])->name('reserve_now');
Route::get('/parking_details', [App\Http\Controllers\Parking_detailsController::class, 'parking_details'])->name('parking_details');
Route::get('/invoice/{id}', [App\Http\Controllers\Parking_detailsController::class, 'invoice'])->name('invoice');
Route::get('/payment', [App\Http\Controllers\Parking_detailsController::class, 'payment'])->name('payment');
Route::get('/start', [App\Http\Controllers\HomeController::class, 'start'])->name('start');


// REGISTERED VEHICLE ROUTE 
Route::get('/vehicle/{id}/edit', [App\Http\Controllers\AdminController::class, 'vehicleedit'])->name('vehicleedit');
Route::get('/vehicle_details', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicle_details');
Route::post('/vehicle/store', [App\Http\Controllers\VehicleController::class, 'store'])->name('vehicle_store');
Route::get('/vehicle/{id}', [App\Http\Controllers\VehicleController::class, 'destroy'])->name('vehicle_delete');
Route::post('/vehicle/{id}', [App\Http\Controllers\VehicleController::class, 'update'])->name('vehicle_update');
Route::resources([
    'vehicle' => App\Http\Controllers\VehicleController::class,
]);



// Prking lot details 
Route::get('/parkinglot/{id}/edit', [App\Http\Controllers\AdminController::class, 'parkinglotdetailsedit'])->name('parkinglotdetailsedit');
Route::get('/parkinglotdetails', [App\Http\Controllers\AdminController::class, 'parkinglotdetails'])->name('parkinglotdetails');
Route::post('/parkinglot', [App\Http\Controllers\ParkinglotController::class, 'store'])->name('parking_lot_details');
Route::get('/parkinglot/{id}', [App\Http\Controllers\ParkinglotController::class, 'destroy'])->name('parking_lot_delete');
Route::post('/parkinglot/{id}', [App\Http\Controllers\ParkinglotController::class, 'update'])->name('parking_lot_update');

// Reserve Parking 
Route::get('/reserve_now/store', [App\Http\Controllers\ReserveParkingController::class, 'store'])->name('reserve_store');
Route::resources([
    'reserve' => App\Http\Controllers\ReserveParkingController::class,
]);
Route::get('/reserve/{id}', [App\Http\Controllers\ReserveParkingController::class, 'destroy'])->name('reserver_parking_delete');



//admin 
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/registeredvehicle', [App\Http\Controllers\AdminController::class, 'registeredvehicle'])->name('registeredvehicle');
Route::get('/allreservedparkinglotdetails', [App\Http\Controllers\AdminController::class, 'allreservedparkinglotdetails'])->name('allreservedparkinglotdetails');



//search
Route::post('/search', [App\Http\Controllers\AdminController::class, 'search'])->name('search');
Route::post('/search_reserved_vehicle', [App\Http\Controllers\AdminController::class, 'search_reserved_vehicle'])->name('search_reserved_vehicle');
Route::post('/search_parking_lot_name', [App\Http\Controllers\AdminController::class, 'search_parking_lot_name'])->name('search_parking_lot_name');
Route::post('/search_parking_details', [App\Http\Controllers\AdminController::class, 'search_parking_details'])->name('search_parking_details');


