<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Cerulean Blue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            color: #0d6efd;
        }
        footer {
            background-color: #f1f1f1;
            padding: 15px 0;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">SMK Cerulean Blue</a>
            <div class="collapse navbar-collapse">
<ul class="navbar-nav ms-auto align-items-center">
    <li class="nav-item"><a class="nav-link" href="/siswa">Siswa</a></li>
    <li class="nav-item"><a class="nav-link" href="/guru">Guru</a></li>
    <li class="nav-item"><a class="nav-link" href="/kelas">Kelas</a></li>
    <li class="nav-item"><a class="nav-link" href="/user">User</a></li>

    @if(Session::has('login'))
        <li class="nav-item">
            <span class="navbar-text text-success me-3">
                Selamat {{ now()->format('H') < 12 ? 'Pagi' : (now()->format('H') < 17 ? 'Siang' : 'Sore') }}, <strong>{{ Session::get('name') }}</strong>
            </span>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="{{ route('logout') }}">Logout</a>
        </li>
    @endif
</ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="mt-5">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} SMK Cerulean Blue. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
