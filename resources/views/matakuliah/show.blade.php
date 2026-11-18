<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>Detail Mata Kuliah</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr><th>Kode Mata Kuliah</th><td>{{ $matakuliah->kode_matakuliah }}</td></tr>
        <tr><th>Nama Mata Kuliah</th><td>{{ $matakuliah->nama_matakuliah }}</td></tr>
        <tr><th>Jumlah SKS</th><td>{{ $matakuliah->sks }}</td></tr>
        {{-- created_at dan updated_at otomatis berupa objek tanggal (Carbon) --}}
        <tr><th>Tanggal Dibuat</th><td>{{ $matakuliah->created_at->format('d-m-Y H:i') }}</td></tr>
        <tr><th>Tanggal Diperbarui</th><td>{{ $matakuliah->updated_at->format('d-m-Y H:i') }}</td></tr>
    </table>

    <p><a href="{{ route('matakuliah.index') }}">Kembali ke daftar</a></p>
</body>
</html>