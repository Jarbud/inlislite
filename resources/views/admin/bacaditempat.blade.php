@extends('adminlte::page')

@section('title', 'Daftar Konten Digital')

@section('content_header')
<h1>Buku Tamu</h1>
@stop

@section('content')
<section>
    <div class="container">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Kunjungan</th>
                    <th>IP</th>
                    <th>No Pengunjung</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($baca as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->TanggalKunjungan}}</td>
                    <td>{{$item->IP}}</td>
                    <td>{{$item->NoPengunjung}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/admin.css') }}">
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