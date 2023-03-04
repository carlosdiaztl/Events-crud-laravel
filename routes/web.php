<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});
route::resource('events', App\Http\Controllers\EventController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users/{user}/events/{event}/reservar', [App\Http\Controllers\ReservaController::class, 'create'])->name('reservas.create');
Route::post('/users/{user}/events/{event}/reservar', [App\Http\Controllers\ReservaController::class, 'store'])->name('reservas.store');
Route::get('/reservas/{user}/{event}', [App\Http\Controllers\ReservaController::class, 'show'])->name('reservas.show');
