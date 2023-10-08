@extends('adminlte::page')

@section('title', 'Daftar Konten Digital')

@section('content_header')
<h1>Daftar Konten Digital</h1>
@stop

@section('content')
<div class="container">
    <section id="konten-data">
        <div class="container" id="filter-konten-katalog">
            <small><button class="dan-button-konten">Dan</button></small>
            <small><button class="atau-button-konten">Atau</button></small>
            <small><button class="tambah-button-konten"><i class="fas fa-plus" style="padding-right: 5px;"></i>Tambah
                    Filter</button></small>
        </div>
        <div class="box">
            <div class="container" id="dropdown-konten-katalog">
                <select name="kriteria-konten" id="kriteria-konten">
                    <option disabled selected>-Pilihan Kriteria-</option>
                    <option value="1">Pilihan</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="container" id="deleteBtn-konten">
                <small><button class="delete-button-konten"><i class='fas fa-times'></i> Hapus</button></small>
            </div>
        </div>
    </section>

    <div class="search-box-konten">
        <button class="searchButton-konten"><i class='fas fa-search'></i> Cari</button>
        <button class="refreshButton-konten"><i class='fas fa-undo'></i> Ulangi</button>
    </div>

    <div class="box" id="aksi-katalog-konten">
        <span>Aksi</span>
        <select name="aksi-konten" id="aksi-konten" class="left-align-konten">
            <option value="">Hapus Data</option>
        </select>
        <small><button class="aksiButton-konten"><i class="fas fa-edit"></i> Proses</button></small>
    </div>

    <div class="card">
        <div class="card-header" id="konten-data-katalog">
            <div class="box">
                <span><i class="fas fa-file-alt"> Daftar Konten Digital</i></span>
            </div>
        </div>
        <div class="card-body mx-0 px-0" id="card-konten-katalog">
            <div class="container">
                <div class="box" id="filter-halaman-konten">
                    <span>Tampilkan :</span>
                    <div class="box-hal-konten">
                        <select name="halaman-konten" id="halaman-konten">
                            <option value="">20 per halaman</option>
                        </select>
                    </div>
                    <div class="dropdown-konten">
                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <li class="fas fa-download"></li>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">contoh</a></li>
                            <li><a class="dropdown-item" href="#">contoh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container" id="container-table-konten-katalog">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th><input type="checkbox" name="konten-katalog-checkbox" id="konten-katalog-checkbox"></th>
                        <th>#</th>
                        <th>Tanggal Unggah</th>
                        <th>File</th>
                        <th>Jenis File</th>
                        <th>Ukuran File</th>
                        <th>Data Bibliografis</th>
                        <th>BIB ID</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="5%" style="text-align: center;"><input type="checkbox" name="1" id="1"></td>
                            <td width="2%"></td>
                            <td width="10%"></td>
                            <td width="16%"></td>
                            <td width="8%"></td>
                            <td width="7%"></td>
                            <td width="8%"></td>
                            <td width="36%"></td>
                            <td width="8%"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container" id="button-redo">
                <button class="submit"><i class="fas fa-redo"></i> Segarkan Kembali</button>
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
</script>
@stop