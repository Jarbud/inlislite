@extends('adminlte::page')

@section('title', 'Verifikasi Anggota')

@section('content_header')
    <h1>Verifikasi Anggota</h1>
@stop

@section('content')
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                  </div>
              @endif
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Identitas</th>
                    <th>Jenis Kelamin</th>
                    <!-- <th>Tempat,Tanggal Lahir</th> -->
                    <th>No HP</th>
                    <th>Instansi</th>
                    <th>Agama</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($results as $verify)
                    
                    <tr>
                        <td>{{ ++$no }}</td>
                        <!-- <td><a href="{{ route('usermanagement.edit',$verify->_id) }}">{{ $verify->Fullname }}</a></td> -->
                        <td>{{ $verify->Fullname }}</td>
                        <td>{{ $verify->email }}</td>
                        <td>{{ $verify->jenis_identitas[0]->Nama }} : {{ $verify->IdentityNo }}</td>
                        <td>{{ $verify->jenis_kelamin[0]->Name }}</td>
                        <!-- <td>{{ $verify->PlaceOfBirth }},{{ $verify->DateOfBirth }}</td> -->
                        <td>{{ $verify->NoHp }}</td>
                        <td>{{ $verify->InstitutionName }}</td>
                        <td>{{ $verify->agama[0]->Name }}</td>
                        <td>
                          @if($verify->HasVerified == "true")
                            <span class="badge bg-success">Diterima</span>
                          @elseif($verify->HasVerified == "decline")
                            <span class="badge bg-danger">Ditolak</span>
                          @else
                            <a class="btn btn-primary" href="{{ route('updateStatusVerifyAnggota',[$verify->_id,$verify->email,'accept']) }}">Diterima</a>
                            <a class="btn btn-danger" href="{{ route('updateStatusVerifyAnggota',[$verify->_id,$verify->email,'decline']) }}">Ditolak</a>
                          @endif
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css" />
    <style>

    </style>
@stop



@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
  });
  
</script>
@stop