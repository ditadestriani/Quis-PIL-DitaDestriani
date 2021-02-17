@extends('layout.app')

@section('title', 'Absensi')

@section('content')
<!-- DataTales Example -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus fa-sm text-white-50"></i>
              Tambah
            </button> 
          </div>

          <!-- Content Row -->
          <div class="row">
          </div>
          <!-- /.container-fluid -->
  
        
  

<div class="card shadow mb-4">
            <div class="card-header py-3">  
              <h6 class="m-0 font-weight-bold text-primary">Data Absensi Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Waktu Absen</th>
                      <th>Mahasiswa ID</th> 
                      <th>Mata Kuliah ID </th>
                      <th>Keterangan</th>
                    </tr>
                <tbody>
                  @foreach($absens as $abs)
                  <tr>

                    <td> {{ $abs['waktu_absen'] }} </td>
                    <td> {{ $abs['mahasiswa_id'] }} </td>
                    <td> {{ $abs['matakuliah_id'] }} </td>
                    <td> {{ $abs['keterangan'] }} </td>
                  
                  </tr>
                  @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>

          </div>
        <!-- End of Main Content -->

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/absens" method="POST">

          @csrf

      <div class="modal-body">
      <div class="form-group">
                                <label class="font-weight-bold">Waktu Absen</label>
                                <input type="time" class="form-control @error('waktu_absen') is-invalid @enderror" name="waktu_absen" value="{{ old('waktu_absen') }}">
                            
                                <!-- error message untuk waktu_absen -->
                                @error('waktu_absen')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                            <label class="font-weight-bold">Mahasiswa ID</label>
                                <select name="mahasiswa_id" class="form-control">
                                        <option value="">- Pilih -</option>
                                            <option value="2018114023"> 2018114023 </option>
                                            <option value="2018114024"> 2018114024 </option>
                                            <option value="2018114026"> 2018114026 </option>
                                            <option value="2018114030"> 2018114030 </option>
                                            <option value="2018114031"> 2018114031 </option>
                                            <option value="2018114033"> 2018114033 </option>
                                            <option value="2018114036"> 2018114036 </option>
                                            <option value="2018114939"> 2018114939 </option>
                                    </select>
                            
                                <!-- error message untuk MATAKULIAH -->
                                @error('matakuliah_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Matakuliah</label>
                                <select name="matakuliah_id" class="form-control">
                                        <option value="">- Pilih -</option>
                                            <option value="egovernment"> egovernment </option>
                                            <option value="rekayasa perangkat lunak"> rekayasa perangkat lunak </option>
                                            <option value="student exchange (fotografi)"> ERP Terapan 1 </option>
                                            <option value="audit sistem informasi"> audit sistem informasi </option>
    
                                            <option value="Manajemen Keamanan Sistem Informasi"> Manajemen Keamanan Sistem Informasi </option>
                                            <option value="Student Exchange (Fotografi)"> Student Exchange (Fotografi) </option>
                                            <option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat Lunak </option>
                                            <option value="jaringan komputer"> jaringan komputer </option>
                                    </select>
                            
                                <!-- error message untuk MATAKULIAH -->
                                @error('matakuliah_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Keterangan</label>
                                <select name="keterangan" class="form-control">
                                            <option value="">- Pilih -</option>
                                            <option value="Hadir"> Hadir </option>
                                            <option value="Tidak Hadir"> Tidak hadir </option>
                                    </select>
                                <!-- error message untuk keterangan -->
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
       
      </div>
      </div> 
    </form>
    </div>
  </div>
</div>
@endsection