<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\KreteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\NormalisasiController;

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
Route::get('/', function () {
    return view('pages.template.home');
});
Route::get('/dashboard', function () {
    return view('pages.admin.crud.dashboard');
});

Route::get('/properties', function () {
    return view('pages.template.properties');
});
Route::get('/single', function () {
    return view('pages.template.single');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/create', [AdminController::class, 'create'])->name('create');
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::put('/admin/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/delete/{id}', [AdminController::class, 'destroy']);








Route::get('/kriteria', [KreteriaController::class, 'index'])->name('kreteria');
Route::get('/kriteria/tambah', [KreteriaController::class, 'create']);
Route::post('/kriteria/store', [KreteriaController::class, 'store']);
Route::get('/kriteria/delete/{id}', [KreteriaController::class, 'delete']);
Route::get('/kriteria/edit/{id}', [KreteriaController::class, 'edit']);
Route::put('/kriteria/{id}', [KreteriaController::class, 'update']);


Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
Route::get('/alternatif/create', [AlternatifController::class, 'create'])->name('add_alternatif');
Route::post('/alternatif/store', [AlternatifController::class, 'store']);
Route::get('/alternatif/delete/{id', [AlternatifController::class, 'destroy']);
Route::get('/alternatif/edit/{id}', [AlternatifController::class, 'edit']);
Route::put('/alternatif/update/{id}', [AlternatifController::class, 'update']);

Route::get('/hasil', [HasilController::class, 'calculateSAW'])->name('hasil');
Route::get('/normalisasi', [NormalisasiController::class, 'calculateSAW'])->name('hasil');




