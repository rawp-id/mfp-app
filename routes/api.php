<?php

use App\Http\Controllers\CryptoController;
use App\Http\Controllers\ForexController;
use App\Http\Controllers\SahamController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/saham', [SahamController::class, 'index']);
Route::get('/forex', [ForexController::class, 'index']);
Route::get('/crypto', [CryptoController::class, 'index']);