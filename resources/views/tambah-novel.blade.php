@extends('layouts.app')

@section('content')
<h1>Tambah Novel Baru</h1>

<form action="{{ route('novel.simpan') }}" method="POST">
    @csrf
    <div>
        <label>Judul</label>
        <input type="text" name="judul" required>
    </div>

    <div>
        <label>Genre</label>
        <input type="text" name="genre" required>
    </div>

    <div>
        <label>Penulis</label>
        <input type="text" name="penulis" required>
    </div>

    <div>
        <label>Kategori Novel</label>
        <select name="kategori_novel_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection