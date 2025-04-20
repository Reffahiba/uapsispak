<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RuleBaseController;
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

//Route untuk gejala
Route::get('/daftar_gejala', [GejalaController::class, 'index'])->name('daftar-gejala');
Route::get('/daftar-penyakit', [PenyakitController::class, 'index'])->name('daftar-penyakit');
Route::get('/tambah-gejala', [GejalaController::class, 'create'])->name('gejala.create');
Route::post('/tambah-gejala', [GejalaController::class, 'store'])->name('gejala.store');
Route::get('/edit-gejala/{id}', [GejalaController::class, 'edit'])->name('gejala.edit');
Route::put('/update-gejala/{id}', [GejalaController::class, 'update'])->name('gejala.update');
Route::delete('/delete-gejala/{id}', [GejalaController::class, 'destroy'])->name('gejala.destroy');

//Route untuk penyakit
Route::get('/daftar-penyakit', [PenyakitController::class, 'index'])->name('daftar-penyakit');
Route::get('/daftar-penyakit/create', [PenyakitController::class, 'create'])->name('penyakit.create');
Route::post('/daftar-penyakit', [PenyakitController::class, 'store'])->name('penyakit.store');
Route::get('/daftar-penyakit/{id}/edit', [PenyakitController::class, 'edit'])->name('penyakit.edit');
Route::put('/daftar-penyakit/{id}', [PenyakitController::class, 'update'])->name('penyakit.update');
Route::delete('/daftar-penyakit/{id}', [PenyakitController::class, 'destroy'])->name('penyakit.destroy');

//Route untuk basis pengetahuan
Route::get('/daftar-basis_pengetahuan', [RuleBaseController::class, 'index'])->name('daftar-basis_pengetahuan');
Route::get('/daftar-basis_pengetahuan/create', [RuleBaseController::class, 'create'])->name('basis_pengetahuan.create');
Route::post('/daftar-basis_pengetahuan', [RuleBaseController::class, 'store'])->name('basis_pengetahuan.store');
Route::get('/daftar-basis_pengetahuan/{id}/edit', [RuleBaseController::class, 'edit'])->name('basis_pengetahuan.edit');
Route::put('/daftar-basis_pengetahuan/{id}', [RuleBaseController::class, 'update'])->name('basis_pengetahuan.update');
Route::delete('/daftar-basis_pengetahuan/{id}', [RuleBaseController::class, 'destroy'])->name('basis_pengetahuan.destroy');

//Route untuk diagnosa
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::post('/diagnosa', [DashboardController::class, 'prosesDiagnosa'])->name('diagnosa');