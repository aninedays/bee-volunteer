<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    //Menampilkan halaman sign in
    public function index()
    {
        return view('signin', [
            'title' => 'Sign In'
        ]);
    }

    //Melakukan authentication dengan validasi email dan pass
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'user_email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-charity');
        }

        return back()->with('signinError', 'Sign In failed');
    }

    //Fungsi untuk Sign Out
    public function signout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
        return redirect('/signin');
    }
}
