<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\Request;

class kegiatanController extends Controller
{

    public function addKegiatan(){
        return view('admin.crud.addKegiatan', [
        'kegiatan' => kegiatan::all()
        ]);
    }

    public function storeKegiatan(Request $request)
    {
        $namaKegiatan = "";

        if ($request->fotoKegiatan) {
            $randomNum = mt_rand(1000, 9999);
            $filename = $request->fotoKegiatan->getClientOriginalName();

            $x = explode('.', $filename);
            $ekstensi = strtolower(end($x));
            $namaKegiatan = $randomNum . "." . $ekstensi;
            $request->fotoKegiatan->move("assets/", $namaKegiatan);
        }

        $validateData = $request->validate([
            "namaKegiatan" => "required|string|max:50",
        ]);

        kegiatan::create([
            "namaKegiatan" => $validateData["namaKegiatan"],
            "fotoKegiatan" => $namaKegiatan,
        ]);
        return redirect()->route('admin.kegiatan')->with('Success', 'Data Kegiatan berhasil di tambahkan!');
    }

    public function editKegiatan($id)
    {
        return view('admin.crud.editKegiatan', [
            'kegiatan' => kegiatan::all()
                ->where('id', $id)
                ->first()
        ]);
    }

    public function updateKegiatan(Request $request, $id)
    {
        $kegiatan = kegiatan::find($id);

        if ($request->fotoKegiatan) {
            if ($kegiatan->fotoKegiatan != ''  && $kegiatan->fotoKegiatan != null) {
                $gambar_old = public_path('assets/' . $kegiatan->fotoKegiatan);
                unlink($gambar_old);
            }

            $path = public_path() . '/assets/';
            $file = $request->fotoKegiatan;
            $filename = $file->getClientOriginalName();
            $request->fotoKegiatan->move($path, $filename);
        }

        $request->validate([
            "namaKegiatan" => "required|string|max:50",
        ]);

        $kegiatan = kegiatan::findOrFail($id);
        $kegiatan->update([
            "namaKegiatan" => $request["namaKegiatan"],
            "fotoKegiatan" => $filename,
        ]);
        return redirect()->route('admin.kegiatan')->with('success', 'Data Kegiatan Berhasil Diubah');
    }

    public function deleteKegiatan($id)
    {
        $kegiatan = kegiatan::findOrFail($id);
        $kegiatan->delete();

        return redirect()->route('admin.kegiatan')->with(
            'success',
            'Data Kegiatan Berhasil Dihapus',
        );
    }
}
