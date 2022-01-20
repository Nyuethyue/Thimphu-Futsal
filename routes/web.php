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

Route::get('/', function () {
    return view('pages.frontend.index');
});


// Admin Routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Frontend Routes
Route::get('/getAllUsers', [App\Http\Controllers\admin\UserController::class, 'index'])->name('getAllUsers');
Route::get('/booking', [App\Http\Controllers\frontend\BookingController::class, 'index'])->name('booking');
