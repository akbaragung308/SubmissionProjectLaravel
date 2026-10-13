@extends('layouts.app')

@section('title', 'Detail ' . $mhs['nama'])

@section('content')
    <h1 class="h3 mb-3">Detail Mahasiswa</h1>

    <table class="table table-bordered w-auto">
        <tr><th>Nama</th><td>{{ $mhs['nama'] }}</td></tr>
        <tr><th>NIM</th><td>{{ $mhs['nim'] }}</td></tr>
        <tr><th>IPK</th><td>{{ number_format($mhs['ipk'], 2, ',', '.') }}</td></tr>
    </table>

    <a href="{{ route('mahasiswa.daftar') }}" class="btn btn-secondary">&laquo; Kembali ke daftar</a>
@endsection