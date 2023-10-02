@extends('admin/katalog/entrikatalog')

@section('title', 'Koleksi')

@section('bagian')
<section id="kat2">
    <div class="box" id="tambah-Eksemplar">
        <small><button id="popupOpen">Tambah Eksemplar</button></small>
    </div>
    <section id="koleksi1">
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
    </div>
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
            <form action="{{ route('koleksi-store') }}" autocomplete="off" method="POST">
                <div class="col" id="si1">
                    <div id="pilihan-si1">
                        <label for="jEksemplar">Jumlah Eksemplar</label>
                        <input type="text" name="jEksemplar" id="jEksemplar">
                        <button type="button" id="plus-eksemplar" onclick="duplicateEksemplar()"><i
                                class="fas fa-plus"></i></button>
                    </div>
                    <div id="isi-si1">
                        <label>No Induk <input type="text" name="noInduk" id="noInduk" required></label>
                        <label>No Barcode <input type="text" name="noBarcode" id="noBarcode" required></label>
                        <label>No RFID <input type="text" name="noRFID" id="noRFID" required></label>
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
                    <button id="save-eksemplar">Simpan</button>
                    <button id="popupClose">Batal</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection