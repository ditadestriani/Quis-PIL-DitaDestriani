@extends('layout.app')

@section('title', 'Tambah Data Mahasiswa')

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
  
          <form action="/mahasiswas" method="post">
            @csrf
              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama_mahasiswa" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">no_tlp</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="no_tlp" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
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