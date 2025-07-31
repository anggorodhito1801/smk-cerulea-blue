@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Edit User</h3>
    <form action="{{ route('user.update', $user->username) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Username</label>
            <input type="text" value="{{ $user->username }}" class="form-control" readonly>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $user->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password (opsional)</label>
            <input type="password" name="pass" class="form-control" placeholder="Kosongkan jika tidak diganti">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
