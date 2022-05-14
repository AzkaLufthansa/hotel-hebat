<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\ResepsionisController;

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

Route::get('/', [PageController::class, 'index'])->name('login');
Route::get('/kamar', [PageController::class, 'kamar']);
Route::get('/fasilitas', [PageController::class, 'fasilitas']);

// Login Pages
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register Pages
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Admin Pages
Route::middleware(['auth', 'permission:mengelola-data'])->group(function () {
    Route::resource('adminKamar', KamarController::class)->middleware('auth');
    Route::resource('fasilitasKamar', FasilitasKamarController::class)->middleware('auth');
    Route::resource('fasilitasHotel', FasilitasHotelController::class)->middleware('auth');
});

// Resepsionis Pages
Route::get('/resepsionis', [ResepsionisController::class, 'index'])->middleware(['auth', 'permission:pengecekan-data-reservasi']);