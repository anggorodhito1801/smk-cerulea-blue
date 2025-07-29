@extends('layouts.app')
@section('content')
<div class="container">
    <h4>Data Guru</h4>
    <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Guru</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Mapel</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $g)
                <tr>
                    <td>{{ $g->id_guru }}</td>
                    <td>{{ $g->nama_guru }}</td>
                    <td>{{ $g->nip }}</td>
                    <td>{{ $g->email }}</td>
                    <td>{{ $g->no_hp }}</td>
                    <td>{{ $g->mapel_ampu }}</td>
                    <td>{{ $g->jkel_guru }}</td>
                    <td>
                        <a href="{{ route('guru.edit', $g->id_guru) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('guru.destroy', $g->id_guru) }}" method="POST" style="display:inline-block">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
