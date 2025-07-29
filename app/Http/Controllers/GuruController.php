<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_guru' => 'required|unique:tb_guru,id_guru',
            'nama_guru' => 'required',
            'nip' => 'required|numeric',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'mapel_ampu' => 'required',
            'jkel_guru' => 'required',
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required|numeric',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'mapel_ampu' => 'required',
            'jkel_guru' => 'required',
        ]);

        Guru::where('id_guru', $id)->update($request->except(['_token', '_method']));

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diupdate');
    }

    public function destroy($id)
    {
        Guru::where('id_guru', $id)->delete();
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus');
    }

    public function kelas()
{
    return $this->hasMany(Kelas::class, 'wali_kelas', 'id_guru');
}

}