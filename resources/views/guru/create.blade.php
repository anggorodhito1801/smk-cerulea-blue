@extends('layouts.main')
@section('content')
<div class="container">

    <h4>Tambah Guru</h4>
    <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>ID Guru</label>
            <input type="text" name="id_guru" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NIP</label>
            <input type="number" name="nip" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mapel Diampu</label>
            <input type="text" name="mapel_ampu" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jkel_guru" class="form-control" required>
                <option value="">--Pilih--</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
