@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container" class="fade-up">
        <h1>Detail Artikel</h1>
      </div>
    </section>

    <section id="detail" class="detail">
        <div class="container" class="fade-up">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-sm-9">
                    <table class="main-table table-striped" width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="table-content">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <div class="bookmark">
                                                    <input type="checkbox"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <a><img src="assets/img/skripsi.png"/></a>
                                            </div>
                                            <div class="col-sm-8">
                                                <table class="table1" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="25%">Jenis Bahan</td>
                                                            <td width="75%">Skripsi</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Judul</td>
                                                            <th><Strong>Desain dan Implementasi Sistem Keamanan Rumah Cerdas dengan Integrasi Internet of Things</Strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>Pengarang</td>
                                                            <td>Indonesia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Penerbit</td>
                                                            <td>Jakarta, Perpustakaan Nasional RI, 2007</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Konten Digital</td>
                                                            <td>pdf, rar</td>
                                                        </tr>
                                                    </tbody>                                                    
                                                </table>
                                            </div>    
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-11">                                                
                                                <div class="table2">
                                                    <h4>Konten Digital Yang Tersedia</h4>
                                                    <table class="table2" width="100%">
                                                        <thead class="table2head">
                                                            <tr>
                                                                <th scope="col" width="5%%">No</th>
                                                                <th scope="col" width="55%">Nama File</th>
                                                                <th scope="col" width="20%">Format File</th>
                                                                <th scope="col" width="20%">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>PDF Desain dan Implementasi Sistem Keamanan Rumah Cerdas dengan Integrasi Internet of Things</td>
                                                                <td>pdf</td>
                                                                <td>
                                                                    <a href="#">
                                                                        <i class="bi bi-journal-arrow-down"></i>Download
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>RAR Desain dan Implementasi Sistem Keamanan Rumah Cerdas dengan Integrasi Internet of Things</td>
                                                                <td>rar</td>
                                                                <td>
                                                                    <a href="#">
                                                                        <i class="bi bi-journal-text"></i>Baca Online
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-3">
                    <div class="accordion-title">
                        <h1><i class="bi bi-book"></i>Baca Yang Lain :</h1>
                    </div>
                    <div class="accordion" id="accordionParent">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNow" aria-expanded="true" aria-controls="collapseNow">Konten Terkait</button>
                            </h2>
                            <div id="collapseNow" class="accordion-collapse collapse show" aria-labelledby="heading" data-bs-parent="accordionParent">
                                <div class="accordion-body">
                                    <ul class="content-list">
                                        <li><a href="#">Analisis Performa Algoritma Routing dalam Jaringan Wireless Sensor Network</a></li>
                                        <li><a href="#">Desain dan Implementasi Sistem Keamanan Pintu Otomatis dengan Pengenalan Sidik Jari</a></li>
                                        <li><a href="#">Pengembangan Aplikasi Deteksi Objek pada Video menggunakan Deep Learning</a></li>
                                        <li><a href="#">Penerapan Teknologi Virtual Reality dalam Simulasi Pembelajaran Interaktif</a></li>
                                        <li><a href="#">Analisis dan Perancangan Sistem Informasi Manajemen Kepegawaian menggunakan Cloud Computing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>   

            </div>
        </div>
    </section>