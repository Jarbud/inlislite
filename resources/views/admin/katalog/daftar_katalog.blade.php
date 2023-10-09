@extends('adminlte::page')

@section('title', 'Daftar Katalog')

@section('content_header')
<h1>Daftar Katalog</h1>
@stop

@section('content')
<div class="container">
    <section id="koleksi">
        <!-- <div class="container" id="add-filter">
            <small><button class="dan-button">Dan</button></small>
            <small><button class="atau-button">Atau</button></small>
            <small><button class="tambah-button"><i class="fas fa-plus" style="padding-right: 5px;"></i>Tambah
                    Filter</button></small>
        </div>
        <div class="box">
            <div class="container" id="dropdown">
                <select name="kriteria" id="kriteria">
                    <option disabled selected>-Pilihan Kriteria-</option>
                    <option value="1">Pilihan</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="container" id="deleteBtn">
                <small><button class="delete-button"><i class='fas fa-times'></i> Hapus</button></small>
            </div>
        </div>
    </section>

    <div class="search-box">
        <button class="searchButton"><i class='fas fa-search'></i> Cari</button>
        <button class="refreshButton"><i class='fas fa-undo'></i> Ulangi</button>
    </div> -->

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
        <!-- <div class="card-body mx-0 px-0" id="card-daftar-katalog">
            <div class="container">
                <div class="box" id="filter-halaman">
                    <span>Tampilkan :</span>
                    <div class="box-hal">
                        <select name="halaman" id="halaman">
                            <option value="">20 per halaman</option>
                        </select>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <li class="fas fa-download"></li>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">contoh</a></li>
                            <li><a class="dropdown-item" href="#">contoh</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="container" id="container-table-katalog">
                <table id="example1" class="table table-striped table-bordered">
                    <thead>
                        <th><input type="checkbox" name="daftar-katalog-checkbox" id="daftar-katalog-checkbox"></th>
                        <!-- <th>#</th> -->
                        <th>no</th>
                        <th>Member ID</th>
                        <th>BIBID</th>
                        <th>Judul</th>
                        <th>Edisi</th>
                        <th>Penerbitan/Publikasi</th>
                        <th>Deskripsi Fisik</th>
                        <th>Subjek</th>
                        <th>Nomor Panggil</th>
                        <th>Eksemplar</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td><input type="checkbox" name="1" id="1"></td>
                            <td>{{$no++}}</td>
                            <td>{{$item->BIBID}}</td>
                            <td>{{$item->Title}}</td>
                            <td>{{$item->Edition}}</td>
                            <td>{{$item->Publikasi}}</td>
                            <td>{{$item->PhysicalDescription}}</td>
                            <td>{{$item->Subject}}</td>
                            <td>{{$item->CallNumber}}</td>
                            <td>{{$item->Subject}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- <div class="container" id="button-redo">
                <button class="submit"><i class="fas fa-redo"></i> Segarkan Kembali</button>
            </div> -->
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