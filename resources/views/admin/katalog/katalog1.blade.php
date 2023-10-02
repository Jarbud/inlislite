@extends('admin/katalog/entrikatalog')

@section('title', 'Katalog')

@section('bagian')
<section id="kat1">
    <form action="{{ route('katalog-store') }}" autocomplete="off" method="POST">
        @csrf
        <div class="container" id="button-kat">
            <button class="simpan-button" type="submit" name="action" value="save">Lanjutkan</button>
            <button class="salin-judul">Salin Judul</button>
            <button class="salin-katalog">Salin Katalog dari</button>
            <button class="selesai-button" type="submit" name="action" value="finish">Selesai</button>
        </div>
        <hr>
        <div class="dropdown" id="dropbahan">
            <label for="jenis-bahan">Jenis Bahan</label>
            <select name="jenis-bahan" id="jenis-bahan">
                <option disabled selected>-Jenis Bahan-</option>
                @foreach ( $jenisBahan as $item )
                <option value="{{ $item->ID }}">{{$item->Name}} ({{ $item->Keterangan }})</option>
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
                                <input type="text" placeholder="Masukan Judul Utama" id="judul_utama" name="judul_utama"
                                    class="form-control" required>
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
                                <input type="text" placeholder="Masukan Anak Judul" id="anak_judul" name="anak_judul"
                                    class="form-control">
                            </div>
                            <div id="right2">
                                <label for="pjawab">Penanggung Jawab</label>
                                <input type="text" placeholder="Masukan Penanggung Jawab" id="pjawab" name="pjawab"
                                    class="form-control">
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
                                <input type="text" placeholder="Masukan Pengarang Utama" id="pUtama" name="pUtama"
                                    class="form-control" required>
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
                            <input type="text" placeholder="Masukan Jumlah Halaman" id="jHalaman" name="jHalaman"
                                class="form-control">
                        </div>
                        <div id="DesFisik2">
                            <label for="ilustrasi">Ket. Ilustrasi</label>
                            <input type="text" placeholder="Masukan Ket. Ilustrasi" id="ilustrasi" name="ilustrasi"
                                class="form-control">
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
                                <input type="text" placeholder="Masukan No. Panggil" id="nopanggil" name="CallNumber[]"
                                    class="form-control">
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
                            <button id="plus-lokasikol_daring" type="button" onclick="duplicateLokDaring(this)"><i
                                    class="fas fa-plus"></i></button>
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
                <button class="salinjudul-entri-katalog">Salin Judul</button>
                <button class="salinkatalogdari-entri-katalog">Salin Katalog Dari</button>
                <button class="selesai-entri-katalog" type="submit" name="action" value="finish">Selesai</button>
            </div>
        </div>
    </form>
</section>
@endsection