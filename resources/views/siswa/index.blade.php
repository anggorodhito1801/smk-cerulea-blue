@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Data Siswa</h3>

    <form action="{{ route('siswa.index') }}" method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <select name="kelas" class="form-control" onchange="this.form.submit()">
                    <option value="">-- Filter Berdasarkan Kelas --</option>
                    @foreach($kelasList as $kelas)
                        <option value="{{ $kelas->id_kelas }}" {{ request('kelas') == $kelas->id_kelas ? 'selected' : '' }}>
                            {{ $kelas->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>

    <a href="{{ route('siswa.create') }}" class="btn btn-success mb-3">+ Tambah Siswa</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>JK</th>
                <th>Tgl Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($siswaList as $siswa)
            <tr>
                <td>{{ $siswa->id_siswa }}</td>
                <td>{{ $siswa->nama_siswa }}</td>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->id_kelas }}</td>
                <td>{{ $siswa->alamat_siswa }}</td>
                <td>{{ $siswa->jkel_siswa }}</td>
                <td>{{ $siswa->tgl_siswa }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('siswa.destroy', $siswa->id_siswa) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="8">Tidak ada data siswa.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
