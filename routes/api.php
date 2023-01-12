<?php

use App\Http\Controllers\Api\ShowsController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Public routes

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::post('/logout',  [AuthController::class,  'logout'])->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->group(function(){
    Route::get('home', [HomeController::class, 'index']);
    Route::get('shows', [ShowsController::class, 'index']);
    Route::get('/shows/search/{name}', [ShowsController::class, 'search']);

});



