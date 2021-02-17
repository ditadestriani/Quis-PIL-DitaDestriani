@extends('layout.app')

@section('title', 'Edit Data Kontrak Mata Kuliah')

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
  
          <form action="/kontrakmatakuliahs/{{ $mk['id'] }}" method="post">
            @csrf
            @method('PUT')
              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Mahasiswa ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="mahasiswa_id" aria-describedby="emailHelp" value="{{ old('mahasiswa_id') ? old('mahasiswa_id') : $mk['mahasiswa_id'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Semester ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="semester_id" aria-describedby="emailHelp" value="{{ old('semester_id') ? old('semester_id') : $mk['semester_id'] }}">
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