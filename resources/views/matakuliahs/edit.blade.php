@extends('layout.app')

@section('title', 'Edit Data Mata Kuliah')

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
  
          <form action="/matakuliah/{{ $matkul['id'] }}" method="post">
            @csrf
            @method('PUT')
              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama_matakuliah" aria-describedby="emailHelp" value="{{ old('nama_matakuliah') ? old('nama_matakuliah') : $matkul['nama_matakuliah'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="sks" aria-describedby="emailHelp" value="{{ old('sks') ? old('sks') : $matkul['sks'] }}">
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