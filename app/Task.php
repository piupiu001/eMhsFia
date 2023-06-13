<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table ='task'; //Enkapsulasi akses modifier

    //berfungsi untuk memilih atribut mana saja yang akan dapat di CRUD
    protected $fillable =[
        'nama',
        'judul_task',
        'deskripsi_task'
    ];
}
