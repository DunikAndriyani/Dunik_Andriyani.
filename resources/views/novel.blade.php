@extends('app')

@section('content')
    <h1>Welcome to the My Novel Page</h1>
    <div>
        <a href="{{route('novel.tambah')}}"><button>Tambah Novel</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Genre</th>
                <th>Penulis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($novel as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->genre }}</td>
                    <td>{{ $item->penulis }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection