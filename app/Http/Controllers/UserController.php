<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::latest()->paginate(10);
        return view('dashboard.user.index')->with('user', $user);
    }

    //Menghapus Data
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        if ($user) {
            //redirect dengan pesan sukses
            return redirect('/dashboard-user')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect('/dashboard-user')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    //Menampilkan halaman edit
    public function edit($id)
    {
        $user = User::all();
        $user = User::findOrFail($id);
        return view('dashboard.user.edit', compact('user'));
    }

    //Untuk melakukan edit data
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'user_email' => 'required',
            'user_role' => 'required',
            'user_address' => 'required',
            'user_phone' => 'required',
            'user_dob' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_role' => $request->user_role,
            'user_address' => $request->user_address,
            'user_phone' => $request->user_phone,
            'user_dob' => $request->user_dob,
        ]);

        if ($user) {
            //redirect dengan pesan sukses
            return redirect('/dashboard-user')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect('/dashboard-user')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
