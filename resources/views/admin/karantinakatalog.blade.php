@extends('adminlte::page')

@section('title', 'Karantina Katalog')

@section('content_header')
<h1>Karantina Katalog</h1>
@stop

@section('content')
<div class="container">
    <section id="karantina-data">
        <div class="container" id="filter-karantina-katalog">
            <small><button class="dan-button-karantina">Dan</button></small>
            <small><button class="atau-button-karantina">Atau</button></small>
            <small><button class="tambah-button-karantina"><i class="fas fa-plus" style="padding-right: 5px;"></i>Tambah
                    Filter</button></small>
        </div>
        <div class="box">
            <div class="container" id="dropdown-karantina-katalog">
                <select name="kriteria-karantina" id="kriteria-karantina">
                    <option disabled selected>-Pilihan Kriteria-</option>
                    <option value="1">Pilihan</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="container" id="deleteBtn-karantina">
                <small><button class="delete-button-karantina"><i class='fas fa-times'></i> Hapus</button></small>
            </div>
        </div>
    </section>

    <div class="search-box-karantina">
        <button class="searchButton-karantina"><i class='fas fa-search'></i> Cari</button>
        <button class="refreshButton-karantina"><i class='fas fa-undo'></i> Ulangi</button>
    </div>

    <div class="box" id="aksi-katalog-karantina">
        <span>Aksi</span>
        <select name="aksi-karantina" id="aksi-karantina" class="left-align-karantina">
            <option value="">Hapus Permanen</option>
        </select>
        <small><button class="aksiButton-karantina"><i class="fas fa-edit"></i> Proses</button></small>
    </div>

    <div class="card">
        <div class="card-header" id="karantina-data-katalog">
            <div class="box">
                <span><i class="fas fa-file-alt"> Karantina Katalog</i></span>
            </div>
        </div>
        <div class="card-body mx-0 px-0" id="card-karantina-katalog">
            <div class="container">
                <div class="box" id="filter-halaman-karantina">
                    <span>Tampilkan :</span>
                    <div class="box-hal-karantina">
                        <select name="halaman-karantina" id="halaman-karantina">
                            <option value="">20 per halaman</option>
                        </select>
                    </div>
                    <div class="dropdown-karantina">
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
            <div class="container" id="container-table-karantina-katalog">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th><input type="checkbox" name="karantina-katalog-checkbox" id="karantina-katalog-checkbox">
                        </th>
                        <th>#</th>
                        <th>Is Rda</th>
                        <th>Member ID</th>
                        <th>BIBID</th>
                        <th>Judul</th>
                        <th>Edisi</th>
                        <th>Penerbitan/Publikasi</th>
                        <th>Deskripsi Fisik</th>
                        <th>Subjek</th>
                        <th>Nomor Panggil</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;"><input type="checkbox" name="1" id="1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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