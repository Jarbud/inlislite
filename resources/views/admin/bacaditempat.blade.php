@extends('adminlte::page')

@section('title', 'Buku Tamu')

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
                    <th>Nama</th>
                    <th>Jenis Anggota</th>
                    <th>Lokasi Perpustakaan</th>
                    <th>Lokasi Baca</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($baca as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ Carbon\Carbon::parse($item['tanggal_kunjungan'])->format('d/m/Y H:i:s') }}</td>
                    <td>{{$item->ip}}</td>
                    <td>{{$item->no_pengenal}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->jenis_anggota}}</td>
                    <td>{{$item->LokasiPerpustakaan}}</td>
                    <td>{{$item->LokasiBaca}}</td>
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