<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\alert;

class userController extends Controller
{

    public function addUser(){
        return view('admin.crud.addUser', [
        'user' => User::all()
        ]);
    }

    public function storeUser(Request $request)
    {
        $validateData = $request->validate([
            "username" => "required|string",
            "password" => "required|string",
        ]);

        User::create([
            "username" => $validateData["username"],
            "password" => Hash::make($validateData["password"]),
        ]);
        return redirect()->route('admin.user')->with('Success', 'Data user berhasil di tambahkan!');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user')->with( alert('Data User Berhasil Dihapus',)
        );
    }
}
