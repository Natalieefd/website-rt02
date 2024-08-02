<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggotaKepengurusan extends Model
{
    use HasFactory;

    protected $table = 'anggotakepengurusan';
    protected $fillable = ['id', 'namaAnggota', 'jabatanAnggota', 'fotoAnggota'];
}
