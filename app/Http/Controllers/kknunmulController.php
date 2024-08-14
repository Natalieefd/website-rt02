<?php

namespace App\Http\Controllers;

use App\Models\kknunmul;
use Illuminate\Http\Request;

class kknunmulController extends Controller
{

    public function addkknunmul(){
        return view('admin.crud.addKKNUnmul', [
        'kknunmul' => kknunmul::all()
        ]);
    }

    public function storekknunmul(Request $request)
    {
        $namaProker = "";

        if ($request->fotoProker) {
            $randomNum = mt_rand(1000, 9999);
            $filename = $request->fotoProker->getClientOriginalName();

            $x = explode('.', $filename);
            $ekstensi = strtolower(end($x));
            $namaProker = $randomNum . "." . $ekstensi;
            $request->fotoProker->move("assets/", $namaProker);
        }

        $validateData = $request->validate([
            "namaProker" => "required|string|max:50",
            "pj" => "required|string|max:50",
            "deskripsiProker" => "required|string|max:50",
        ]);

        kknunmul::create([
            "namaProker" => $validateData["namaProker"],
            "pj" => $validateData["pj"],
            "deskripsiProker" => $validateData["deskripsiProker"],
            "fotoProker" => $namaProker,
        ]);
        return redirect()->route('admin.kknunmul')->with('Success', 'Data proker berhasil di tambahkan!');
    }

    public function editkknunmul($id)
    {
        return view('admin.crud.editkknunmul', [
            'kknunmul' => kknunmul::all()
                ->where('id', $id)
                ->first()
        ]);
    }

    public function updatekknunmul(Request $request, $id)
    {
        $kknunmul = kknunmul::find($id);

        if ($request->fotoProker) {
            if ($kknunmul->fotoProker != ''  && $kknunmul->fotoProker != null) {
                $gambar_old = public_path('assets/' . $kknunmul->fotoProker);
                unlink($gambar_old);
            }

            $path = public_path() . '/assets/';
            $file = $request->fotoProker;
            $filename = $file->getClientOriginalName();
            $request->fotoProker->move($path, $filename);
        }

        $request->validate([
            "namaProker" => "required|string|max:50",
            "pj" => "required|string|max:50",
            "deskripsiProker" => "required|string|max:50",
        ]);

        $kknunmul = kknunmul::findOrFail($id);
        $kknunmul->update([
            "namaProker" => $request["namaProker"],
            "pj" => $request["pj"],
            "deskripsiProker" => $request["deskripsiProker"],
            "fotoProker" => $filename,
        ]);
        return redirect()->route('admin.kknunmul')->with('success', 'Data Proker Berhasil Diubah');
    }

    public function deletekknunmul($id)
    {
        $kknunmul = kknunmul::findOrFail($id);
        $kknunmul->delete();

        return redirect()->route('admin.kknunmul')->with(
            'success',
            'Data Proker Berhasil Dihapus',
        );
    }
}
