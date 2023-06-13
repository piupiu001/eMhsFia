@extends('layouts/main')
@section('title','mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="card-header">
       {{-- BUTTON TAMBAH MAHASISWA --}}
        <a href="/mahasiswa/formtambah" class="btn btn-dark" role="button"><i class="bi bi-plus-circle-fill"></i> Mahasiswa</a>
        {{-- BUTTON CARI MAHASISWA --}}
        <form action = '/mahasiswa/pencarian' method='GET' class="form-inline my-2 my-lg-0 float-right">
            <input name='q' class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
          </form>
    </div>
    {{-- ALERT PEMBERITAHUAN CRUD --}}
    <div class="card-body">
      {{--  Alerts --}}
      @if (session('flash_success')) {{--flash itu nama objek --}}
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('flash_success') }}</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      @if (session('flash_update')) {{--flash itu nama objek --}}
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('flash_update') }}</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      @if (session('flash_delete')) {{--flash itu nama objek --}}
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('flash_delete') }}</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      {{-- TABEL MAHASISWA --}}
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Progam Studi</th>
                <th scope="col">Minat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                
                {{-- LOOPING DATA UNTUK READ (DAFTAR MAHASISWA) --}}
                @foreach ($mhs as $idx =>$data)
                <tr>
                    <th scope="row">{{ $mhs->firstItem() + $idx}}</th>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->prodi }}</td>
                    <td>{{ $data->minat }}</td>
                    <td>
                      <a href="/mahasiswa/formedit/{{ $data->id }}" class="btn btn-success" role='button'><i class="bi bi-pencil-square"></i></a>
                      <a href="/mahasiswa/delete/{{ $data->id }}" class="btn btn-delete" role='button'><i class="bi bi-trash3-fill"></i></a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <span class="float-right">{{ $mhs->links() }}</span>
    </div>
</div>
@endsection   