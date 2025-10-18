@extends('layouts.app')

@section('content')
<h1>Edit Novel</h1>

<form action="{{ route('novel.update', $novel->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Judul</label>
        <input type="text" name="judul" value="{{ $novel->judul }}" required>
    </div>

    <div>
        <label>Genre</label>
        <input type="text" name="genre" value="{{ $novel->genre }}" required>
    </div>

    <div>
        <label>Penulis</label>
        <input type="text" name="penulis" value="{{ $novel->penulis }}" required>
    </div>

    <div>
        <label>Kategori Novel</label>
        <select name="kategori_novel_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}" {{ $novel->kategori_novel_id == $k->id ? 'selected' : '' }}>
                    {{ $k->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Update</button>
</form>
@endsection