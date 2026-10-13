@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <h1 class="h3 mb-3">Profil Mahasiswa</h1>

    <table class="table table-bordered w-auto">
        <tr><th>Nama</th><td>{{ $nama }}</td></tr>
        <tr><th>NIM</th><td>{{ $nim }}</td></tr>
        <tr><th>Prodi</th><td>{{ $prodi }}</td></tr>
    </table>
@endsection