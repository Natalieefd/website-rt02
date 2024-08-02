<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\Request;

class kegiatanController extends Controller
{

    public function tambah(){
        return view('admin.crud.add', [
        'kegiatan' => kegiatan::all()
        ]);
    }
}
