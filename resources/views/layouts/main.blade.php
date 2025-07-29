<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Cerulean Blue</title>
    @vite(['resources/js/app.jsx'])
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
            <div id="root"></div> @vite(['resources/js/app.jsx'])
            <a class="navbar-brand" href="/">SMK Cerulean Blue</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/siswa">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/guru">Guru</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kelas">Kelas</a></li>
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
