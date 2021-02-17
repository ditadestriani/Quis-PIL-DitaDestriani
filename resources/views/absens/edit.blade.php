@extends('layout.app')

@section('title', 'Edit Data Absen')

@section('content')
<!-- DataTales Example -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
          </div>

          <!-- Content Row -->
          <div class="row">
          </div>
          <!-- /.container-fluid -->
  
          <form action="/absens/{{ $abs['id'] }}" method="post">
            @csrf
            @method('PUT')
              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Waktu Absen</label>
                <div class="col-sm-10">
                <input type="time" class="form-control" id="exampleInputEmail1" name="waktu_absen" aria-describedby="emailHelp" value="{{ old('waktu_absen') ? old('waktu_absen') : $abs['waktu_absen'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Mahasiswa ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="mahasiswa_id" aria-describedby="emailHelp" value="{{ old('mahasiswa_id') ? old('mahasiswa_id') : $abs['mahasiswa_id'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Mata Kuliah ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="matakuliah_id" aria-describedby="emailHelp" value="{{ old('matakuliah_id') ? old('matakuliah_id') : $abs['matakuliah_id'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="keterangan" id="exampleInputPassword1" value="{{ old('keterangan') ? old('keterangan') : $abs['keterangan'] }}">
                </div>
              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
  


      </div>
    </form>
    </div>
  </div>
</div>