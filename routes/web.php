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
Route::post('/fleets/store',[App\Http\Controllers\CarController::class, 'store'])->name('fleet.store');
Route::get('/fleet/{car}',[App\Http\Controllers\CarController::class, 'show'])->name('fleet.show');
Route::get('/home-fleets',[App\Http\Controllers\CarController::class, 'fleets'])->name('home-fleet');
Route::get('/filter/{id}',[App\Http\Controllers\CarController::class, 'category_filter'])->name('category.filter');
Route::get('/contact',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/contact/show',[App\Http\Controllers\HomeController::class, 'show_contact'])->name('contact.show');
Route::post('/contact/store',[App\Http\Controllers\HomeController::class, 'contact_store'])->name('contact.store');
Route::get('/contact/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete_contact'])->name('contact.delete');

