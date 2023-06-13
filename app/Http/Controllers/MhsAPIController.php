<?php

namespace App\Http\Controllers;
use App\Mahasiswa; //IMPORT LIBRAY
use Illuminate\Http\Request;

class MhsAPIController extends Controller
{
    public function read(){
        $mhs=Mahasiswa::all();
        return response()->json(
            [
                'Succes' => true,
                'messange' =>"data berhasil di tampilkan",
                'data' => $mhs
            ],200 //KODE RESPONDE 
        );
    }

    public function create(request  $req){ //req= untuk mengambil semua name pada Sform tambah
        $mhs= Mahasiswa::create([
            //TABEL DATA BASE => $req-> NAME DI ATRIBUT FORM
            'nim'=>$req->nim,
            'nama'=>$req->nama,
            'gender'=>$req->gender,
            'prodi'=>$req->prodi,
            'minat'=>$req->minat
        ]);

        if ($mhs){
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
        $mhs = Mahasiswa::find($id)->update([
            //TABEL DATA BASE => $req-> NAME DI ATRIBUT FORM
            'nim'=>$req->nim,
            'nama'=>$req->nama,
            'gender'=>$req->gender,
            'prodi'=>$req->prodi,
            'minat'=>$req->minat
        ]);
        if ($mhs){
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
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        if ($mhs){
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
