<?php

namespace App\Http\Controllers;

use App\Models\anggotaKepengurusan;
use Illuminate\Http\Request;

class kepengurusanController extends Controller
{

    public function addKepengurusan(){
        return view('admin.crud.addKepengurusan', [
        'anggotaKepengurusan' => anggotaKepengurusan::all()
        ]);
    }

    public function storeKepengurusan(Request $request)
    {
        $namaAnggota = "";

        if ($request->fotoAnggota) {
            $randomNum = mt_rand(1000, 9999);
            $filename = $request->fotoAnggota->getClientOriginalName();

            $x = explode('.', $filename);
            $ekstensi = strtolower(end($x));
            $namaAnggota = $randomNum . "." . $ekstensi;
            $request->fotoAnggota->move("assets/", $namaAnggota);
        }

        $validateData = $request->validate([
            "namaAnggota" => "required|string|max:50",
            "jabatanAnggota" => "required|string|max:50",
        ]);

        anggotaKepengurusan::create([
            "namaAnggota" => $validateData["namaAnggota"],
            "jabatanAnggota" => $validateData["jabatanAnggota"],
            "fotoAnggota" => $namaAnggota,
        ]);
        return redirect()->route('admin.kepengurusan')->with('Success', 'Data Anggota Kepengurusan berhasil di tambahkan!');
    }

    public function editKepengurusan($id)
    {
        return view('admin.crud.editKepengurusan', [
            'anggotaKepengurusan' => anggotaKepengurusan::all()
                ->where('id', $id)
                ->first()
        ]);
    }

    public function updateKepengurusan(Request $request, $id)
    {
        $anggotaKepengurusan = anggotaKepengurusan::find($id);

        if ($request->fotoAnggota) {
            if ($anggotaKepengurusan->fotoAnggota != ''  && $anggotaKepengurusan->fotoAnggota != null) {
                $gambar_old = public_path('assets/' . $anggotaKepengurusan->fotoAnggota);
                unlink($gambar_old);
            }

            $path = public_path() . '/assets/';
            $file = $request->fotoAnggota;
            $filename = $file->getClientOriginalName();
            $request->fotoAnggota->move($path, $filename);
        }

        $request->validate([
            "namaAnggota" => "required|string|max:50",
            "jabatanAnggota" => "required|string|max:50",
        ]);

        $anggotaKepengurusan = anggotaKepengurusan::findOrFail($id);
        $anggotaKepengurusan->update([
            "namaAnggota" => $request["namaAnggota"],
            "jabatanAnggota" => $request["jabatanAnggota"],
            "fotoAnggota" => $filename,
        ]);
        return redirect()->route('admin.kepengurusan')->with('success', 'Data Anggota Kepengurusan Berhasil Diubah');
    }

    public function deleteKepengurusan($id)
    {
        $anggotaKepengurusan = anggotaKepengurusan::findOrFail($id);
        $anggotaKepengurusan->delete();

        return redirect()->route('admin.kepengurusan')->with(
            'success',
            'Data Anggota Kepengurusan Berhasil Dihapus',
        );
    }
}
