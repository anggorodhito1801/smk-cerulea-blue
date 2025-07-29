@extends('layouts.app')
@section('content')
<div class="container">
    <div id="root"></div> @vite(['resources/js/app.jsx'])
    <h4>Edit Data Kelas</h4>
    <form action="{{ route('kelas.update', $kelas->id_kelas) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>ID Kelas</label>
            <input type="text" name="id_kelas" class="form-control" value="{{ $kelas->id_kelas }}" readonly>
        </div>

        <div class="mb-3">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}" required>
        </div>

        <div class="mb-3">
            <label>Tingkat Kelas</label>
            <select name="tingkat_kelas" class="form-control" required>
                <option value="Kelas 10" {{ $kelas->tingkat_kelas == 'Kelas 10' ? 'selected' : '' }}>Kelas 10</option>
                <option value="Kelas 11" {{ $kelas->tingkat_kelas == 'Kelas 11' ? 'selected' : '' }}>Kelas 11</option>
                <option value="Kelas 12" {{ $kelas->tingkat_kelas == 'Kelas 12' ? 'selected' : '' }}>Kelas 12</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $kelas->jurusan }}" required>
        </div>

        <div class="mb-3">
            <label>Wali Kelas</label>
            <select name="wali_kelas" class="form-control" required>
                @foreach ($guru as $g)
                    <option value="{{ $g->id_guru }}" {{ $kelas->wali_kelas == $g->id_guru ? 'selected' : '' }}>
                        {{ $g->nama_guru }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
