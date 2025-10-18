<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Novel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Nama aplikasi -->
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">📚 Novel App</a>

            <!-- Menu navigasi -->
            <div>
                <a href="{{ url('/') }}" class="btn btn-outline-light btn-sm {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('novel.index') }}" class="btn btn-outline-light btn-sm {{ request()->is('novel*') ? 'active' : '' }}">Daftar Novel</a>
                <a href="{{ route('quotes') }}" class="btn btn-outline-light btn-sm {{ request()->is('quotes') ? 'active' : '' }}">Quotes</a>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        @yield('content')
    </main>

</body>
</html>