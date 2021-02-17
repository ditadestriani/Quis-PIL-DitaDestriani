@extends('layout.app')

@section('title', 'Tambah Data Jadwal')

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
  
          <form action="/jadwals" method="post">
            @csrf
              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Jadwal</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="jadwal" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">MatakuliahID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="matakuliah_id" aria-describedby="emailHelp">
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