@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Novel Page</h1>

    {{-- Tombol tambah --}}
    <a href="{{ route('novel.tambah') }}" class="btn btn-primary mb-3">+ Tambah Novel</a>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tabel daftar novel --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($novel as $index => $n)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $n->judul }}</td>
                <td>{{ $n->genre }}</td>
                <td>{{ $n->penulis }}</td>
                <td>{{ $n->kategori?->nama_kategori ?? '-' }}</td>
                <td>
                    <a href="{{ route('novel.edit', $n->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('novel.hapus', $n->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus novel ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection