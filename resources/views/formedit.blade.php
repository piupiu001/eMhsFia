@extends('layouts/main')
@section('title','mahasiswa')
@section('content')
@section('content')
<div class="card mt-4">
    <div class="card-header"></div>
    <div class="card-body">
        @php
            $minat = explode(',',$mhs->minat) //memecah value dari minat
        @endphp
        <form action="/mahasiswa/update/{{ $mhs->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
              <label>NIM</label>                                    {{--  mengambil data nilai dari atribut nim di mhs & hanya dpt dibaca--}}
              <input type="number" name="nim" class="form-control" value='{{ $mhs->nim }}' readonly>
            </div>

            <div class="form-group">
              <label>Nama Mahasiswa</label>                         {{--  mengambil data nilai dari atribut nim di mhs--}}
              <input type="text" name="nama" class="form-control" value='{{ $mhs->nama }}'>
            </div>

            <label>Gender</label>
            <div class="form-check">                                            {{--  jika Laki-Laki= maka checked , jika bukan maka di kosongkan--}}
              <input type="radio"name="gender" value="Laki-Laki" class="form-check-input" {{ ($mhs->gender == 'Laki-Laki')?'checked':'' }} >
              <label>Laki-Laki</label>
            </div>

            <div class="form-check">                                            {{--  jika Laki-Laki= maka checked , jika bukan maka di kosongkan--}}
              <input type="radio"name="gender" value="Perempuan" class="form-check-input" {{ ($mhs->gender == 'Perempuan')?'checked':'' }} >
              <label>Perempuan</label>
            </div>

            <div class="form-group">
                <label>Pogram Studi</label>
                <select name="prodi" class="form-control">
                    <option value="0">Pilih Program Studi</option>
                    <option value="Sistem Informasi" {{ ($mhs->prodi=='Sistem Informasi'?'selected':'') }}>Sistem Informasi</option>
                    <option value="Informatika"{{ ($mhs->prodi=='Informatika'?'selected':'') }}>Informatika</option>
                    <option value="Teknik Komputer"  {{ ($mhs->prodi=='Teknik Komputer'?'selected':'') }}>Teknik Komputer</option>
                </select>
            </div>

              <label>Minat</label>
              <div class="form-check">
                <input type="checkbox" name="minat[]" value="ai" class="form-check-input" {{ in_array('ai',$minat)?'checked':''}}>
                <label>Artificial Intelegent</label>
              </div>

              <div class="form-check">
                <input type="checkbox"name="minat[]" value="ds" class="form-check-input" {{ in_array('ds',$minat)?'checked':''}}>
                <label>Developper Sistem</label>
              </div>

              <div class="form-check">
                <input type="checkbox"name="minat[]" value="web" class="form-check-input" {{ in_array('web',$minat)?'checked':''}}>
                <label>Website Developer</label>
              </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
          </form>
    </div>
</div>
@endsection