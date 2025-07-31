<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\UserCustom;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = UserCustom::where('username', $request->username)->first();

        if ($user && $user->pass === $request->password) {
            Session::put('login', true);
            Session::put('username', $user->username);
            Session::put('name', $user->nama);
            return redirect('/');
        }

        return redirect()->back()->withErrors(['login' => 'Username atau password salah.']);
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}
