<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Scheduly')</title>
    <!-- Google Fonts Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        body {
            background-color: #0f172a;
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 50;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .brand-logo {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
        }
        .brand-text h2 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #f8fafc;
        }
        .brand-text p {
            font-size: 0.75rem;
            color: #94a3b8;
        }
        nav {
            display: flex;
            gap: 8px;
        }
        nav a {
            color: #94a3b8;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        nav a:hover {
            color: #f8fafc;
            background: rgba(255, 255, 255, 0.05);
        }
        nav a.active {
            color: #ffffff;
            background: #6366f1;
        }
        main {
            flex: 1;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }
        footer {
            text-align: center;
            padding: 20px;
            font-size: 0.8rem;
            color: #64748b;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body>
    <header>
        <div class="brand">
            <div class="brand-logo">IF</div>
            <div class="brand-text">
                <h2>Scheduly</h2>
                <p>Kuliah anti-bentrok!</p>
            </div>
        </div>
        <nav>
            <a href="{{ route('rooms.index') }}" class="active">Daftar Ruangan</a>
            <a href="{{ route('rooms.create') }}">Tambah Ruangan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Teknik Informatika - Tugas Studio 1
    </footer>
</body>
</html>