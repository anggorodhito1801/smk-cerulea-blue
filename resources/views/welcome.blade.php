@extends('layouts.main')

@section('content')
<div class="text-center">
    <img src="{{ asset('img/logo_sekolah.jpg') }}" alt="Logo Sekolah" width="100">
        <div id="root"></div> @vite(['resources/js/app.jsx'])
        <h2 class="mt-3">Selamat Datang di Sistem SMK Cerulean Blue</h2>
    <p id="greeting" class="lead text-secondary mt-1"></p>

    <div class="row justify-content-center">
    <div class="col-md-3">
        <div class="card text-center mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title">Data Siswa</h5>
                <a href="{{ route('siswa.index') }}" class="btn btn-primary w-100">Lihat</a>
            </div>
        </div>
        <div class="card text-center mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title">Data Guru</h5>
                <a href="{{ route('guru.index') }}" class="btn btn-primary w-100">Lihat</a>
            </div>
        </div>
        <div class="card text-center mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title">Data Kelas</h5>
                <a href="{{ route('kelas.index') }}" class="btn btn-primary w-100">Lihat</a>
            </div>
        </div>
        <div class="card text-center mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title">Data User</h5>
                <a href="{{ route('user.index') }}" class="btn btn-primary w-100">Lihat</a>
            </div>
        </div>
    </div>
</div>

</div>

<script>
    const greeting = document.getElementById('greeting');
    const hour = new Date().getHours();
    let text = "Selamat Datang!";

    if (hour < 12) text = "Selamat Pagi!";
    else if (hour < 18) text = "Selamat Siang!";
    else text = "Selamat Sore!";

    greeting.innerText = text;
</script>
@endsection
