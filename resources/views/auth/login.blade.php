@extends('layouts.main')

@section('content')
<div class="container mt-5 col-md-6">
    <h2 class="mb-3">Login ke SMK Cerulean Blue</h2>
    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div class="mb-3">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        @error('login')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
