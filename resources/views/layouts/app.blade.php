<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMK Cerulean Blue</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">SMK Cerulean Blue</a>
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

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center mt-5 mb-3 text-muted">
        &copy; {{ date('Y') }} SMK Cerulean Blue
    </footer>
</body>
</html>
