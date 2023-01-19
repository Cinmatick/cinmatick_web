<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\ShowsController;
use App\Http\Controllers\Auth\CodeCheckController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;


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

//Password reset routes

Route::post('password/email',  ForgotPasswordController::class);
Route::post('password/code/check', CodeCheckController::class);
Route::post('password/reset', ResetPasswordController::class);



Route::middleware('auth:sanctum')->group(function(){
    Route::get('home', [HomeController::class, 'index']);
    Route::get('shows', [ShowsController::class, 'index']);
    Route::get('/shows/search', [ShowsController::class, 'search']);

});



