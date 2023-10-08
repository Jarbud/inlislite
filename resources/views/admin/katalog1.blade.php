@extends('admin/entrikatalog')

@section('title', 'Katalog')

@section('bagian')
<section id="kat1">
    <form action="{{ route('katalog-store') }}" autocomplete="off" method="POST">
        @csrf
        <div class="container" id="button-kat">
            <button class="simpan-button">Simpan</button>
            <button class="salin-judul">Salin Judul</button>
            <button class="salin-katalog">Salin Katalog dari</button>
            <button class="selesai-button">Selesai</button>
        </div>
        <hr>
        <div class="dropdown" id="dropbahan">
            <label for="jenis-bahan">Jenis Bahan</label>
            <select name="jenis-bahan" id="jenis-bahan">
                <option disabled selected>-Jenis Bahan-</option>
                @foreach ( $jenisBahan as $item )
                <option>{{$item->Name}} ({{ $item->Keterangan }})</option>
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
                            <label for="utamaj" style="margin-left: 71px">
                                Judul Utama
                                <input type="text" placeholder="Masukan Judul Utama" id="utamaj" name="Title"
                                    class="form-control">
                            </label>
                            <label for="sandang">Diawali Kata Sandang
                                <select name="sandang" id="sandang" class="form-select">
                                    <option>-Tidak Diawali-</option>
                                    @foreach ( $kataSandang as $item )
                                    <option>{{$item->Name}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="container" id="right">
                            <label for="anakj" style="margin-left: 82px">
                                Anak Judul
                                <input type="text" placeholder="Masukan Anak Judul" id="anakj" name="Title"
                                    class="form-control">
                            </label>
                            <label for="pjawab">
                                Penanggung Jawab
                                <input type="text" placeholder="Masukan Penanggung Jawab" id="pjawab"
                                    name="PenanggungJawab" class="form-control">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card" id="ek2">
                    <div class="card-header">
                        Pengarang
                    </div>
                    <div class="card-body">
                        <div class="right-align">
                            <div id="top-column">
                                <label for="pUtama">
                                    Pengarang Utama
                                    <select name="pUtama" id="pUtama" class="form-select">
                                        <option value="">Nama Orang</option>
                                    </select>
                                    <input type="text" placeholder="Masukan Pengarang Utama" id="pUtama" name="Author"
                                        class="form-control">
                                    <button><i class="fas fa-th-list"></i></button>
                                </label>
                            </div>
                            <div class="box">
                                <small><label for="depan"><input type="radio" name="depan" id="depan"> Nama
                                        Depan</label></small>
                                <small><label for="belakang"><input type="radio" name="belakang" id="belakang"> Nama
                                        Belakang</label></small>
                                <small><label for="keluarga"><input type="radio" name="keluarga" id="keluarga"> Nama
                                        Keluarga</label></small>
                            </div>
                            <div id="pengarang">
                                <label for="pTambahan">
                                    Pengarang Tambahan
                                    <select name="pTambahan" id="pTambahan" class="form-select">
                                        <option value="">Nama Orang</option>
                                    </select>
                                    <input type="text" placeholder="Masukan Pengarang Tambahan" id="pTambahan"
                                        name="Author" class="form-control">
                                    <button id="list-pengarang" type="button"><i class="fas fa-th-list"></i></button>
                                    <button id="plus-pengarang" type="button"><i class="fas fa-plus"></i></button>
                                    <button id="hapus-pengarang" style="display: none;" type="button"><i
                                            class="fas fa-trash"></i></button>
                                </label>
                            </div>
                            <div class="box" id="box-ptambahan">
                                <small><label for="depan"><input type="radio" name="depan" id="depan"> Nama
                                        Depan</label></small>
                                <small><label for="belakang"><input type="radio" name="belakang" id="belakang"> Nama
                                        Belakang</label></small>
                                <small><label for="keluarga"><input type="radio" name="keluarga" id="keluarga"> Nama
                                        Keluarga</label></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" id="ek3">
                    <div class="card-header">
                        Penerbit
                    </div>
                    <div class="card-body">
                        <div class="right-align">
                            <label for="tempatT">
                                Tempat Terbit
                                <input type="text" placeholder="Masukan Tempat Terbit" id="tempatT"
                                    name="PublishLocation" class="form-control">
                            </label>
                            <label for="penerbit">
                                Penerbit
                                <input type="text" placeholder="Masukan Penerbit" id="penerbit" name="Publisher"
                                    class="form-control">
                            </label>
                            <label for="tahunT">
                                Tahun Terbit
                                <input type="text" placeholder="Masukan Tahun Terbit" id="tahunT" name="PublishYear"
                                    class="form-control">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card" id="ek4">
                    <div class="card-header">
                        Deskripsi Fisik
                    </div>
                    <div class="card-body">
                        <div class="right-align">
                            <label for="tempatT">
                                Jumlah Halaman
                                <input type="text" placeholder="Masukan Jumlah Halaman" id="tempatT" name="tempatT"
                                    class="form-control">
                            </label>
                            <label for="ilustrasi">
                                Ket. Ilustrasi
                                <input type="text" placeholder="Masukan Ket. Ilustrasi" id="ilustrasi" name="ilustrasi"
                                    class="form-control">
                            </label>
                            <label for="dimensi">
                                Dimensi
                                <input type="text" placeholder="Masukan Dimensi" id="dimensi" name="dimensi"
                                    class="form-control">
                            </label>
                            <label for="bahansertaan">
                                bib_Bahan Sertaan
                                <input type="text" placeholder="Masukan bib_Bahan Sertaan" id="bahansertaan"
                                    name="bahansertaan" class="form-control">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card" id="ek5">
                    <div class="card-body">
                        <div class="ForEdisi">
                            <label for="edisi">
                                Edisi
                                <input type="text" placeholder="Masukan Edisi" id="edisi" name="Edition"
                                    class="form-control">
                            </label>
                        </div>
                        <div class="right-align">
                            <div class="subjek-column">
                                <label for="subjek">
                                    Subjek
                                    <select name="Subject" id="subjek" class="form-select">
                                        <option value="">Nama Orang</option>
                                    </select>
                                    <input type="text" placeholder="Masukan Pengarang Utama" id="pUtama" name="pUtama"
                                        class="form-control">
                                    <button id="list-subjek"><i class="fas fa-th-list"></i></button>
                                    <button id="plus-subjek"><i class="fas fa-plus"></i></button>
                                </label>
                            </div>
                            <div class="box">
                                <small><label for="depan"><input type="radio" name="depan" id="depan"> Nama
                                        Depan</label></small>
                                <small><label for="belakang"><input type="radio" name="belakang" id="belakang"> Nama
                                        Belakang</label></small>
                                <small><label for="keluarga"><input type="radio" name="keluarga" id="keluarga"> Nama
                                        Keluarga</label></small>
                            </div>
                        </div>
                        <div class="ForEdisi">
                            <label for="klasddc">
                                No. Klas DDC
                                <input type="text" placeholder="Masukan No. Klas DDC" id="klasddc" name="klasddc"
                                    class="form-control">
                            </label>
                        </div>
                        <div id="ForEdisi1">
                            <label for="No. Panggil">
                                No. Panggil
                                <input type="text" placeholder="Masukan No. Panggil" id="nopanggil" name="CallNumber"
                                    class="form-control">
                                <button id="plus-noPanggil"><i class="fas fa-plus"></i></button>
                            </label>
                            <label for="isbn">
                                ISBN
                                <input type="text" placeholder="Masukan ISBN" id="isbn" name="ISBN"
                                    class="form-control">
                                <button id="plus-ISBN"><i class="fas fa-plus"></i></button>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card" id="ek6">
                    <div class="card-header">
                        Catatan
                    </div>
                    <div class="card-body">
                        <div class="right-align">
                            <div id="label-catatan">
                                <label for="catatan">
                                    Catatan
                                    <textarea placeholder="Masukan Jumlah Halaman" id="catatan" name="Note"
                                        class="form-control"></textarea>
                                    <button id="plus-catatan"><i class="fas fa-plus"></i></button>
                                </label>
                            </div>
                            <div class="box">
                                <small><label for="abstrak"><input type="radio" name="abstrak" id="abstrak">
                                        Abstrak /
                                        Anotasi</label></small>
                                <small><label for="disertasi"><input type="radio" name="disertasi" id="disertasi">
                                        Catatan Disertasi</label></small>
                                <small><label for="blibliografi"><input type="radio" name="blibliografi"
                                            id="blibliografi">
                                        Catatan Bibliografi</label></small>
                                <small><label for="isi"><input type="radio" name="isi" id="isi"> Rincian
                                        Isi</label></small>
                                <small><label for="umum"><input type="radio" name="umum" id="umum"> Catatan
                                        Umum</label></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" id="ek7">
                    <div class="card-body">
                        <div class="right-align">
                            <label for="bahasa">
                                Bahasa
                                <select name="Languages" id="bahasa" class="form-select">
                                    @foreach ($refitems as $item)
                                    <option>{{$item->Code}} - {{$item->Name}}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label for="karya">
                                Bentuk Karya Tulis
                                <select name="karya" id="karya" class="form-select">
                                    @foreach ($refkarya as $item)
                                    <option>{{$item->Code}} - {{$item->Name}}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label for="sasaran">
                                Kelompok Sasaran
                                <select name="sasaran" id="sasaran" class="form-select">
                                    <option>PDM - Peneliti, Dosen Mahasiswa</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card" id="ek8">
                    <div class="card-header">
                        Lokasi Koleksi Daring
                    </div>
                    <div class="card-body">
                        <div class="right-align">
                            <label for="lokasikol-daring">
                                Lokasi Koleksi Daring
                                <input type="text" placeholder="Masukan Lokasi Koleksi Daring" id="lokasikol-daring"
                                    name="lokasikol-daring" class="form-control">
                                <button id="plus-lokasikol_daring"><i class="fas fa-plus"></i></button>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="box" id="box-simpan-katalog">
            <label for="tampilOpac"><input type="checkbox" id="tampilOpac" name="tampilOpac"> Tampil di
                OPAC</label>
            <div class="box" id="button-simpan-katalog">
                <button class="simpan-entri-katalog" type="submit">Simpan</button>
                <button class="salinjudul-entri-katalog">Salin Judul</button>
                <button class="salinkatalogdari-entri-katalog">Salin Katalog Dari</button>
                <button class="selesai-entri-katalog">Selesai</button>
            </div>
        </div>
    </form>
</section>
@endsection