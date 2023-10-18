@extends('adminlte::page')

@section('title', 'Daftar Katalog')

@section('content_header')
<h1>Daftar Katalog</h1>
@stop

@section('content')
<div class="container">
    <section id="koleksi">
        <div class="box" id="aksi-katalog">
            <span>Aksi</span>
            <select name="aksi" id="aksi" class="left-align">
                <option value="">Tampil di OPAC</option>
            </select>
            <small><button class="aksiButton"><i class="fas fa-edit"></i> Proses</button></small>
        </div>

        <div class="card">
            <div class="card-header" id="daftar-katalog">
                <div class="box">
                    <span><i class="fas fa-file-alt"> Daftar Katalog</i></span>
                </div>
            </div>
            <div class="container" id="container-table-katalog">
                <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <th><input type="checkbox" name="daftar-katalog-checkbox" id="daftar-katalog-checkbox"></th>
                        <th>No Induk</th>
                        <th>BIBID</th>
                        <th>Judul</th>
                        <th>Edisi</th>
                        <th>Penerbitan/Publikasi</th>
                        <th>Deskripsi Fisik</th>
                        <th>Subjek</th>
                        <th>Nomor Panggil</th>
                        <th>Konten Digital</th>
                    </thead>
                    <tbody>
                        @foreach ($catalogs as $item)
                        <tr>
                            <td><input type="checkbox" name="1" id="1"></td>
                            <td>{{$item->NomorInduk}}</td>
                            <td>{{$item->BIBID}}</td>
                            <td>{{$item->Title}}</td>
                            <td>{{$item->Edition}}</td>
                            <td>{{$item->Publikasi}}</td>
                            <td>{{$item->PhysicalDescription}}</td>
                            <td>{{$item->Subject}}</td>
                            <td>{{$item->CallNumber}}</td>
                            <td>{{$item->FileURL}}</td>
                            <td><a href="{{ route('catalog', ['id' => $item->_id]) }}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/admin.css') }}">
@stop

@section('js')
<script>
    $(document).ready( function () {
    $('#tabel-data').DataTable();
} );
</script>
@stop