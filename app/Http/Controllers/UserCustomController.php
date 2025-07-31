<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCustom;

class UserCustomController extends Controller
{
    public function index()
    {
        $data = UserCustom::all();
        return view('user.index', compact('data'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:tb_user',
            'nama' => 'required',
            'email' => 'required|email',
            'pass' => 'required'
        ]);

        UserCustom::create($request->all());
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    public function edit($username)
    {
        $user = UserCustom::findOrFail($username);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $username)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pass' => 'required'
        ]);

        $user = UserCustom::findOrFail($username);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success', 'User berhasil diupdate');
    }

    public function destroy($username)
    {
        $user = UserCustom::findOrFail($username);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}
