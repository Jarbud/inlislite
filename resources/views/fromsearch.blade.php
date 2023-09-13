@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container" class="fade-up">
        <h1>Hasil Pencarian</h1>
      </div>
    </section>

    <section id="search" class="search">
      <div class="container">
        <h1>Pencarian</h1>
        <div class="row">

          <div class="col-sm-5 d-flex align-items-stretch">
            <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            </div>
          </div>

          <div class="col-sm-3 d-flex align-items-stretch">
            <div class="input-group rounded">
              <select name="input-dropdown" id="input-dropdown" class="input-control rounded">
                <option value="0">Pilih Jenis</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">D</option>
              </select>
            </div>
          </div>
          
          <div class="col-sm-3 d-flex align-items-stretch">
            <div class="input-group rounded">
              <select name="input-dropdown" id="input-dropdown" class="input-control rounded">
                <option value="0">Pilih Jenis</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">D</option>
              </select>
            </div>
          </div>

          <div class="col-sm-1 d-flex align-items-stretch">
            <a href="#" class="btn-search">Search</a>
          </div>

        </div>
      </div>
    </section>

    <section id="fromsearch" class="fromsearch">
        <div class="container" class="fade-up">
            <div class="row">

                <div class="col-sm-9">

                    <div class="tampung">
                        <a class="btn btn-tampung">
                            <i class="bi bi-basket"></i>Tambah ke Tampung
                        </a>
                    </div>

                    <table class="main-table table-striped" width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="table-content">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <input type="checkbox">
                                            </div>
                                            <div class="col-sm-2">
                                                <a><img class="table1-img" src="assets/img/sampul.png"/></a>
                                            </div>
                                            <div class="col-sm-9">
                                                <table class="table1" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="2"><a class="table1-title" href="/viewdetail">Pengembangan Aplikasi Mobile untuk Manajemen Inventaris menggunakan Teknologi Barcode</a></th>
                                                        </tr>
                                                        <tr>
                                                            <td width="22%">Jenis Bahan</td>
                                                            <td width="78%">Monograf</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pengarang</td>
                                                            <td>Indonesia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Penerbitan</td>
                                                            <td>Jakarta, Perpustakaan Nasional RI, 2007</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Konten Digital</td>
                                                            <td>pdf, rar</td>
                                                        </tr>
                                                    </tbody>                                                    
                                                </table>
                                                <a class="btn btn-viewdetail" href="/viewdetail">Lihat Detail</a>
                                            </div>    
                                        </div>
                                    </div>  
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="table-content">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <input type="checkbox">
                                            </div>
                                            <div class="col-sm-2">
                                                <a><img class="table1-img" src="assets/img/sampul.png"/></a>
                                            </div>
                                            <div class="col-sm-9">
                                                <table class="table1" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="2"><a class="table1-title" href="/viewdetail">Penerapan Pelayanan Administrasi Terpadu Kecamatan Mobile Untuk Meningkatkan Pelayanan Publik Di Kantor Camat DUMBO Raya</a></th>
                                                        </tr>
                                                        <tr>
                                                            <td width="22%">Jenis Bahan</td>
                                                            <td width="78%">Monograf</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pengarang</td>
                                                            <td>Tone, Sumaryadi</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Penerbitan</td>
                                                            <td>Jakarta, Perpustakaan Nasional RI, 2007</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Konten Digital</td>
                                                            <td>pdf, rar</td>
                                                        </tr>
                                                    </tbody>                                                    
                                                </table>
                                                <a class="btn btn-viewdetail" href="/viewdetail">Lihat Detail</a>
                                            </div>    
                                        </div>
                                    </div>  
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="table-content">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <input type="checkbox">
                                            </div>
                                            <div class="col-sm-2">
                                                <a><img class="table1-img" src="assets/img/sampul.png"/></a>
                                            </div>
                                            <div class="col-sm-9">
                                                <table class="table1" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="2"><a class="table1-title" href="/viewdetail">Peningkatan Efisiensi Penyelenggaraan Seminar Keselamatan Nuklir Bapeten Melalui Sistem Informasi Berbasis Web</a></th>
                                                        </tr>
                                                        <tr>
                                                            <td width="22%">Jenis Bahan</td>
                                                            <td width="78%">Monograf</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pengarang</td>
                                                            <td>Bambang Eko</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Penerbitan</td>
                                                            <td>Jakarta, Perpustakaan Nasional RI, 2007</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Konten Digital</td>
                                                            <td>pdf, rar</td>
                                                        </tr>
                                                    </tbody>                                                    
                                                </table>
                                                <a class="btn btn-viewdetail" href="/viewdetail">Lihat Detail</a>
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
                            <h1><i class="bi bi-check2-circle"></i>Lebih Spesifik :</h1>
                        </div>

                        <div class="accordion" id="accordionParent">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Jenis Bahan</button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading" data-bs-parent="accordionParent">
                                    <div class="accordion-body">
                                        <ul class="content-list">
                                            <li><a href="#">Monograf</a></li>
                                            <li><a href="#">Terbitan Berkala</a></li>
                                            <li><a href="#">Bahan Campuran</a></li>
                                            <li><a href="#">Bahan Kartografis</a></li>
                                            <li><a href="#">Rekaman Suara</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion" id="accordionParent">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Bahasa</button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading" data-bs-parent="accordionParent">
                                    <div class="accordion-body">
                                        <ul class="content-list">
                                            <li><a href="#">Indonesia</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion" id="accordionParent">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Penerbit</button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse show" aria-labelledby="heading" data-bs-parent="accordionParent">
                                    <div class="accordion-body">
                                        <ul class="content-list">
                                            <li><a href="#">Perpustakaan</a></li>
                                            <li><a href="#">Nama Penerbit</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> 
            </div>
        </div>
    </section>


@endsection