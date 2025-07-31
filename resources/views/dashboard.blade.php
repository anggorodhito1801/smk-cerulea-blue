@extends('layout.main')

@section('content')
<div class="container mt-5">
    <h3>Selamat datang, {{ Session::get('nama') }}!</h3>
    <p>Anda berhasil login ke sistem SMK Cerulean Blue.</p>

    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
</div>
@endsection
