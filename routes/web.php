<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarGejalaController;
use App\Http\Controllers\PenyakitController;
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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/daftar_gejala', [DaftarGejalaController::class, 'daftar_gejala'])->name('daftar-gejala');
Route::get('/daftar-penyakit', [PenyakitController::class, 'index'])->name('daftar-penyakit');