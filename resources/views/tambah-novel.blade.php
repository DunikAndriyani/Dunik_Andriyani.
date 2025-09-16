@extends('app')

@section('content')
    <h1>Welcome to the Tambah Novel Page</h1>
    <form action="{{route('novel.simpan')}}" method="post">
        @csrf
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul">
        </div>
        <div>
            <label for="">Genre</label>
            <input type="text" name="genre">
        </div>
        <div>
            <label for="">Penulis</label>
            <input type="text" name="penulis">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection