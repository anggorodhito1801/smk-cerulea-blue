<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $kelasList = \App\Models\Kelas::all(); // untuk dropdown filter
    $query = Siswa::query();

    if ($request->has('kelas') && $request->kelas != '') {
        $query->where('id_kelas', $request->kelas);
    }

    $siswaList = $query->get();

    return view('siswa.index', compact('siswaList', 'kelasList'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
{
    $kelasList = \App\Models\Kelas::all();
    return view('siswa.create', compact('kelasList'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required|unique:tb_siswa',
            'nama_siswa' => 'required',
            'nisn' => 'required',
            'alamat_siswa' => 'required',
            'jkel_siswa' => 'required',
            'tgl_siswa' => 'required',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id_siswa)
    {
    $siswa = Siswa::where('id_siswa', $id_siswa)->first();
    return view('siswa.edit', compact('siswa'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $id_siswa)
{
    $request->validate([
        'nama_siswa' => 'required',
        'nisn' => 'required|numeric',
        'id_kelas' => 'required',
        'alamat_siswa' => 'required',
        'jkel_siswa' => 'required|in:L,P',
        'tgl_siswa' => 'required|date',
    ]);

    Siswa::where('id_siswa', $id_siswa)->update([
        'nama_siswa' => $request->nama_siswa,
        'nisn' => $request->nisn,
        'id_kelas' => $request->id_kelas,
        'alamat_siswa' => $request->alamat_siswa,
        'jkel_siswa' => $request->jkel_siswa,
        'tgl_siswa' => $request->tgl_siswa,
    ]);

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
public function destroy($id_siswa)
{
    Siswa::where('id_siswa', $id_siswa)->delete();
    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
}

}
