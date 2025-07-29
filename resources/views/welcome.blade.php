@extends('layouts.app')

@section('content')
<div class="text-center">
    <div id="root"></div>
@vite(['resources/js/app.jsx'])

    <img src="{{ asset('img/logo_sekolah.jpg') }}" alt="Logo Sekolah" width="100">
    <h1 class="mt-3">Selamat Datang di Sistem SMK Cerulean Blue</h1>
    <p id="greeting" class="lead text-secondary mt-1"></p>

    <div class="row justify-content-center mt-5">
        <div class="col-md-3">
            <a href="/siswa" class="btn btn-outline-primary btn-lg w-100 mb-3">Data Siswa</a>
        </div>
        <div class="col-md-3">
            <a href="/guru" class="btn btn-outline-success btn-lg w-100 mb-3">Data Guru</a>
        </div>
        <div class="col-md-3">
            <a href="/kelas" class="btn btn-outline-warning btn-lg w-100 mb-3">Data Kelas</a>
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
