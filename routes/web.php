<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\EnkripsiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestviewController;
use App\Http\Controllers\IdentifikasiController;
use App\Http\Controllers\DateRangeController;
use App\Http\Controllers\PrimeController;
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
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/enkripsi',[EnkripsiController::class,'enkripsi']);

Route::get('/dashboardvendor',[DashboardController::class, 'index']);

Route::get('/dompet',[TestviewController::class, 'index']);

Route::get('/identifikasi', [IdentifikasiController::class, 'index']);


//Uas
Route::get('/daterange', [DateRangeController::class, 'index'])->name('daterange.index');
Route::post('/identify-weekends', [DateRangeController::class, 'identifyWeekends'])->name('identifyWeekends');

Route::get('/prime', [PrimeController::class, 'index']);
Route::post('/prime', [PrimeController::class, 'findPrimes']);
