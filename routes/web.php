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

//Route untuk penyakit
Route::get('/daftar-penyakit', [PenyakitController::class, 'index'])->name('daftar-penyakit');
Route::get('/daftar-penyakit/create', [PenyakitController::class, 'create'])->name('penyakit.create');
Route::post('/daftar-penyakit', [PenyakitController::class, 'store'])->name('penyakit.store');
Route::get('/daftar-penyakit/{id}/edit', [PenyakitController::class, 'edit'])->name('penyakit.edit');
Route::put('/daftar-penyakit/{id}', [PenyakitController::class, 'update'])->name('penyakit.update');
Route::delete('/daftar-penyakit/{id}', [PenyakitController::class, 'destroy'])->name('penyakit.destroy');