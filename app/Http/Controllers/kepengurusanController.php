<?php

namespace App\Http\Controllers;

use App\Models\anggotaKepengurusan;
use Illuminate\Http\Request;

class kepengurusanController extends Controller
{

    public function tambah(){
        return view('admin.crud.add', [
        'anggotaKepengurusan' => anggotaKepengurusan::all()
        ]);
    }
}
