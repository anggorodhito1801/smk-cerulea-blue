@extends('layouts.app')
@section('content')
<div class="container">
    <h4>Data Kelas</h4>
    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Tingkat</th>
                <th>Jurusan</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $k)
<tr>
    <td>{{ $k->id_kelas }}</td>
    <td>{{ $k->nama_kelas }}</td>
    <td>{{ $k->tingkat_kelas }}</td>
    <td>{{ $k->jurusan }}</td>
    <td>{{ $k->wali->nama_guru }}</td>
    <td>
        <a href="{{ route('kelas.edit', $k->id_kelas) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('kelas.destroy', $k->id_kelas) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
