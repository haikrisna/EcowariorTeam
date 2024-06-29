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
use App\Http\Controllers\PesananditolakController;
use App\Http\Controllers\PesananditerimaController;
use App\Http\Controllers\PrimeController;
use App\Http\Controllers\RiwayatuserController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\DompetController;

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
    return view('signup');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/enkripsi',[EnkripsiController::class,'enkripsi']);

//Dashboard
Route::get('/dashboardvendor',[DashboardController::class, 'dashboard_vendor'])->name('dashboardvendor');
Route::get('/dashboarduser',[DashboardController::class, 'dashboard_user'])->name('dashboarduser');

Route::get('/dompet',[TestviewController::class, 'index'])->name('dompet');

Route::get('/identifikasi', [IdentifikasiController::class, 'index'])->name('identifikasi');


//Uas
Route::get('/daterange', [DateRangeController::class, 'index'])->name('daterange.index')->name('daterange');

Route::post('/identify-weekends', [DateRangeController::class, 'identifyWeekends'])->name('identifyWeekends');

Route::get('/prime', [PrimeController::class, 'index']);
Route::post('/prime', [PrimeController::class, 'findPrimes']);


// Tampilkan page
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Dashboard user

// Proses pesanan
Route::get('/pesananuser', [PesananController::class, 'permintaan_user'])->name('pesananuser');
Route::get('/pesananmasuk', [PesananController::class, 'pesanan_masuk'])->name('pesananmasuk');
Route::get('/pesanandalamproses', [PesananController::class, 'proses_pesanan'])->name('pesanandalamproses');
Route::get('pesananditolak', [PesananController::class, 'tolak_pesanan'])->name('pesananditolak');
Route::get('pesananditolakuser', [PesananController::class, 'tolak_pesananuser'])->name('pesananditolakuser');

Route::get('pesanandalamperjalanan', [PesananController::class, 'perjalanan_pesanan'])->name('pesanandalamperjalanan');

// Riwayat
Route::get('riwayatvendor', [RiwayatuserController::class, 'riwayat_vendor'])->name('riwayatvendor');

// Statistik
Route::get('/statistikvendor', [StatistikController::class, 'statistik_vendor'])->name('statistikvendor');

// Dompet 
Route::get('/dompetvendor', [DompetController::class, 'dompet_vendor'])->name('dompetvendor');
