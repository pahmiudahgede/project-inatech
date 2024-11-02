<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $role = Auth::user()->id_role;

            Alert::toast('Selamat Datang', 'success');

            if ($role == 1) {
                return redirect()->route('dashboard.index');
            } elseif ($role == 2) {
                return redirect()->route('admingudang');
            } elseif ($role == 3) {
                return redirect()->route('admintambak');
            }

            return redirect()->intended('/dashboard');
        }

        Alert::toast('Username atau Password Salah', 'error');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::toast('Berhasil Log Out', 'success');
        return redirect('/');
    }
}