@extends('adminlte::page')

@section('title', 'Export Data Tag Katalog')

@section('content_header')
<h1>Export Data Tag Katalog</h1>
@stop

@section('content')
<div class="container">
    <section id="export-data">
        <div class="container" id="filter-export-katalog">
            <small><button class="dan-button-export">Dan</button></small>
            <small><button class="atau-button-export">Atau</button></small>
            <small><button class="tambah-button-export"><i class="fas fa-plus" style="padding-right: 5px;"></i>Tambah
                    Filter</button></small>
        </div>
        <div class="box">
            <div class="container" id="dropdown-export-katalog">
                <select name="kriteria-export" id="kriteria-export">
                    <option disabled selected>-Pilihan Kriteria-</option>
                    <option value="1">Pilihan</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="container" id="deleteBtn-export">
                <small><button class="delete-button-export"><i class='fas fa-times'></i> Hapus</button></small>
            </div>
        </div>
    </section>

    <div class="search-box-export">
        <button class="searchButton-export"><i class='fas fa-search'></i> Cari</button>
        <button class="refreshButton-export"><i class='fas fa-undo'></i> Ulangi</button>
    </div>

    <div class="box" id="aksi-katalog-export">
        <span>Aksi</span>
        <select name="aksi-export" id="aksi-export" class="left-align-export">
            <option value="">Export Data Terpilih</option>
        </select>
        <small><button class="aksiButton-export"><i class="fas fa-edit"></i> Download</button></small>
    </div>

    <div class="card">
        <div class="card-header" id="export-data-katalog">
            <div class="box">
                <span><i class="fas fa-file-alt"> Export Data Tag Katalog</i></span>
            </div>
        </div>
        <div class="card-body mx-0 px-0" id="card-export-katalog">
            <div class="container">
                <div class="box" id="filter-halaman-export">
                    <span>Tampilkan :</span>
                    <div class="box-hal-export">
                        <select name="halaman-export" id="halaman-export">
                            <option value="">20 per halaman</option>
                        </select>
                    </div>
                    <div class="dropdown-export">
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
            <div class="container" id="container-table-export-katalog">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th><input type="checkbox" name="export-katalog-checkbox" id="export-katalog-checkbox"></th>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="5%" style="text-align: center;"><input type="checkbox" name="1" id="1"></td>
                            <td width="2%"></td>
                            <td width="25%"></td>
                            <td width="55%"></td>
                            <td width="6%"></td>
                            <td width="7%"></td>
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