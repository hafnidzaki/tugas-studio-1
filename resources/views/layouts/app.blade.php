<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Ruangan')</title>
</head>
<body>
    <header>
        <h2>Sistem Informasi Ruang Kelas</h2>
        <nav>
            <!-- SELURUH TAUTAN WAJIB MENGGUNAKAN route() -->
            <a href="{{ route('rooms.index') }}">Daftar Ruangan</a> | 
            <a href="{{ route('rooms.create') }}">Tambah Ruangan</a>
        </nav>
    </header>
    <hr>
    <main>
        @yield('content')
    </main>
</body>
</html>