<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(auth()->user()->role_id == 3) {
                return redirect()->intended('/')->with('success_login', 'Anda berhasil login! Selamat datang kembali ' . auth()->user()->name);
            } else if(auth()->user()->role_id == 2) {
                return redirect()->intended('/resepsionis')->with('success_login', 'Anda berhasil login! Selamat datang kembali ' . auth()->user()->name);
            } else if(auth()->user()->role_id == 1) {
                return redirect()->intended('/kelola_kamar')->with('success_login', 'Anda berhasil login! Selamat datang kembali ' . auth()->user()->name);
            }
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/')->with('success_logout', 'Anda berhasil logout!');
    }
}
