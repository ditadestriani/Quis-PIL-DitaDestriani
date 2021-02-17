@extends('layout.app')

@section('title', 'Edit Data Mahasiswa')

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
  
          <form action="/mahasiswas/{{ $mhs['id'] }}" method="post">
            @csrf
            @method('PUT')
              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama_mahasiswa" aria-describedby="emailHelp" value="{{ old('nama_mahasiswa') ? old('nama_mahasiswa') : $mhs['nama_mahasiswa'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" aria-describedby="emailHelp" value="{{ old('alamat') ? old('alamat') : $mhs['alamat'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="no_tlp" aria-describedby="emailHelp" value="{{ old('no_tlp') ? old('no_tlp') : $mhs['no_tlp'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ old('email') ? old('email') : $mhs['email'] }}">
                </div>
              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
  


      </div>
    </form>
    </div>
  </div>
</div>
@endsection