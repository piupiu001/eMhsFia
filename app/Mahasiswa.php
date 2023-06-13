<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table ='mahasiswa'; //Enkapsulasi akses modifier

    //berfungsi untuk memilih atribut mana saja yang akan dapat di CRUD
    protected $fillable =[
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat'
    ];

}
