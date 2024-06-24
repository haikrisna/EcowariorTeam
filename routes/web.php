<?php

use App\Http\Controllers\EnkripsiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestviewController;
use App\Http\Controllers\IdentifikasiController;
use App\Http\Controllers\DateRangeController;
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
    return view('welcome');
});

Route::get('/halo', function () {
    return view('permintaanpesananuser');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/enkripsi',[EnkripsiController::class,'enkripsi']);

Route::get('/dashboardvendor',[DashboardController::class, 'index']);

Route::get('/dompet',[TestviewController::class, 'index']);

Route::get('/identifikasi', [IdentifikasiController::class, 'index']);


//Uas
Route::get('/daterange', [DateRangeController::class, 'index'])->name('daterange.index');
Route::post('/identify-weekends', [DateRangeController::class, 'identifyWeekends'])->name('identifyWeekends');

//Natan
Route::get('/', function () {
    return view('form'); // Tampilkan view form input
});

Route::post('/hitung', 'App\Http\Controllers\LeapYearController@calculate')->name('hitung'); // Handle submit form
