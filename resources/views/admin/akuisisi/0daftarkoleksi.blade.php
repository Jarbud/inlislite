@extends('adminlte::page')

@section('title', 'Daftar Koleksi')

@section('content_header')

<div class="row">
    <div class="col-6">
        <h1>Daftar Koleksi</h1>
    </div>
</div>

@stop

@section('content')

    <section id="akuisisi-page" class="akuisisi-page">
        <div class="akuisisi">
            <div class="content">

                    <div class="kriteria-box">
                        <div class="kriteria-header">
                            <div class="row">
                                <div class="col-6 btnonleft">
                                    <button type="button" class="btn-dan">Dan</button>
                                    <button type="button" class="btn-atau">Atau</button>
                                </div>
                                <div class="col-6 btnonright">
                                    <button type="button" class="btn-tambahfilter">
                                        <i class="fas fa-plus" style="padding-right: 5px;"></i>
                                        Tambah Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="kriteria-select">
                            <div class="row">
                                <div class="col-3">
                                    <select class="select-box" data-placeholder="Pilih Kriteria">
                                        <option disabled selected></option>
                                    </select>
                                </div>
                                <div class="col-9">
                                    <button type="button" class="btn-hapus">
                                        <i class="fas fa-times" style="padding-right: 5px;"></i>
                                        Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-under-box">
                        <button type="button" class="btn-cari">
                            <i class="fas fa-search" style="padding-right: 5px;"></i>Cari</button>
                        <button type="button" class="btn-ulangi">
                            <i class="fas fa-undo" style="padding-right: 5px;"></i>Ulangi</button>
                    </div>

                    <div class="aksi-koleksi">
                        <div class="row">
                            <div class="col-1">
                                <label>Aksi</label>
                            </div>
                            <div class="col-3">
                                <select class="select-box" data-placeholder="Pilih Aksi">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-8">
                                <button type="button" class="btn-proses">
                                    <i class="fas fa-edit" style="padding-right: 5px;"></i>Proses
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="koleksi-container">
                        <div class="header-container">
                            <h4><i class=" fa fa-list-ul" style="padding-right: 10px;"></i>Daftar Koleksi</h4>
                        </div>
                        <div class="tampil-koleksi">
                                    <label>Tampilkan :</label>
                                    <select class="select-tampil">
                                        <option>10 per halaman</option>
                                    </select>
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <li class="fas fa-download"></li>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">contoh</a></li>
                                        <li><a class="dropdown-item" href="#">contoh</a></li>
                                    </ul>
                        </div>
                        <div class="tabel-koleksi" id="tabel-koleksi">
                            
                                <table class="tabel-x">
                                    <tr class="tabel-header">
                                        <th><input type="checkbox" name="checkbox-all-koleksi" id="checkbox-all-koleksi"></th>
                                        <th>#</th>
                                        <th>No Barcode</th>
                                        <th>Tanggal Pengadaan</th>
                                        <th>No. Induk</th>
                                        <th>Data Bibliografis</th>
                                        <th>Bentuk Fisik</th>
                                        <th>Jenis Sumber</th>
                                        <th>Kategori</th>
                                        <th>Akses</th>
                                        <th>Ketersediaan</th>
                                        <th>Lokasi Perpustakaan</th>
                                        <th>Lokasi Ruang</th>
                                        <th>OPAC</th>
                                    </tr>

                                    @foreach ( $daftarkoleksi as $item ) 
                                        <!--@foreach ( $daftarkatalog as $katalog) 
                                            @if ($loop->first)-->
                                            <tr>
                                                <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox-single-koleksi"></td>
                                                <td>{{ $item->ID }}</td>
                                                <td>{{ $item->NomorBarcode }}</td>
                                                <td>{{ $item->TanggalPengadaan }}</td>
                                                <td>{{ $item->NoInduk }}</td>
                                                <td>
                                                    <strong>Data Bibliografis</strong>
                                                    <br><br>
                                                    Data Bibliografis
                                                </td>
                                                <td>{{ $item->Media_id }}</td>
                                                <td>{{ $item->Source_id }}</td>
                                                <td>{{ $item->Category_id }}</td>
                                                <td>{{ $item->Rule_id }}</td>
                                                <td>{{ $item->Status_id }}</td>
                                                <td>{{ $item->Location_Library_id }}</td>
                                                <td>{{ $item->Location_id }}</td>
                                                <td>OPAC???</td>
                                            </tr>
                                            <!--@endif
                                        @endforeach-->
                                    @endforeach
                                    

                                    <!--<tr>
                                        <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox-single-koleksi"></td>
                                        <td>1</td>
                                        <td>0000000039</td>
                                        <td>7 Apr 2016</td>
                                        <td>0000000039</td>
                                        <td>
                                            <strong>Tip dan Trik : Memodifikasi Tampilan Windows / Happy Chandraleka</strong>
                                            <br><br>
                                            Jakarta : ElexMediaKomputendo, 2005.<br>
                                            x, 105 hlm, :Ilus ; 25 cm<br>
                                            Monograf
                                        </td>
                                        <td>Buku</td>
                                        <td>Pembelian</td>
                                        <td>Koleksi Umum</td>
                                        <td>Dapat dipinjam</td>
                                        <td>Tersedia</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox-single-koleksi"></td>
                                        <td>2</td>
                                        <td>034/PN/2016</td>
                                        <td>4 Apr 2016</td>
                                        <td>034/PN/2016</td>
                                        <td>
                                            <strong>Membuat Film Indie Itu Gampang / Askurifai Baksin; Buku editor, Edi Warsidi; ilustrator, Sri Nurhaeni</strong>
                                            <br><br>
                                            Bandung : : Katarsis, 2003.<br>
                                            xx, 124hlm.:ilus,;25cm.<br>
                                            Monograf
                                        </td>
                                        <td>Buku</td>
                                        <td>Pembelian</td>
                                        <td>Koleksi Umum</td>
                                        <td>Dapat dipinjam</td>
                                        <td>Tersedia</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox-single-koleksi"></td>
                                        <td>3</td>
                                        <td>124-PD/B.16</td>
                                        <td>1 Apr 2016</td>
                                        <td>124-PD/B.16</td>
                                        <td>
                                            <strong>Pelangi Jogja : Sebuah Cerita / Hadi P; editor, Sanusi</strong>
                                            <br><br>
                                            Cet. 1</br>
                                            Yogyakarta : BPAD DIY, 2016.<br>
                                            162hlm,:Ilus;21cm.</br>
                                            Monograf
                                        </td>
                                        <td>E-Resource</td>
                                        <td>Hadiah/Hibah</td>
                                        <td>Koleksi Umum</td>
                                        <td>Baca di tempat</td>
                                        <td>Tersedia</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox-single-koleksi"></td>
                                        <td>4</td>
                                        <td>01996700001</td>
                                        <td>25 Juli 2016</td>
                                        <td>01996700001</td>
                                        <td>
                                            <strong>Judul</strong>
                                            <br><br>
                                            Tes (a) : (b) : (c) : : :
                                        </td>
                                        <td>Anu</td>
                                        <td>Hadiah</td>
                                        <td>Koleksi Umum</td>
                                        <td>Baca di tempat</td>
                                        <td>Tersedia</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox"></td>
                                        <td>5</td>
                                        <td>01996700001</td>
                                        <td>25 September 2023</td>
                                        <td>01996700001</td>
                                        <td>
                                            <strong>Judul</strong>
                                            <br><br>
                                            Tes (a) : (b) : (c) : : :
                                        </td>
                                        <td>Anu</td>
                                        <td>Hadiah</td>
                                        <td>Koleksi Umum</td>
                                        <td>Baca di tempat</td>
                                        <td>Tersedia</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>-->
                                </table>
                            
                        </div>
                    </div>

            </div>
            
        </div>
    </section>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/stylingadmin.css') }}">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script 
    src="https://code.jquery.com/jquery-3.7.1.js" 
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
    crossorigin="anonymous">
</script>
<script 
    src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.js" 
    integrity="sha512-XdbznNC/1XvfugL5BhgskCqEpetHgoaYVwwEhM8BE8ssXGrDL/vJw6K0BSvxy6znDIP/ZIXbrlTdQxsrkaraPA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer">
</script>
<link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.css" 
    integrity="sha512-24Ao00m10BsghXEKEp6Eg4lcX309kvlkFJhewN66I6+8HT6v4YmIkFHWQTUf6/8VuQXzCUV6ol8zJAg4hLFumg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
/>

<script>
            $(document).ready(function() {
                $(".select-box").chosen( {
                    width:"100%", 
                    no_results_text: "Maaf, tidak ada hasil untuk",
                    allow_single_deselect: true,
                });
            });

</script>

<script>
    $('#checkbox-all-koleksi').click(function(event) {
        if(this.checked) {
            $(':checkbox').each(function() {
                this.checked = true;
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;
            });
        }
    });
</script>

<script>

@stop
