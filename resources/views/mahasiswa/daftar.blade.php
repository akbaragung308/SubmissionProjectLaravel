@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1 class="h3 mb-3">Daftar Mahasiswa</h1>

    @if ($ipkRendah->isNotEmpty())
        <x-alert tipe="bahaya">
            Perhatian! {{ $ipkRendah->count() }} mahasiswa memiliki IPK di bawah 2,0:
            {{ $ipkRendah->pluck('nama')->implode(', ') }}.
        </x-alert>
    @endif

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>IPK</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ $m['nim'] }}</td>
                    <td>{{ number_format($m['ipk'], 2, ',', '.') }}</td>
                    <td>
                        @if ($m['ipk'] >= 3.5)
                            Cum Laude
                        @elseif ($m['ipk'] >= 3.0)
                            Baik
                        @else
                            Perlu ditingkatkan
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('mahasiswa.detail', $m['nim']) }}" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection