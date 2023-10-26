@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container">
        <h1>Detail</h1>
      </div>
    </section>

    <section id="detail" class="detail">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-sm-9">
                    <table class="main-table table-striped" width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="table-content">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <div class="bookmark">
                                                    <input type="checkbox" id="bookmark1" />
                                                    <label for="bookmark1"></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <a><img src="{{ asset('assets/img/sampul.png') }}" alt="fotosampul"/></a>
                                            </div>
                                            <div class="col-sm-8">
                                                <table class="table1" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="25%">Judul</td>
                                                            <th width="75%"><Strong>{{ $katalog->Title }}</Strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td width="25%">Jenis Bahan</td>
                                                            <td width="75%">{{ $katalog->worksheets->Name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pengarang</td>
                                                            <td>{{ $katalog->Author }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Edisi</td>
                                                            <td>{{ $katalog->Edition }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Penerbit</td>
                                                            <td>{{ $katalog->Publisher }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Deskripsi Fisik</td>
                                                            <td>{{ $katalog->PhysicalDescription }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ISBN</td>
                                                            <td>{{ $katalog->ISBN }}7</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Subjek</td>
                                                            <td>{{ $katalog->Subject }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Abstrak</td>
                                                            <td>{{ $katalog->Note }}</td>
                                                        </tr>
                                                    </tbody>                                                    
                                                </table>
                                            </div>    
                                        </div>
                                        
                                        <!--<div class="row">
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
                                        </div>-->

                                        <div class="detail-footer">
                                            <div class="footer-content">
                                                <ul class="nav nav-tabs" id="detail-nav" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="eksemplar-tab" 
                                                        data-bs-toggle="tab" data-bs-target="#eksemplar" type="button" role="tab" 
                                                        aria-controls="eksemplar" aria-selected="true">Eksemplar</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="kontendigital-tab" 
                                                        data-bs-toggle="tab" data-bs-target="#kontendigital" type="button" role="tab" 
                                                        aria-controls="kontendigital" aria-selected="false">Konten Digital</button>
                                                    </li>
                                                    <!--<li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="marc-tab" 
                                                        data-bs-toggle="tab" data-bs-target="#marc" type="button" role="tab" 
                                                        aria-controls="marc" aria-selected="false">MARC</button>
                                                    </li>-->
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unduhkatalog-tab" 
                                                        data-bs-toggle="tab" data-bs-target="#unduhkatalog" type="button" role="tab" 
                                                        aria-controls="unduhkatalog" aria-selected="false">Unduh Katalog</button>
                                                    </li>
                                                </ul>

                                                <div class="tab-content" id="detail-content">
                                                    <div class="tab-pane fade show active" id="eksemplar" role="tabpanel" aria-labelledby="eksemplar-tab">
                                                        <table class="table" width="100%">
                                                            <tr class="tabel-header">
                                                                <th width="18%">No Barcode</th>
                                                                <th width="17%">No Panggil</th>
                                                                <th width="15%">Akses</th>
                                                                <th width="35%">Lokasi</th>
                                                                <th width="15%">Ketersediaan</th>
                                                            </tr>
                                                            <tr>
                                                                <td>B181346</td>
                                                                <td>R. 50 PIM I 2018</td>
                                                                <td>Dapat dipinjam</td>
                                                                <td>Self Access Centre</td>
                                                                <td>Tersedia</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </table> 
                                                    </div>
                                                    <div class="tab-pane fade" id="kontendigital" role="tabpanel" aria-labelledby="kontendigital-tab">
                                                        <table class="table" width="100%">
                                                            <tr class="tabel-header">
                                                                <th width="5%%">No</th>
                                                                <th width="35%%">Nama File</th>
                                                                <th width="30%">Nama File Format Flash</th>
                                                                <th width="15%">Format File</th>
                                                                <th width="15%">Action</th>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Desain dan Implementasi Sistem Keamanan Rumah Cerdas dengan Integrasi Internet of Things PDF</td>
                                                                <td></td>
                                                                <td>pdf</td>
                                                                <td>
                                                                    <a href="">
                                                                        <i class="bi bi-journal-arrow-down" style="margin-right:3px"></i>Download
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Desain dan Implementasi Sistem Keamanan Rumah Cerdas dengan Integrasi Internet of Things RAR</td>
                                                                <td></td>
                                                                <td>rar</td>
                                                                <td>
                                                                    <a href="">
                                                                        <i class="bi bi-journal-arrow-down" style="margin-right:3px"></i>Download
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table> 
                                                    </div>
                                                    <!--<div class="tab-pane fade" id="marc" role="tabpanel" aria-labelledby="marc-tab">
                                                        <table class="table" width="100%">
                                                            <tr class="tabel-header">
                                                                <th width="10%">Tag</th>
                                                                <th width="10%">Ind1</th>
                                                                <th width="10%">Ind2</th>
                                                                <th width="70%">Isi</th>
                                                            </tr>
                                                            <tr>
                                                                <td>001</td>
                                                                <td>#</td>
                                                                <td>#</td>
                                                                <td>INLIS000000000003727</td>
                                                            </tr>
                                                            <tr>
                                                                <td>002</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </table> 
                                                    </div>-->
                                                    <div class="tab-pane fade" id="unduhkatalog" role="tabpanel" aria-labelledby="unduhkatalog-tab">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--<div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-11">
                                                <div class="tampung">
                                                    <a class="btn btn-tampung">
                                                        <i class="bi bi-basket"></i>Tampung
                                                    </a>
                                                </div>
                                            </div>
                                        </div>-->

                                    </div>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-3">
                    <div class="accordion-title">
                        <h1><i class="bi bi-book"></i>Baca Juga :</h1>
                    </div>
                    <div class="accordion" id="accordionParent">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNow" aria-expanded="true" aria-controls="collapseNow">Konten Lainnya :</button>
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


@endsection