<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('/login', [App\Http\Controllers\Api\LoginController::class, 'login']);

Route::get('messages', [App\Http\Controllers\Api\MessageController::class, 'index']);
// get by phone
Route::get('message/get/phone/{phone}', [App\Http\Controllers\Api\MessageController::class, 'getByPhone']);

// get last data
Route::get('message/get/latest', [App\Http\Controllers\Api\MessageController::class, 'getLast']);

Route::post('message/create', [App\Http\Controllers\Api\MessageController::class, 'store']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Api\LoginController::class, 'logout']);


});