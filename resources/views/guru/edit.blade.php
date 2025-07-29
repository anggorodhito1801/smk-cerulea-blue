@extends('layouts.app')
@section('content')
<div class="container">
    <div id="root"></div> @vite(['resources/js/app.jsx'])
    <h4>Edit Guru</h4>
    <form action="{{ route('guru.update', $guru->id_guru) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" class="form-control" value="{{ $guru->nama_guru }}" required>
        </div>
        <div class="mb-3">
            <label>NIP</label>
            <input type="number" name="nip" class="form-control" value="{{ $guru->nip }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $guru->email }}" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $guru->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label>Mapel Diampu</label>
            <input type="text" name="mapel_ampu" class="form-control" value="{{ $guru->mapel_ampu }}" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jkel_guru" class="form-control" required>
                <option value="L" {{ $guru->jkel_guru == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="P" {{ $guru->jkel_guru == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
