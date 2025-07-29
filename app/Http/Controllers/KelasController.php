<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Guru;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with('wali')->get();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        $guru = Guru::all(); // untuk dropdown wali_kelas
        return view('kelas.create', compact('guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kelas' => 'required|unique:tb_kelas,id_kelas',
            'nama_kelas' => 'required',
            'tingkat_kelas' => 'required|in:Kelas 10,Kelas 11,Kelas 12',
            'jurusan' => 'required',
            'wali_kelas' => 'required|exists:tb_guru,id_guru',
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $guru = Guru::all();
        return view('kelas.edit', compact('kelas', 'guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'tingkat_kelas' => 'required|in:Kelas 10,Kelas 11,Kelas 12',
            'jurusan' => 'required',
            'wali_kelas' => 'required|exists:tb_guru,id_guru',
        ]);

        Kelas::where('id_kelas', $id)->update($request->except(['_token', '_method']));

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diperbarui');
    }

    public function destroy($id)
    {
        Kelas::where('id_kelas', $id)->delete();
        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus');
    }

    public function wali()
{
    return $this->belongsTo(Guru::class, 'wali_kelas', 'id_guru');
}

}
