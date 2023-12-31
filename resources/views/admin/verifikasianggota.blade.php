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
                    <!-- <th>Jenis Kelamin</th> -->
                    <!-- <th>Tempat,Tanggal Lahir</th> -->
                    <th>No HP</th>
                    <th>Instansi</th>
                    <!-- <th>Agama</th> -->
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
                        
                        <td>{{ $verify->NoHp }}</td>
                        <td>{{ $verify->InstitutionName }}</td>
                        <td>
                          @if($verify->HasVerified == "true")
                            <span class="badge bg-success">Diterima</span>
                          @elseif($verify->HasVerified == "decline")
                            <span class="badge bg-danger">Ditolak</span>
                          @else
                            <a class="btn btn-primary" href="{{ route('updateStatusVerifyAnggota',[$verify->_id,$verify->email,'accept']) }}">Diterima</a>
                            <!-- <a class="btn btn-danger" href="{{ route('updateStatusVerifyAnggota',[$verify->_id,$verify->email,'decline']) }}">Ditolak</a> -->
                            <a class="btn btn-danger" href="javascript:void(0)" id="show-kiadmin" data-url="{{ route('verifyshow', $verify->_id) }}">Ditolak</a>
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
<!-- Modal -->
<div class="modal fade" id="kiAdminshowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Karya Ilmiah Ditolak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Nama : <span id="kiadmin-nama"></span></p>
        <form id="formDitolak" action="{{ route('updateStatusVerifyKiDitolak') }}" method="GET" enctype="multipart/form-data">
                        @csrf    
        <div class="form-group">
            <label for="MsgDitolak" class="form-label mt-4">Catatan Ditolak Karena :</label>
            <textarea class="form-control" name="MsgDitolak" id="MsgDitolak" rows="3"></textarea>
        </div>
        <input type="hidden" id="kiAdminID" name="kiID" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-primary">Submit</button>
      </div>
    </form>
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
  $(document).ready(function () {
        
        /* When click show user */
         $('body').on('click', '#show-kiadmin', function () {
           var kiadminURL = $(this).data('url');
           $.get(kiadminURL, function (data) {
               $('#kiAdminshowModal').modal('show');
              //  $('#kiadmin-id').text(data._id);
               $('#kiadmin-nama').text(data.Fullname);
              //  $('#kiadmin-judul').text(data.Judul);
               $('#kiAdminID').val(data._id);
           })
        });
        
     });
</script>
@stop