@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="mb-3">Selamat Datang, {{ Auth::user()->name }} 👋</h1>
    <p class="lead mb-4">Pilih menu di bawah untuk melanjutkan:</p>

    <div class="row justify-content-center">
        <!-- Kartu MyNovel -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">📚 MyNovel</h5>
                    <p class="card-text">Lihat koleksi novel kamu di sini.</p>
                    <a href="{{ url('/novel') }}" class="btn btn-primary w-100">MyNovel</a>
                </div>
            </div>
        </div>

        <!-- Kartu Quotes -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">💬 Quotes</h5>
                    <p class="card-text">Nikmati kutipan inspiratif pilihanmu.</p>
                    <a href="{{ url('/quotes') }}" class="btn btn-success w-100">MyQuotes</a>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection