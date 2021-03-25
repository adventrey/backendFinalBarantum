@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa</h1> 
    </div>
    <div class="card mt-3">
        <div class="card-header bg-success text-white">
          Daftar Mahasiswa
        </div>
        <div class="card-body">
          
          <table class="table table-bordered table-striped">
              <tr>
                  <th>No.</th>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Program Studi</th>
                  <th>Aksi</th>
              </tr>
              
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                      <a href="" class="btn btn-warning"> Edit </a>
                      <a href="" class="btn btn-warning"> Hapus</a>
                  </td>
              </tr>
          
          </table>
  
        </div>
      </div>
   

</div>
<!-- /.container-fluid -->
    
@endsection