<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

            $user = User::find(auth()->user()->id);

            if($user->hasRole('tamu')) {
                return redirect()->intended('/')->with('success', 'Anda berhasil login! Selamat datang kembali ' . auth()->user()->name);
            } else if($user->hasRole('resepsionis')) {
                return redirect()->intended('/resepsionis')->with('success', 'Anda berhasil login! Selamat datang kembali ' . auth()->user()->name);
            } else if($user->hasRole('admin')) {
                return redirect()->intended('/kelola_kamar')->with('success', 'Anda berhasil login! Selamat datang kembali ' . auth()->user()->name);
            }
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/')->with('success', 'Anda berhasil logout!');
    }
}
