@extends('layouts.app')
@section('content')
<div class="container">
    <div id="root"></div> @vite(['resources/js/app.jsx'])
    <h3>Edit Data Siswa</h3>
    <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>ID Siswa</label>
            <input type="text" name="id_siswa" class="form-control" value="{{ $siswa->id_siswa }}" disabled>
        </div>

        <div class="mb-3">
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" value="{{ $siswa->nama_siswa }}">
        </div>

        <div class="mb-3">
            <label>NISN</label>
            <input type="number" name="nisn" class="form-control" value="{{ $siswa->nisn }}">
        </div>

        <div class="mb-3">
            <label>ID Kelas</label>
            <input type="text" name="id_kelas" class="form-control" value="{{ $siswa->id_kelas }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat_siswa" class="form-control">{{ $siswa->alamat_siswa }}</textarea>
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jkel_siswa" class="form-control">
                <option value="L" {{ $siswa->jkel_siswa == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="P" {{ $siswa->jkel_siswa == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_siswa" class="form-control" value="{{ $siswa->tgl_siswa }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
