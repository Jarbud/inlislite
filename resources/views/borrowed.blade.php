@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container" class="fade-up">
        <h1>Peminjaman Buku</h1>
      </div>
    </section>

    <section id="borrowed" class="borrowed">
        <div class="container" class="fade-up">

                <div class="tnc">
                    <div class="tnc-content">
                        <div class="tnc-list">
                            <h1>Syarat Peminjaman &<br>Pengembalian Buku</h1>
                            <ul>
                                <li>Merupakan mahasiswa aktif</li>
                                <li>Memiliki akun digilib</li>
                                <li>Mampu bertanggung jawab</li>
                            </ul>
                        </div>
                    </div>
                </div>

                    <div class="borrowed-content">
                        <div class="card flex-row">
                            <div class="card-body">

                                <div class="search">    
                                    <div class="row">
                                        <div class="col-8 d-flex align-items-stretch">
                                            <h1><i class="bi bi-card-list"></i>Data Buku Yang Sedang Dipinjam</h1>
                                        </div>
                                        <div class="col-4 d-flex align-items-stretch">
                                            <div class="input-group rounded">
                                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                            </div>
                                            <a href="#" class="btn-search"><i class="bi bi-search"></i></a>
                                        </div>                                            
                                    </div>
                                </div>

                                <div class="borrowed-table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="2%">#</th>
                                                <th width="13%">No Barcode</th>
                                                <th width="40%">Judul</th>
                                                <th width="15%">Pengarang</th>
                                                <th width="10%">Tanggal Pinjam</th>
                                                <th width="10%">Jatuh Tempo</th>
                                                <th width="10%">Hari Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-transaksi">
                                                <th scope="row"></th>
                                                <td colspan="1">
                                                    <ul class="list-transaksi">
                                                        <li>Nomor Transaksi</li>
                                                        <li>Nomor Anggota</li>
                                                        <li>Nama Anggota</li>
                                                    </ul>
                                                </td>
                                                <td colspan="7">
                                                    <ul class="list-transaksi">
                                                        <li>:<span class="tab"></span>0123456789</li>
                                                        <li>:<span class="tab"></span>0987654321</li>
                                                        <li>:<span class="tab"></span>Aulia Rosa Zahrani</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="table-pinjaman">
                                                <th scope="row">1</th>
                                                <td>0123456789</td>
                                                <td>Judul buku yang dipinjam coba dipanjangin soalnya mau liat tampilannya kaya gimana</td>
                                                <td>Nama pengarang buku</td>
                                                <td>1-08-2023</td>
                                                <td>3-08-2023</td>
                                                <td>-2 hari</td>
                                            </tr>

                                            <tr class="table-transaksi">
                                                <th scope="row"></th>
                                                <td colspan="1">
                                                    <ul class="list-transaksi">
                                                        <li>Nomor Transaksi</li>
                                                        <li>Nomor Anggota</li>
                                                        <li>Nama Anggota</li>
                                                    </ul>
                                                </td>
                                                <td colspan="7">
                                                    <ul class="list-transaksi">
                                                        <li>:<span class="tab"></span>0123456789</li>
                                                        <li>:<span class="tab"></span>0987654321</li>
                                                        <li>:<span class="tab"></span>Aulia Rosa Zahrani</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="table-pinjaman">
                                                <th scope="row">2</th>
                                                <td>0123456789</td>
                                                <td>Majnun</td>
                                                <td>Anton Kurnia</td>
                                                <td>12-08-2023</td>
                                                <td>14-08-2023</td>
                                                <td>-2 hari</td>
                                            </tr>

                                            <tr class="table-transaksi">
                                                <th scope="row"></th>
                                                <td colspan="1">
                                                    <ul class="list-transaksi">
                                                        <li>Nomor Transaksi</li>
                                                        <li>Nomor Anggota</li>
                                                        <li>Nama Anggota</li>
                                                    </ul>
                                                </td>
                                                <td colspan="7">
                                                    <ul class="list-transaksi">
                                                        <li>:<span class="tab"></span>0123456789</li>
                                                        <li>:<span class="tab"></span>0987654321</li>
                                                        <li>:<span class="tab"></span>Aulia Rosa Zahrani</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="table-pinjaman">
                                                <th scope="row">3</th>
                                                <td>0123456789</td>
                                                <td>Funiculi Funicula</td>
                                                <td>Toshikazu Kawaguchi</td>
                                                <td>28-08-2023</td>
                                                <td>30-08-2023</td>
                                                <td>-2 hari</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="/return" class="btn btn-to-other">Lihat Buku Yang Sudah Dikembalikan</a>
                            </div>
                        </div>
                    </div>


                        <!--
                        <div class="col-lg-8 mb-4">
                            <div class="card flex-row">
                                <div class="card-body">
                                    <div class="tnc-content">
                                        <h1>Persyaratan</h1>

                                        <a href="/viewdetail" class="card-title">Judul Skripsi</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <div class="card flex-row">
                                <div class="card-body">
                                    <h1>Baca</h1>
                                </div>
                            </div>
                        </div>-->
        
        
        </div>
    </section>



@endsection