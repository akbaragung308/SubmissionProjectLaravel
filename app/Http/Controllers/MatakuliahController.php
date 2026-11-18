<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Menampilkan seluruh data mata kuliah (Read).
     */
    public function index()
    {
        // Ambil semua data dari tabel matakuliahs
        $matakuliahs = Matakuliah::all();

        // Kirim variabel $matakuliahs ke view matakuliah/index.blade.php
        return view('matakuliah.index', compact('matakuliahs'));
    }

    /**
     * Menampilkan form tambah data.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Memvalidasi dan menyimpan data mata kuliah baru.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            // a. wajib diisi dan tidak boleh sama dengan data yang sudah ada
            'kode_matakuliah' => 'required|string|max:20|unique:matakuliahs,kode_matakuliah',
            // b. wajib diisi
            'nama_matakuliah' => 'required|string|max:100',
            // c. wajib diisi, angka antara 1 sampai 6
            'sks'             => 'required|integer|between:1,6',
        ]);

        // Simpan data yang sudah lolos validasi
        Matakuliah::create($data);

        // Kembali ke daftar sambil membawa pesan sukses
        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail satu mata kuliah berdasarkan id.
     */
    public function show($id)
    {
        // Jika id tidak ditemukan, otomatis tampil halaman 404
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }
}