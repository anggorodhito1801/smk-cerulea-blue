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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('siswa.index') }}">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('guru.index') }}">Guru</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kelas.index') }}">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
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
