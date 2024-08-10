<?php

use App\Http\Controllers\PesertaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peserta', [PesertaController::class, 'tampil'])->name('peserta.tampil'); 
Route::get('tambah/peserta', [PesertaController::class, 'tambah'])->name('peserta.tambah'); 
Route::post('peserta/submit', [PesertaController::class, 'submit'])->name('peserta.submit'); 
Route::get('peserta/edit/{id}', [PesertaController::class, 'edit'])->name('peserta.edit'); 
Route::post('peserta/update/{id}', [PesertaController::class, 'update'])->name('peserta.update'); 
Route::post('peserta/delete/{id}', [PesertaController::class, 'delete'])->name('peserta.delete'); 
Route::get('/peserta/{id}', [PesertaController::class, 'show'])->name('peserta.show');
Route::post('peserta/{id}/add-material', [PesertaController::class, 'addMaterial'])->name('peserta.addMaterial');
Route::resource('courses', CourseController::class);
