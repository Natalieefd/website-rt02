<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kknunmul extends Model
{
    use HasFactory;
    protected $table = 'kknunmuls';
    protected $fillable = ['id', 'namaProker', 'pj', 'deskripsiProker', 'fotoProker'];
}
