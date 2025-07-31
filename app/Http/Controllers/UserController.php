<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCustom;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
{
    $data = UserCustom::all();
    return view('user.index', compact('data'));

        if (!Session::get('login')) {
        return redirect('/login')->with('login_required', 'Silakan login terlebih dahulu.');
    }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'username' => 'required|unique:tb_user,username',
            'nama' => 'required',
            'email' => 'required|email',
            'pass' => 'required'
        ]);

        UserCustom::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'pass' => bcrypt($request->pass)
        ]);
         return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $user = UserCustom::where('username', $username)->firstOrFail();
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $username)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
        ]);

        $user = UserCustom::where('username', $username)->firstOrFail();
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'pass' => $request->pass ? bcrypt($request->pass) : $user->pass
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        $user = UserCustom::where('username', $username)->firstOrFail();
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}
