<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mahasiswa; //Import library mahasiswa

class PageController extends Controller
{
    public function home(){
        return view('home',['key'=>'home']);
    }
    public function profile(){
        return view('profile',['key'=>'profile']);
    }
    public function mahasiswa(){
        $mhs = Mahasiswa::paginate(5); //Mahasiswa --> model & munculkan 5 data 
        return view('mahasiswa',['key'=>'mahasiswa','mhs'=>$mhs]); //sedang aktif di mahasiswa kemudian -->Kirimkan data ke $mhs
    }

    public function pencarian(request  $req){
        $cari = $req->q;
        // data hasil pencarian
        $mhs=Mahasiswa::where('nama','like','%'.$cari.'%')->paginate(5);
        $mhs-> appends($req->all()); //mempertahankan halaman hasil pencarian 
        return view('mahasiswa',['key'=>'mahasiswa','mhs'=>$mhs]); //memunculkan data

    }
    public function tambah(){
        return view('formtambah',['key'=>'mahasiswa']);
    }
    public function simpan(request  $req){
        //menjadikan 1 value array (minat) menjadi string, supaya bisa disimpan di database. 
        $minat= implode(',',$req->get('minat'));
        // mengambil variable di form
        Mahasiswa::create([
            'nim'=>$req->nim,
            'nama'=>$req->nama,
            'gender'=>$req->gender,
            'prodi'=>$req->prodi,
            'minat'=>$minat
        ]);
        return redirect('mahasiswa')->with('flash_success','Data Berhasil Disimpan');
        //supaya kembali kehalaman mahasiswa
    }

    public function edit($id){
        $mhs = Mahasiswa::find($id);
        return view ('formedit',['key'=>'mahasiswa','mhs'=>$mhs]); // mengambil data sesuai dengan id-nya
    }

    public function update($id, Request $request){
        $minat= implode(',',$request->get('minat'));
        $mhs = Mahasiswa::find($id);

        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
        $mhs->save();
        return redirect('mahasiswa')->with('flash_update','Data Berhasil Diubah');
    }
    public function delete($id){
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        return redirect('mahasiswa')->with('flash_delete','Data Berhasil Dihapus');
    }
    public function contact(){
        return view('contact',['key'=>'contact']);
    }
}
