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
                <table id="example1" class="table table-striped table-bordered">
                    <thead>
                        <th><input type="checkbox" name="daftar-katalog-checkbox" id="daftar-katalog-checkbox"></th>
                        <th>No Induk</th>
                        <th>BIBID</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>ISBN</th>
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
                            <td>{{$item->Author}}</td>
                            <td>{{$item->ISBN}}</td>
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
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownToggle.addEventListener('click', function () {
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function (event) {
            if (!dropdownMenu.contains(event.target) && !dropdownToggle.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    });
    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
  });
</script>
@stop