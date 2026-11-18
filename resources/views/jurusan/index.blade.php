<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Jurusan</title>
</head>
<body>
    <h1>Data Jurusan</h1>

    {{-- Pesan sukses dari controller (with('success', ...)) --}}
    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    {{-- Tautan menuju form tambah jurusan --}}
    <a href="{{ route('jurusan.create') }}">Tambah Jurusan</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Jurusan</th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse mengulang data; @empty tampil jika data kosong --}}
            @forelse ($jurusans as $jurusan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jurusan->kode }}</td>
                    <td>{{ $jurusan->nama }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Belum ada data jurusan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>