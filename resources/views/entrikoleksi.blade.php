@extends('masteradmin')
@section('content')

        <section id="entrikoleksi" class="entrikoleksi">
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h1>Entri Koleksi</h1>
                        </div>
                        <div class="col-6">
                            <div class="breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="">Koleksi</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Entri Koleksi</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="content-header">
                        <div class="button-header">
                            <a class="btn btn-sm btn-success btn-simpan">Simpan</a>
                            <a class="btn btn-sm btn-primary btn-pilih-judul">Pilih Judul</a>
                            <a class="btn btn-sm btn-primary btn-salin-katalog">Salin Katalog dari</a>
                            <a class="btn btn-sm btn-warning btn-selesai">Selesai</a>
                        </div>
                    </div>
                    <hr>
                    <div class="collections-form">
                            <form action="">
                                <div class="row">
                                    <div class="col-3">
                                        <label for="">Jenis Bahan</label>
                                    </div>
                                    <div class="col-6">
                                        <div class="select-container">
                                            <select class="select-box" data-placeholder="Pilih Jenis Bahan" style="width:100%">
                                                <option></option>
                                                <option>Monograf (Buku, Jurnal, Laporan, dll)</option>
                                                <option>Terbitan Berkala (Surat Kabar, Majalah, dll)</option>
                                                <option>Skripsi (Karya Akademik Mahasiswa S1)</option>
                                                <option>Tesis (Karya Akademik Mahasiswa S2)</option>
                                                <option>Bahan Grafis (Foto, Lukisan, dll)</option>
                                                <option>Rekaman Video</option>
                                                <option>Disertasi (Karya Akademik Mahasiswa S3)</option>
                                                <option>Musik</option>
                                                <option>Bahan Kartografis (Peta, dll)</option>
                                                <option>Bahan Campuran</option>
                                                <option>Rekaman Suara</option>
                                                <option>Sumber Elektronik (CD-ROM, Floppy Disk, VCD, dll)</option>
                                                <option>Bentuk Mikro</option>
                                                <option>Film (Film, dll)</option>
                                                <option>Manuskrip</option>
                                                <option>Bahan Ephemeral</option>
                                            </select>
                                                <!--<div class="icon-container">
                                                    <i class="bi bi-caret-down-fill"></i>
                                                </div>-->
                                        </div>
                                    </div>
                                </div>
                            </form>


                        <div class="box">
                            <h3>Data Pengadaan</h3>
                            <hr>
                            <form action="">

                                <div class="row">
                                    <div class="col-3">
                                        <label for="jumlahekslempar">Jumlah Ekslempar</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" id="" name="" style="width:70px">
                                    </div>
                                </div>

                                <div class="noinduk">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-2">
                                            <label>No Induk</label>
                                            <input type="text" style="width:100%">
                                        </div>
                                        <div class="col-2">
                                            <label>No Barcode</label>
                                            <input type="text" style="width:100%">
                                        </div>
                                        <div class="col-2">
                                            <label>No RFID</label>
                                            <input type="text" style="width:100%">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Tanggal Pengadaan</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="date" id="tanggalpengadaan" name="tanggalpengadaan">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Jenis Sumber</label>
                                    </div>
                                    <div class="col-6">
                                        <!--<div class="select-box">
                                            <div class="select-option">
                                                <input type="text" placeholder="Select">
                                            </div>
                                            <div class="content">
                                                <div class="search">
                                                    <input type="text" id="optionSearch" placeholder="Search">
                                                </div>
                                                <ul class="options">
                                                    <li>A</li>
                                                    <li>B</li>
                                                    <li>C</li>
                                                    <li>D</li>
                                                    <li>E</li>
                                                </ul>
                                            </div>
                                        </div>-->
                                        <select class="select-box" data-placeholder="Pilih Jenis Sumber" style="width:100%">
                                            <option></option>
                                            <option>Pembelian</option>
                                            <option>Hadiah/Hibah</option>
                                            <option>Penggantian</option>
                                            <option>Penggandaan</option>
                                            <option>Pindahan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Nama Sumber</label>
                                    </div>
                                    <div class="col-6">
                                        <select id="select-box" style="width:100%">
                                            <option>---Belum Diketahui---</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <a class="btn btn-sm btn-primary btn-tambahkoreksi" style="width:37%">Tambah</a>
                                        <a class="btn btn-sm btn-primary btn-tambahkoreksi" style="width:37%">Koreksi</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Bentuk Fisik</label>
                                    </div>
                                    <div class="col-6">
                                        <select id="select-box" style="width:100%">
                                            <option>** Tidak Diketahui **</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Kategori</label>
                                    </div>
                                    <div class="col-6">
                                        <select style="width:100%">
                                            <option>** Tidak Diketahui **</option>
                                            <option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Akses</label>
                                    </div>
                                    <div class="col-6">
                                        <select style="width:100%">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Lokasi Perpustakaan</label>
                                    </div>
                                    <div class="col-6">
                                        <select style="width:100%">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Lokasi Ruang</label>
                                    </div>
                                    <div class="col-6">
                                        <select style="width:100%">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Ketersediaan</label>
                                    </div>
                                    <div class="col-6">
                                        <select style="width:100%">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Mata Uang</label>
                                    </div>
                                    <div class="col-6">
                                        <select style="width:100%">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Harga</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" style="width:100%">
                                    </div>
                                    <div class="col-3">
                                        <select style="width:75%">
                                            <option>Per ekslempar</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Nomor Panggil</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" style="width:100%">
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox">
                            <label>Tampil di OPAC</label>
                        </div>

                        <div class="button-footer">
                            <a class="btn btn-sm btn-success btn-simpan">Simpan</a>
                            <a class="btn btn-sm btn-primary btn-pilih-judul">Pilih Judul</a>
                            <a class="btn btn-sm btn-primary btn-salin-katalog">Salin Katalog dari</a>
                            <a class="btn btn-sm  btn-warning btn-selesai">Selesai</a>
                        </div>


                    </div>                
                </div>
            </div>
        </section>
    </body>

@endsection