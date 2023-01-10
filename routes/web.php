<?php

use App\Http\Controllers\BookingController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowsController;
use App\Http\Controllers\TheatreController;

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
// Common resource routes:
// index -- show all listings
//show -- show single listing
//create -- show form to create new listing
//store -- store new listing
//edit -- show form to edit listing
//update-- update listing
// destroy -- delete listing

Route::get('/', function () {
    return view('index');
});
// route for movies view
Route::get('/dashboard', [MovieController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// route for showing create movie view
Route::get('/movies/create', [MovieController::class, 'create'])->middleware(['auth', 'verified']);
//route for storing movie
Route::post('/movies/store', [MovieController::class, 'store'])->middleware(['auth', 'verified']);
//route for showing  edit movie view
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->middleware(['auth', 'verified']);
//route for movie update
Route::put('/movies/{movie}', [MovieController::class, 'update'])->middleware(['auth', 'verified']);
//delete movie
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->middleware(['auth', 'verified']);

//for theatres view
Route::get('/theatres', [TheatreController::class, 'index'])->middleware(['auth', 'verified']);
//for showing create theatre view
Route::get('/theatres/create', [TheatreController::class, 'create'])->middleware(['auth', 'verified']);
//route for storing theatre
Route::post('/theatres/store', [TheatreController::class, 'store'])->middleware(['auth', 'verified']);
//route for showing edit theatre view
Route::get('/theatres/{theatre}/edit', [TheatreController::class, 'edit'])->middleware(['auth', 'verified']);
//route for updating theatre
Route::put('/theatres/{theatre}', [TheatreController::class, 'update'])->middleware(['auth', 'verified']);
//route for deleting theatre
Route::delete('/theatres/{theatre}', [TheatreController::class, 'destroy'])->middleware(['auth', 'verified']);


// route for Shows view
Route::get('/shows',[ShowsController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/shows/create',[ShowsController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/shows/store',[ShowsController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/shows/{show}/edit',[ShowsController::class, 'edit'])->middleware(['auth', 'verified']);
Route::put('/shows/{show}',[ShowsController::class, 'update'])->middleware(['auth', 'verified']);
Route::delete('/shows/{show}',[ShowsController::class, 'destroy'])->middleware(['auth', 'verified']);

// route for Bookings view
Route::get('/bookings',[BookingController::class, 'index'])->middleware(['auth', 'verified']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
