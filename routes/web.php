<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Models\Category;
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
Route::get('/fleet/edit/{car}',[App\Http\Controllers\CarController::class, 'edit'])->name('fleet.edit');
Route::post('/fleets/update',[App\Http\Controllers\CarController::class, 'update'])->name('fleet.update');
// Route::get('/fleet/{car}',[App\Http\Controllers\CarController::class, 'show'])->name('fleet.show');
Route::post('/fleet/delete/{car}',[App\Http\Controllers\CarController::class, 'destroy'])->name('fleet.delete');
// Route::get('/home-fleets',[App\Http\Controllers\CarController::class, 'fleets'])->name('home-fleet');

//-------------------------------      Filter By  Category       ------------------------------
// Route::get('/filter/{id}',[App\Http\Controllers\CategoryController::class, 'category_filter'])->name('category.filter');

// -------------------- Contact Routes ---------------------
Route::get('/contact',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/contact/show',[App\Http\Controllers\HomeController::class, 'show_contact'])->name('contact.show');
Route::post('/contact/store',[App\Http\Controllers\HomeController::class, 'contact_store'])->name('contact.store');
Route::post('/contact/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete_contact'])->name('contact.delete');



// -------------------services routes-------------------
Route::get('allServices',[ServiceController::class,'allServices'])->name('allServices');
Route::prefix('services')->group(function () {
Route::get('weddingService',[ServiceController::class,'weddingService'])->name('weddingService');
Route::get('vipService',[ServiceController::class,'vipService'])->name('vipService');
Route::get('airportService',[ServiceController::class,'airportService'])->name('airportService');
Route::get('bookByArea',[ServiceController::class,'bookByArea'])->name('bookByArea');
Route::get('casinos',[ServiceController::class,'casinos'])->name('casinos');
Route::get('luxuryLimoService',[ServiceController::class,'luxuryLimoService'])->name('luxuryLimoService');
Route::get('nightToTown',[ServiceController::class,'nightToTown'])->name('nightToTown');
Route::get('pointToPointService',[ServiceController::class,'pointToPointService'])->name('pointToPointService');
Route::get('promsService',[ServiceController::class,'promsService'])->name('promsService');
Route::get('travelingWithKids',[ServiceController::class,'travelingWithKids'])->name('travelingWithKids');
});


//  --  Category -- 

Route::get('categories' , [CategoryController::class,'index'])->name('categories');
Route::get('category/create' , [CategoryController::class,'create'])->name('category.create');
Route::post('category/store' , [CategoryController::class,'store'])->name('category.store');
Route::get('category/show/{category}' , [CategoryController::class,'show'])->name('category.show');
Route::delete('category/delete/{category}' , [CategoryController::class,'destroy'])->name('category.delete');