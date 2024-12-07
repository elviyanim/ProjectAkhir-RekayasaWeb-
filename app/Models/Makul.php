<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    // Tambahkan atribut yang bisa diisi secara mass assignment
    protected $fillable = [
        'kode',      // kode matkul
        'nama',     // Nama mata kuliah
        'sks',    // Jumlah sks
    ];
}
