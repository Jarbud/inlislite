@extends('adminlte::page')

@section('title', 'Karya Ilmiah')

@section('content_header')
    <h1>Karya Ilmiah</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h3 class="card-title"><a class="btn btn-success" href="/upload-karya-ilmiah-mahasiswa"> Upload Karya Ilmiah </a></h3> -->
                 </div>
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
                            <th>Judul</th>
                            <th>Pembimbing/<br>Promotor</th>
                            <th>Bagian Awal</th>
                            <th>Bagian Utama/Isi</th>
                            <th>Bagian Akhir</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($ki as $data)
                    
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $data->Nama }}</td>
                        <td>{{ $data->Judul }}</td>
                        <td>{{ $data->Pembimbing }}</td>
                        <td><a target="_blank" href="{{ asset('storage/filebgawal/'.$data->FileBgAwal ) }}">Buka PDF</a></td>
                        <td><a target="_blank" href="{{ asset('storage/filebgutama/'.$data->FileBgUtama ) }}">Buka PDF</a></td>
                        <td><a target="_blank" href="{{ asset('storage/filebgakhir/'.$data->FileBgAkhir ) }}">Buka PDF</a></td>
                        <td>
                            @if($data->Status == "acc")
                                <span class="badge bg-success">Diterima</span>
                            @elseif($data->Status == "dec")
                                <span class="badge bg-danger">Ditolak</span>
                            @elseif($data->Status == "pending")
                                <span class="badge bg-secondary">Pengecekan</span>
                            @endif
                        </td>
                        <td>
                        @if($data->Status == "acc")
                            <a class="btn btn-danger" href="">Hapus</a>
                        @elseif($data->Status == "dec")
                            <span class="badge bg-danger">Ditolak</span>
                        @elseif($data->Status == "pending")
                            <a class="btn btn-primary" href="{{ route('updateStatusVerifyKiAcc',$data->_id) }}">Diterima</a>
                            <a class="btn btn-danger" href="javascript:void(0)" id="show-kiadmin" data-url="{{ route('karyailmiahadminshow', $data->id) }}">Ditolak</a>
                        @endif
                        </td>
                    </tr>
       
                    @endforeach
                    </tbody>
                </table>
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
        <p>Judul : <span id="kiadmin-judul"></span></p>
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
              $('#kiadmin-id').text(data._id);
              $('#kiadmin-nama').text(data.Nama);
              $('#kiadmin-judul').text(data.Judul);
              $('#kiAdminID').val(data._id);
          })
       });
       
    });
</script>
@stop