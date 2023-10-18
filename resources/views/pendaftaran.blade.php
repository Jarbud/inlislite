@extends('master')
@section('content')

<div class="container">
    <div class="content-wrapper">
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <span style="font-size: 50px;">Persyaratan Pendaftaran</span>
            </div>
        </div>
        <div style="height: 350px; overflow:scroll; padding: 5px;">
            <div class="row mt-2 pt-2">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <h2>Persyaratan</h2>
                            <hr>
                            <p class="card-description"></p>
                            <ul>
                                <li>Anggota adalah Mahasiswa Aktif di Fakultas Ekonomi dan Bisnis Universitas Brawijaya</li>
                                <li>No.Anggota silahkan isikan NIM (Nomor Induk Mahasiswa)</li>
                                <li>Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                                <li>Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                                <li>Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 pt-2">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <h2>Tata Tertib</h2>
                            <hr>
                            <p class="card-description"></p>
                            <ul>
                                <li>Kartu naggota melekat menjadi satu dengan KTM</li>
                                <li>Wajib dibawa saat berkunjung ke Self Access Center FEB-UB</li>
                                <li>Kartu anggota tidak boleh dipinjamkan kepada orang lain</li>
                                <li>Jika kartu naggota hilang,</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 pt-2">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <h2>Manfaat Keanggotaan</h2>
                            <hr>
                            <p class="card-description"></p>
                            <ul>
                                <li>Buku Tamu</li>
                                <li>Ruang Koleksi</li>
                                <li>Locker</li>
                                <li>Leisure Room</li>
                                <li>Peminjaman Discussion Room</li>
                                <li>Akses Koleksi Digital</li>
                                <li>Koleksi Karya Ilmiah Mahasiswa</li>
                                <li>E-Book</li>
                                <li>Pojok Statistik : Tempat Asyik Belajar Statistik</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 pt-2">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <h2>E-RESOURCES</h2>
                            <hr>
                            <p class="card-description"></p>
                            <ul>
                                <p>Ditahun 2023 ini, Universitas Brawijaya melanggan E-Resource: <i>Proquest, IEEE Xplore Digital Library, ScienceDirect, EBSCO, Springer,Cambrige Journals online Full Package 2023 dan CNKI:</i></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 pt-2">
        <form action="{{ route('daftar-show') }}">
            <!-- <small style="color: red;"><i class="bi bi-pencil-square"></i>  Harap login terlebih dahulu</small> <br> -->
            <label style="padding-top: 20px;">
                <input type="checkbox" id="agree" name="agree"  onchange="document.getElementById('button').disabled = !this.checked;"> 
                Saya telah membaca & menyetujui atas persyaratan dan kondisi yang berlaku.
            </label><br>
            <input type="submit" value="Lanjutkan Pendaftaran" class="btn btn-primary" style="margin-top: 10px;" id="button" name="button" disabled>
        </form>
        </div>
    </div>
</div>

@endsection