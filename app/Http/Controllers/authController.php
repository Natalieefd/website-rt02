<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function loginAction(Request $request) {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            if(Auth::user()->username == $request->username) {
                return redirect('/admin/dashboard');
            }
            return redirect('/');
        } else {
            // Tampilkan pesan kesalahan jika otentikasi gagal
            $request->session()->$request->session()->flash('key', 'Username atau Password anda salah!');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
