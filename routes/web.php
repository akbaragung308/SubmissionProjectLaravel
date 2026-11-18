<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;   
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('mahasiswa.profil'));

Route::get('/profil', [MahasiswaController::class, 'profil'])->name('mahasiswa.profil');
Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])->name('mahasiswa.daftar');
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');

Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan.index');

Route::get('/jurusan/create', [JurusanController::class, 'create'])
    ->name('jurusan.create');

Route::post('/jurusan', [JurusanController::class, 'store'])
    ->name('jurusan.store');

Route::get('/jurusan/{id}', [JurusanController::class, 'show'])
    ->name('jurusan.show');

    // ===== Route Mata Kuliah =====

// Daftar mata kuliah (Read)
Route::get('/matakuliah', [MatakuliahController::class, 'index'])
    ->name('matakuliah.index');

// Form tambah mata kuliah (Create), harus di atas {id}
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])
    ->name('matakuliah.create');

// Menyimpan data dari form
Route::post('/matakuliah', [MatakuliahController::class, 'store'])
    ->name('matakuliah.store');

// Detail satu mata kuliah, harus paling bawah karena memakai {id}
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show'])
    ->name('matakuliah.show');