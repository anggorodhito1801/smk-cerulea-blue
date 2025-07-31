@extends('layouts.main')
@section('content')
<div class="container">
    
    <h4>Tambah Kelas</h4>
    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>ID Kelas</label>
            <input type="text" name="id_kelas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tingkat Kelas</label>
            <select name="tingkat_kelas" class="form-control" required>
                <option value="Kelas 10">Kelas 10</option>
                <option value="Kelas 11">Kelas 11</option>
                <option value="Kelas 12">Kelas 12</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Wali Kelas</label>
            <select name="wali_kelas" class="form-control" required>
                @foreach ($guru as $g)
                    <option value="{{ $g->id_guru }}">{{ $g->nama_guru }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
