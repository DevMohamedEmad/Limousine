<?php

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

Route::get('/', function () {
    return view('front/welcome');
})->name('Bright Empire');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fleets',[App\Http\Controllers\CarController::class, 'index'])->name('fleets');
Route::get('/fleets/create',[App\Http\Controllers\CarController::class, 'create'])->name('fleet.create');
