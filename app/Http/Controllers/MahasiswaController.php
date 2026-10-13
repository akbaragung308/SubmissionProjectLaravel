<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    // Data bersama untuk daftar() dan detail()
    private function dataMahasiswa(): array
    {
        return [
            ['nama' => 'Andi Pratama',   'nim' => '242520001', 'ipk' => 3.82],
            ['nama' => 'Budi Santoso',   'nim' => '242520002', 'ipk' => 3.45],
            ['nama' => 'Citra Lestari',  'nim' => '242520004', 'ipk' => 3.10],
            ['nama' => 'Dewi Anggraini', 'nim' => '242520005', 'ipk' => 2.75],
            ['nama' => 'Eko Wijaya',     'nim' => '242520006', 'ipk' => 1.85],
        ];
    }

    // Latihan a
    public function profil()
    {
        $nama  = 'Agung Muhammad Akbar';
        $nim   = '242520003';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    // Latihan b
    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa();

        // Untuk komponen <x-alert> (latihan d)
        $ipkRendah = collect($mahasiswa)->where('ipk', '<', 2.0);

        return view('mahasiswa.daftar', compact('mahasiswa', 'ipkRendah'));
    }

    // Latihan c
    public function detail(string $nim)
    {
        $mhs = collect($this->dataMahasiswa())->firstWhere('nim', $nim);

        if (!$mhs) {
            abort(404);
        }

        return view('mahasiswa.detail', ['mhs' => $mhs]);
    }
}