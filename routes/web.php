<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GejalaController;
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
Route::get('/daftar_gejala', [GejalaController::class, 'index'])->name('daftar-gejala');
Route::get('/daftar-penyakit', [PenyakitController::class, 'index'])->name('daftar-penyakit');
Route::get('/tambah-gejala', [GejalaController::class, 'create'])->name('gejala.create');
Route::post('/tambah-gejala', [GejalaController::class, 'store'])->name('gejala.store');
Route::get('/edit-gejala/{id}', [GejalaController::class, 'edit'])->name('gejala.edit');
Route::put('/update-gejala/{id}', [GejalaController::class, 'update'])->name('gejala.update');
Route::delete('/delete-gejala/{id}', [GejalaController::class, 'tambah_gejala'])->name('gejala.destroy');