<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('mahasiswa.profil'));

Route::get('/profil', [MahasiswaController::class, 'profil'])->name('mahasiswa.profil');
Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])->name('mahasiswa.daftar');
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');
