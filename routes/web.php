<?php

use App\Http\Controllers\CryptoController;
use App\Http\Controllers\ForexController;
use App\Http\Controllers\SahamController;
use Illuminate\Support\Facades\Auth;
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
    return view('content.index');
});

Route::get('/chat', function () {
    return view('chat', ['title' => 'chat']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/saham', [SahamController::class, 'indexView'])->name('saham');
    Route::get('/saham/detail/{id}', [SahamController::class, 'showId']);
    Route::get('/forex', [ForexController::class, 'indexView']);
    Route::post('/handleCurrencySelection', [ForexController::class, 'handleCurrencySelection'])->name('handleCurrencySelection');
    Route::post('/exchange', [ForexController::class, 'exchange'])->name('exchange');
    Route::get('/crypto', [CryptoController::class, 'indexView'])->name('crypto');
});

Auth::routes(['verify' => true]);
