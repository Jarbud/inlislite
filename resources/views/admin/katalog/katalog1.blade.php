@extends('admin/katalog/entrikatalog')

@section('title', 'Katalog')

@section('content_header')
<h1>Entri Katalog</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header" id="Simpankoleksi" style="border-top: 3px solid #3c8dbc;">
        <div class="container" id="nav1">
            <nav>
                <ul>
                    <li id="menu-katalog" data-target="#kat1"><a href="#">Katalog</a></li>
                    <li id="menu-koleksi" data-target="#kat2"><a href="#">Koleksi</a></li>
                    <li id="menu-cover" data-target="#kat3"><a href="#">Cover</a></li>
                    <li id="menu-kontendigital" data-target="#kat4"><a href="#">Konten Digital</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="card-body" id="entriDrop">
        <div id="kat1" class="bagian">
            <form action="{{ route('katalog-store') }}" autocomplete="off" method="POST">
                @method('PUT')
                @csrf
                <div class="container" id="button-kat">
                    <button class="simpan-button" type="submit" name="action" value="save">Simpan</button>
                    <!-- <button class="salin-judul">Salin Judul</button>
                    <button class="salin-katalog">Salin Katalog dari</button> -->
                    <!-- <button class="selesai-button" type="submit" name="action" value="finish">Selesai</button> -->
                </div>
                <hr>
                <div class="dropdown" id="dropbahan">
                    <label for="jenis-bahan">Jenis Bahan</label>

                    <select name="jenis-bahan" id="jenis-bahan">
                        <!-- <option disabled selected>Jenis</option> -->
                        @foreach ( $jenisBahan as $item )
                        @if($item->ID == $katalog[0]->Worksheet_id)
                        <option value="{{ $item->ID }}" selected>{{$item->Name}} ({{ $item->Keterangan }})</option>
                        @else
                        <option value="{{ $item->ID }}">{{$item->Name}} ({{ $item->Keterangan }})</option>
                        @endif
                        @endforeach

                    </select>
                </div>
                <div class="box" id="form-entri">
                    <div class="box-header">
                        <h4>Data Bibliografis</h4>
                    </div>
                    <hr>
                    <div class="box-body">

                        <div class="card" id="ek1">
                            <div class="card-header">
                                Judul
                            </div>
                            <div class="card-body">
                                <div class="container" id="left">
                                    <div id="left1">
                                        <label for="utamaj">Judul Utama</label>
                                        <input type="text" placeholder="Masukan Judul Utama" id="judul_utama"
                                            name="judul_utama" class="form-control" required
                                            value="{{ $katalog[0]->Title }}">
                                    </div>
                                    <div id="left2">
                                        <label for="sandang">Diawali Kata Sandang</label>
                                        <select name="sandang" id="sandang" class="form-select">
                                            <option>-Tidak Diawali-</option>
                                            @foreach ( $kataSandang as $item )
                                            <option>{{$item->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="container" id="right">
                                    <div id="right1">
                                        <label for="anakj">Anak Judul</label>
                                        <input type="text" placeholder="Masukan Anak Judul" id="anak_judul"
                                            name="anak_judul" class="form-control">
                                    </div>
                                    <div id="right2">
                                        <label for="pjawab">Penanggung Jawab</label>
                                        <input type="text" placeholder="Masukan Penanggung Jawab" id="pjawab"
                                            name="pjawab" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="ek2">
                            <div class="card-header">
                                Pengarang
                            </div>
                            <div class="card-body">
                                <div id="top1">
                                    <div id="top-column">
                                        <label for="pUtama">Pengarang Utama</label>
                                        <input type="text" placeholder="Masukan Pengarang Utama" id="pUtama"
                                            name="pUtama" class="form-control" required
                                            value="{{ $katalog[0]->Author }}">
                                    </div>
                                </div>
                                <div id="top2">
                                    <div id="pengarang">
                                        <label for="pTambahan">Pengarang Tambahan</label>
                                        <input type="text" placeholder="Masukan Pengarang Tambahan" id="pTambahan"
                                            name="pTambahan[]" class="form-control">
                                        <button id="plus-pengarang" type="button" onclick="duplicatePengarang(this)"><i
                                                class="fas fa-plus"></i></button>
                                        <button id="hapus-pengarang" style="display: none;" type="button"
                                            onclick="removePengarang(this)"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="ek3">
                            <div class="card-header">
                                Penerbit
                            </div>
                            <div class="card-body" id="penerbit-body">
                                <div id="penerbit1">
                                    <label for="tempatT">Tempat Terbit</label>
                                    <input type="text" placeholder="Masukan Tempat Terbit" id="tempatT" name="tempatT"
                                        class="form-control" required>
                                </div>
                                <div id="penerbit2">
                                    <label for="penerbit">Penerbit</label>
                                    <input type="text" placeholder="Masukan Penerbit" id="penerbit" name="penerbit"
                                        class="form-control" required>
                                </div>
                                <div id="penerbit3">
                                    <label for="tahunT">Tahun Terbit</label>
                                    <input type="text" placeholder="Masukan Tahun Terbit" id="tahunT" name="tahunT"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="ek4">
                            <div class="card-header">
                                Deskripsi Fisik
                            </div>
                            <div class="card-body" id="DesFisik-body">
                                <div id="DesFisik1">
                                    <label for="jHalaman">Jumlah Halaman</label>
                                    <input type="text" placeholder="Masukan Jumlah Halaman" id="jHalaman"
                                        name="jHalaman" class="form-control">
                                </div>
                                <div id="DesFisik2">
                                    <label for="ilustrasi">Ket. Ilustrasi</label>
                                    <input type="text" placeholder="Masukan Ket. Ilustrasi" id="ilustrasi"
                                        name="ilustrasi" class="form-control">
                                </div>
                                <div id="DesFisik3">
                                    <label for="dimensi">Dimensi</label>
                                    <input type="text" placeholder="Masukan Dimensi" id="dimensi" name="dimensi"
                                        class="form-control">
                                </div>
                                <div id="DesFisik4">
                                    <label for="bahansertaan">bib_Bahan Sertaan</label>
                                    <input type="text" placeholder="Masukan bib_Bahan Sertaan" id="bahansertaan"
                                        name="bahansertaan" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="card" id="ek5">
                            <div class="card-body" id="ForEdisi-body">
                                <div id="ForEdisi1">
                                    <label for="edisi">Edisi</label>
                                    <input type="text" placeholder="Masukan Edisi" id="edisi" name="Edition"
                                        class="form-control">
                                </div>
                                <div id="ForEdisi2">
                                    <div id="subjek-column">
                                        <label for="subjek">Subjek</label>
                                        <input type="text" placeholder="Masukan Subjek" id="subjek" name="Subject[]"
                                            class="form-control">
                                        <button id="plus-subjek" type="button" onclick="duplicateSubjek(this)"><i
                                                class="fas fa-plus"></i></button>
                                        <button id="hapus-subjek" style="display: none;" type="button"
                                            onclick="removeSubjek(this)"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                                <div id="ForEdisi3">
                                    <label for="klasddc">No. Klas DDC</label>
                                    <input type="text" placeholder="Masukan No. Klas DDC" id="klasddc" name="DeweyNo"
                                        class="form-control">
                                </div>
                                <div id="ForEdisi4">
                                    <div id="Edisi4-container">
                                        <label for="No. Panggil">No. Panggil</label>
                                        <input type="text" placeholder="Masukan No. Panggil" id="nopanggil"
                                            name="CallNumber[]" class="form-control">
                                        <button id="plus-noPanggil" type="button" onclick="duplicateNoPanggil(this)"><i
                                                class="fas fa-plus"></i></button>
                                        <button id="hapus-noPanggil" style="display: none;" type="button"
                                            onclick="removeNoPanggil(this)"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                                <div id="ForEdisi5">
                                    <div id="Edisi5-container">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" placeholder="Masukan ISBN" id="isbn" name="ISBN[]"
                                            class="form-control">
                                        <button id="plus-ISBN" type="button" onclick="duplicateISBN(this)"><i
                                                class="fas fa-plus"></i></button>
                                        <button id="hapus-ISBN" style="display: none;" type="button"
                                            onclick="removeISBN(this)"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="ek6">
                            <div class="card-header">
                                Catatan
                            </div>
                            <div class="card-body" id="catatan-body">
                                <div id="catatan1">
                                    <label for="catatan">Catatan</label>
                                    <textarea placeholder="Masukan Jumlah Halaman" id="catatan" name="Note[]"
                                        class="form-control"></textarea>
                                    <button id="plus-catatan" type="button" onclick="duplicateCatatan(this)"><i
                                            class="fas fa-plus"></i></button>
                                    <button id="hapus-catatan" style="display: none;" type="button"
                                        onclick="removeCatatan(this)"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="ek7">
                            <div class="card-body" id="bahasa-body">
                                <div id="bahasa1">
                                    <label for="bahasa">Bahasa</label>
                                    <select name="Languages" id="bahasa" class="form-select">
                                        @foreach ($refitems as $item)
                                        <option>{{$item->Code}} - {{$item->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="bahasa2">
                                    <label for="karya">Bentuk Karya Tulis</label>
                                    <select name="karya" id="karya" class="form-select">
                                        @foreach ($refkarya as $item)
                                        <option>{{$item->Code}} - {{$item->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="bahasa3">
                                    <label for="sasaran">Kelompok Sasaran</label>
                                    <select name="sasaran" id="sasaran" class="form-select">
                                        <option>PDM - Peneliti, Dosen Mahasiswa</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="ek8">
                            <div class="card-header">
                                Lokasi Koleksi Daring
                            </div>
                            <div class="card-body" id="lokasikol-body">
                                <div id="lokasikol1">
                                    <label for="lokasikol-daring">Lokasi Koleksi Daring</label>
                                    <select name="Branch_id" id="lokasikol-daring" class="form-select">
                                        <option selected disabled>Masukan Lokasi Koleksi Daring</option>
                                        @foreach ($branch as $item)
                                        <option {{$item->ID}}>{{$item->Name}}</option>
                                        @endforeach
                                    </select>
                                    <button id="plus-lokasikol_daring" type="button"
                                        onclick="duplicateLokDaring(this)"><i class="fas fa-plus"></i></button>
                                    <button id="hapus-lokasikol_daring" style="display: none;" type="button"
                                        onclick="removeLokDaring(this)"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="box" id="box-simpan-katalog">
                    <label for="tampilOpac"><input type="checkbox" id="tampilOpac" name="tampilOpac"> Tampil di
                        OPAC</label>
                    <div class="box" id="button-simpan-katalog">
                        <button class="simpan-entri-katalog" type="submit" name="action" value="save">Simpan</button>
                        <!-- <button class="salinjudul-entri-katalog">Salin Judul</button>
                        <button class="salinkatalogdari-entri-katalog">Salin Katalog Dari</button> -->
                        <!-- <button class="selesai-entri-katalog" type="submit" name="action"
                            value="finish">Selesai</button> -->
                    </div>
                </div>
            </form>
        </div>

        <div id="kat2" class="bagian">
            <div class="box" id="tambah-Eksemplar">
                <small><button id="popupOpen">Tambah Eksemplar</button></small>
            </div>
            <!-- <section id="koleksi1">
                <div class="container" id="add-filter">
                    <small><button class="dan-button">Dan</button></small>
                    <small><button class="atau-button">Atau</button></small>
                    <small><button class="tambah-button"><i class="fas fa-plus" style="padding-right: 5px;"></i>Tambah
                            Filter</button></small>
                </div>
                <div class="box">
                    <div class="container" id="dropdown">
                        <select name="kriteria" id="kriteria">
                            <option disabled selected>-Pilihan Kriteria-</option>
                            <option value="1">Pilihan</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="container" id="deleteBtn">
                        <small><button class="delete-button"><i class='fas fa-times'></i> Hapus</button></small>
                    </div>
                </div>
            </section>
            <div class="search-box1">
                <button class="searchButton"><i class='fas fa-search'></i> Cari</button>
                <button class="refreshButton"><i class='fas fa-undo'></i> Ulangi</button>
            </div> -->
            <div class="box" id="aksi-koleksi1">
                <span>Aksi</span>
                <select name="aksi" id="aksi" class="left-align">
                    <option value="">Tampil di OPAC</option>
                </select>
                <small><button class="aksiButton"><i class="fas fa-edit"></i> Proses</button></small>
            </div>
            <div class="card">
                <div class="card-header" id="daftar-koleksi1">
                    <div class="box">
                        <span><i class="fas fa-file-alt"> Daftar Koleksi</i></span>
                    </div>
                </div>
                <div class="card-body mx-0 px-0" id="card-koleksi1">
                    <div class="container">
                        <div class="box" id="filter-koleksi1">
                            <span>Tampilkan :</span>
                            <div class="box-koleksi1">
                                <select name="halaman" id="halaman">
                                    <option value="">20 per halaman</option>
                                </select>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <li class="fas fa-download"></li>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">contoh</a></li>
                                    <li><a class="dropdown-item" href="#">contoh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container" id="container-table-koleksi1">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th><input type="checkbox" name="koleksi1-checkbox" id="koleksi1-checkbox"></th>
                                <th>#</th>
                                <th>No Barcode</th>
                                <th>Tanggal Pengadaan</th>
                                <th>No Induk</th>
                                <th>Data Bibliografis</th>
                                <th>Bentuk fIsik</th>
                                <th>Jenis Sumber</th>
                                <th>Kategori</th>
                                <th>Akses</th>
                                <th>Ketersediaan</th>
                                <th>Lokasi Perpustakaan</th>
                                <th>Lokasi Ruang</th>
                                <th>OPAC</th>
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
                </div>
            </div>

            <!-- TAMBAH EKSEMPLAR -->
            <div class="container" id="popupContainer">
                <div id="popupContent">
                    <h4>Tambah Eksemplar | ...</h4>
                    <form action="{{ route('katalog-store') }}" autocomplete="off" method="POST">
                        <div class="col" id="si1">
                            <div id="pilihan-si1">
                                <label for="jEksemplar">Jumlah Eksemplar</label>
                                <input type="text" name="jEksemplar" id="jEksemplar">
                                <button type="button" id="plus-eksemplar" onclick="duplicateEksemplar()"><i
                                        class="fas fa-plus"></i></button>
                            </div>
                            <div id="isi-si1">
                                <label>No Induk/Barcode/RFID <input type="text" name="noInduk" id="noInduk"
                                        required></label>
                                <!-- <label>No Barcode <input type="text" name="noBarcode" id="noBarcode" required readonly></label>
                                <label>No RFID <input type="text" name="noRFID" id="noRFID" required readonly></label> -->
                            </div>
                        </div>
                        <div class="col" id="si2">
                            <label for="tglPengadaan">Tanggal Pengadaan</label>
                            <input type="date" name="tglPengadaan" id="tglPengadaan">
                        </div>
                        <div class="col" id="si3">
                            <label for="jnsSumber">Jenis Sumber</label>
                            <select name="jnsSumber" id="jnsSumber">
                                @foreach ($colsources as $item)
                                <option>{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" id="si4">
                            <label for="nameSumber">Nama Sumber</label>
                            <select name="nameSumber" id="nameSumber">
                                <option></option>
                            </select>
                            <button id="tambah-sumber">Tambah</button>
                            <button id="koreksi-sumber">Koreksi</button>
                        </div>
                        <div class="col" id="si5">
                            <label for="btkFisik">Bentuk fisik</label>
                            <select name="btkFisik" id="btkFisik">
                                @foreach ($colmedias as $item)
                                <option>{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" id="si6">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori">
                                @foreach ($kategori as $item)
                                <option>{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" id="si7">
                            <label for="akses">Akses</label>
                            <select name="akses" id="akses">
                                @foreach ($colrules as $item)
                                <option>{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" id="si8">
                            <label for="lokPerpustakaan">Lokasi Perpustakaan</label>
                            <select name="lokPerpustakaan" id="lokPerpustakaan">
                                @foreach ($loclibrary as $item)
                                <option>{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" id="si9">
                            <label for="lokRuang">Lokasi Ruang</label>
                            <select name="lokRuang" id="lokRuang">
                                @foreach ($location as $item)
                                <option>{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" id="si10">
                            <label for="ketersediaan">Ketersediaan</label>
                            <select name="ketersediaan" id="ketersediaan">
                                @foreach ($colstatus as $item)
                                <option>{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" id="si11">
                            <label for="mataUang">Mata Uang</label>
                            <select name="mataUang" id="mataUang">
                                @foreach ($matauang as $item)
                                <option>{{$item->Currency}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" id="si12">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" id="harga">
                        </div>
                        <div class="col" id="si13">
                            <label for="noPanggil">No. Panggil</label>
                            <input type="text" name="noPanggil" id="noPanggil">
                        </div>
                        <div class="col" id="si14">
                            <button id="save-eksemplar" type="submit">Simpan</button>
                            <button id="popupClose">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="kat3" class="bagian">
            <div class="container" style="display: flex;">
                <div class="box">
                    <div id="imagePreview">
                        @if (session('imageId'))
                        @php
                        $cover = \App\Models\Catalog::find(session('imageId'));
                        @endphp
                        @if ($cover)
                        <img id="previewImage" src="data:image/jpeg;base64,{{ base64_encode($cover->CoverURL) }}"
                            alt="Cover Image">
                        @else
                        <img id="previewImage" src="" alt="No Image Found">
                        @endif
                        @else
                        <img id="previewImage" src="" alt="No Image Found">
                        @endif
                    </div>
                </div>

                <form action="{{ route('katalog-upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" id="uploadForm">
                        <label for="image">Unggah Cover:</label>
                        <div class="input-group">
                            <input type="text" id="selectedFileName" class="form-control" placeholder="Pilih file..."
                                readonly>
                            <span class="input-group-btn">
                                <button type="button" onclick="document.getElementById('imageInput').click()">
                                    <i class="fas fa-folder"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <input type="file" name="image" accept="image/*" id="imageInput" style="display: none;"
                        onchange="updateFileName()">
                    <button type="submit" id="coverUp">Unggah</button>
                </form>

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>

        <div id="kat4" class="bagian">
            <div class="box" id="box-kat4">
                <h4>Unggah Konten Digital</h4>
                <form action="{{ route('katalog-upload') }}" method="POST" enctype="multipart/form-data"
                    id="uploadForm">
                    @csrf
                    <label for="namaFlash">
                        <span>Nama File Format Flash</span>
                        <input type="text" name="namaFlash" id="namaflash" class="form-control" readonly>
                    </label>
                    <input type="file" name="files[]" id="files" multiple style="display: none;"
                        onchange="flashFileName()">
                    <label for="file" id="file-flash">
                        <small><button type="button" id="pilih-berkas"
                                onclick="document.getElementById('files').click()"><i class="fas fa-plus"></i> Pilih
                                berkas</button></small>
                    </label>
                    <div class="box" id="box-berkas">
                        <small><button id="unggah-berkas" onclick="unggahBerkas()"><i
                                    class="fas fa-arrow-circle-up"></i> Unggah
                                semua berkas</button></small>
                    </div>
                </form>
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
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/admin.css') }}">
@stop

@section('js')
<script src="{{ asset('/assets/js/admin.js') }}"></script>
<script>
    function updateInput(val){
        document.getElementById("noBarcode").value = val;
        document.getElementById("noRFID").value = val;
    }
</script>
@stop