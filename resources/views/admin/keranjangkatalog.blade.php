@extends('adminlte::page')

@section('title', 'Keranjang Katalog')

@section('content_header')
<h1>Keranjang Katalog</h1>
@stop

@section('content')
<div class="container">
    <section id="keranjang-data">
        <div class="container" id="filter-keranjang-katalog">
            <small><button class="dan-button-keranjang">Dan</button></small>
            <small><button class="atau-button-keranjang">Atau</button></small>
            <small><button class="tambah-button-keranjang"><i class="fas fa-plus" style="padding-right: 5px;"></i>Tambah
                    Filter</button></small>
        </div>
        <div class="box">
            <div class="container" id="dropdown-keranjang-katalog">
                <select name="kriteria-keranjang" id="kriteria-keranjang">
                    <option disabled selected>-Pilihan Kriteria-</option>
                    <option value="1">Pilihan</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="container" id="deleteBtn-keranjang">
                <small><button class="delete-button-keranjang"><i class='fas fa-times'></i> Hapus</button></small>
            </div>
        </div>
    </section>

    <div class="search-box-keranjang">
        <button class="searchButton-keranjang"><i class='fas fa-search'></i> Cari</button>
        <button class="refreshButton-keranjang"><i class='fas fa-undo'></i> Ulangi</button>
    </div>

    <div class="box" id="aksi-katalog-keranjang">
        <span>Aksi</span>
        <select name="aksi-keranjang" id="aksi-keranjang" class="left-align-keranjang">
            <option value="">Tampil di OPAC</option>
        </select>
        <small><button class="aksiButton-keranjang"><i class="fas fa-edit"></i> Proses</button></small>
        <small><button class="kosongButton-keranjang"><i class="fas fa-trash-alt"></i> Kosongkan
                Keranjang</button></small>
    </div>

    <div class="card">
        <div class="card-header" id="keranjang-data-katalog">
            <div class="box">
                <span><i class="fas fa-file-alt"> Keranjang Katalog</i></span>
            </div>
        </div>
        <div class="card-body mx-0 px-0" id="card-keranjang-katalog">
            <div class="container">
                <div class="box" id="filter-halaman-keranjang">
                    <span>Tampilkan :</span>
                    <div class="box-hal-keranjang">
                        <select name="halaman-keranjang" id="halaman-keranjang">
                            <option value="">20 per halaman</option>
                        </select>
                    </div>
                    <div class="dropdown-keranjang">
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
            <div class="container" id="container-table-keranjang-katalog">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th><input type="checkbox" name="keranjang-katalog-checkbox" id="keranjang-katalog-checkbox">
                        </th>
                        <th>#</th>
                        <th></th>
                        <th>Member ID</th>
                        <th>BIBID</th>
                        <th>Judul</th>
                        <th>Edisi</th>
                        <th>Penerbitan/Publikasi</th>
                        <th>Deskripsi Fisik</th>
                        <th>Subjek</th>
                        <th>Nomor Panggil</th>
                        <th>Konten Digital</th>
                        <th>Eksemplar</th>
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