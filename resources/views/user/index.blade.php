@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Data User</h3>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $user)
    <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->username) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('user.destroy', $user->username) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
    </tr>
@empty
    <tr><td colspan="4">Tidak ada data user</td></tr>
@endforelse
        </tbody>
    </table>
</div>
@endsection
