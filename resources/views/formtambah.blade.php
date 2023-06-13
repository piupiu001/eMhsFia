@extends('layouts/main')
@section('title','mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/mahasiswa/simpan" method="POST">
            @csrf
            <div class="form-group w-25">
              <label>NIM</label>
              <input type="number" name="nim" class="form-control" placeholder="Masukan NIM">
            </div>

            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
            </div>

            <label>Gender</label>
            <div class="form-check">
              <input type="radio" name="gender" value="Laki-laki" class="form-check-input checked" >
              <label>Laki-laki</label>
            </div>

            <div class="form-check">
              <input type="radio"name="gender" value="Perempuan" class="form-check-input" >
              <label>Perempuan</label>
            </div>

            <div class="form-group">
                <label>Pogram Studi</label>
                <select name="prodi" class="form-control">
                    <option value="0">Pilih Program Studi</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                </select>
            </div>

              <label>Minat</label>
              <div class="form-check">
                <input type="checkbox" name="minat[]" value="ai" class="form-check-input" >
                <label>Artificial Intelegent</label>
              </div>

              <div class="form-check">
                <input type="checkbox"name="minat[]" value="ds" class="form-check-input" >
                <label>Developper Sistem</label>
              </div>

              <div class="form-check">
                <input type="checkbox"name="minat[]" value="web" class="form-check-input" >
                <label>Website Developer</label>
              </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
          </form>
    </div>
</div>
@endsection