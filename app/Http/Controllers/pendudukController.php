<?php

namespace App\Http\Controllers;

use App\Models\penduduk;
use Illuminate\Http\Request;

class pendudukController extends Controller
{

    public function addPenduduk(){
        return view('admin.crud.addPenduduk', [
        'penduduk' => penduduk::all()
        ]);
    }
    public function storePenduduk(Request $request)
    {
        $validateData = $request->validate([
            "perempuan" => "required|string",
            "lakilaki" => "required|string",
        ]);

        penduduk::create([
            "perempuan" => $validateData["perempuan"],
            "lakilaki" => $validateData["lakilaki"],
        ]);
        return redirect()->route('admin.penduduk')->with('Success', 'Data penduduk berhasil di tambahkan!');
    }
}
