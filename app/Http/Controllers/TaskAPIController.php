<?php

namespace App\Http\Controllers;
use App\Task; //IMPORT LIBRAY

use Illuminate\Http\Request;

class TaskAPIController extends Controller
{
    public function read(){
        $task=Task::all();
        return response()->json(
            [
                'Succes' => true,
                'messange' =>"data berhasil di tampilkan",
                'data' => $task
            ],200 //KODE RESPONDE 
        );
    }

    public function create(request  $req){ //req= untuk mengambil semua name pada Sform tambah
        $task= Task::create([
            //TABEL DATA BASE => $req-> NAME DI ATRIBUT FORM
            'nama'=>$req->nama,
            'judul_task'=>$req->judul,
            'deskripsi_task'=>$req->deskripsi
        ]);

        if ($task){
            return response()->json(
                [
                    'Succes' => true,
                    'messange' =>"data berhasil di tambahkan"
                ],200 //KODE RESPONDE BERHASIL
            );
        }else{
            return response()->json(
                [
                    'Gagal' => false,
                    'messange' =>"data gagal di tambahkan"
                ],400 //KODE RESPONDE GAGAL
            );
        }
        
    }

    public function update($id, Request $req){
        $task = Task::find($id)->update([
            //TABEL DATA BASE => $req-> NAME DI ATRIBUT FORM
            'nama'=>$req->nama,
            'judul_task'=>$req->judul,
            'deskripsi_task'=>$req->deskripsi
        ]);
        if ($task){
            return response()->json(
                [
                    'Succes' => true,
                    'messange' =>"data berhasil di ubah"
                ],200 //KODE RESPONDE BERHASIL
            );
        }else{
            return response()->json(
                [
                    'Gagal' => false,
                    'messange' =>"data gagal di ubah"
                ],400 //KODE RESPONDE GAGAL
            );
        }

    }

    public function delete($id){
        $task = Task::find($id);
        $task->delete();

        if ($task){
            return response()->json(
                [
                    'Succes' => true,
                    'messange' =>"data berhasil di hapus"
                ],200 //KODE RESPONDE BERHASIL
            );
        }else{
            return response()->json(
                [
                    'Gagal' => false,
                    'messange' =>"data gagal di hapus"
                ],400 //KODE RESPONDE GAGAL
            );
        }
    }
}
