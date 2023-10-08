@extends('admin/entrikatalog')

@section('title', 'Konten Digital')

@section('bagian')
<section id="kat4">
    <div class="box" id="box-kat4">
        <h4>Unggah Konten Digital</h4>
        <label for="namaFlash">
            <span>Nama File Format Flash</span>
            <input type="text" name="namaFlash" id="namaflash">
        </label>
        <div class="box" id="box-berkas">
            <small><button id="pilih-berkas"><i class="fas fa-plus"></i> Pilih berkas</button></small>
            <small><button id="unggah-berkas"><i class="fas fa-arrow-circle-up"></i> Unggah semua
                    berkas</button></small>
            <small><button id="batalkan-berkas"><i class="fas fa-ban"></i> Batalkan semua berkas</button></small>
        </div>
    </div>
    <div class="box" id="box-aksi">
        <small>Aksi</small>
        <select name="kontenD-aksi" id="kontenD-aksi">
            <option>Tampil di OPAC</option>
        </select>
        <select name="tidakdiPub" id="tidakdiPub">
            <option>Tidak dipublikasikan</option>
        </select>
        <small><button><i class="fas fa-check-square"></i> Proses</button></small>
    </div>
    <div class="card">
        <div class="card-header" id="KontenDig">
            <div class="box">
                <span><i class="fas fa-file-alt"> Daftar Konten Digital</i></span>
            </div>
        </div>
        <div class="card-body mx-0 px-0" id="card-KontenDigit">
            <div class="container">
                <div class="box" id="filter-konten">
                    <span>Tampilkan :</span>
                    <div class="box-dig">
                        <select name="digital" id="digital">
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
            </div>
            <div class="container" id="container-kontenDig">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th><input type="checkbox" name="kontenDigi-checkbox" id="kontenDigi-checkbox"></th>
                        <th>#</th>
                        <th>File</th>
                        <th>Nama File Format Flash</th>
                        <th>Diunggah Oleh</th>
                        <th>Tanggal di Unggah</th>
                        <th>Tampil di OPAC</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="1" id="1"></td>
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
        </div>
    </div>
</section>
@endsection