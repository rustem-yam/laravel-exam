<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ThingController;



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


// Main
Route::get('/', [MainController::class, 'index']);


// Auth
Route::get('/create', [AuthController::class, 'create']);
Route::post('/registr', [AuthController::class, 'registr']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'customLogin']);
Route::get('/logout', [AuthController::class, 'logout']);


// Places
Route::get('/places', [PlaceController::class, 'index'])->name('places.index');
Route::get('/places/create', [PlaceController::class, 'create'])->name('places.create');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store');
Route::get('/places/{id}', [PlaceController::class, 'show'])->name('places.show');
Route::get('/places/{id}/edit', [PlaceController::class, 'edit'])->name('places.edit');
Route::patch('/places/{id}', [PlaceController::class, 'update'])->name('places.update');
Route::delete('/places/{id}', [PlaceController::class, 'destroy'])->name('places.destroy');


// Things
Route::get('/things', [ThingController::class, 'index'])->name('things.index');
Route::get('/things/create', [ThingController::class, 'create'])->name('things.create');
Route::post('/things', [ThingController::class, 'store'])->name('things.store');
Route::get('/things/{id}', [ThingController::class, 'show'])->name('things.show');
Route::get('/things/{id}/edit', [ThingController::class, 'edit'])->name('things.edit');
Route::patch('/things/{id}', [ThingController::class, 'update'])->name('things.update');
Route::delete('/things/{id}', [ThingController::class, 'destroy'])->name('things.destroy');
