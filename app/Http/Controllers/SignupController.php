<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    //Menampilkan halaman Sign Up
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        // $user = User::create([
        //     'user_name' => $request->user_name,
        //     'user_email' => $request->user_email,
        //     'password' => $request->password,
        //     'user_address' => $request->user_address,
        //     'user_phone' => $request->user_phone,
        //     'user_dob' => $request->user_dob,
        // ]);

        // $user['password'] = Hash::make($user['password']);

        // if ($user) {
        //     //redirect dengan pesan sukses
        //     return redirect('/signin')->with(['success', 'Your account has been registered! Please Sign In']);
        // } else {
        //     //redirect dengan pesan error
        //     return redirect('/signup')->with(['error' => 'Try Again']);
        // }

        $validatedData = $request->validate([
            'user_name' => 'required|max:100',
            'user_email' => 'required|unique:users',
            'password' => 'required|min:3',
            'user_address' => 'required',
            'user_phone' => 'required',
            'user_dob' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/signin')->with('success', 'Your account has been registered! Please Sign In');
    }
}
