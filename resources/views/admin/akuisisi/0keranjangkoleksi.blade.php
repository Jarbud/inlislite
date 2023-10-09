@extends('adminlte::page')

@section('title', 'Keranjang Koleksi')

@section('content_header')

<div class="row">
    <div class="col-6">
        <h1>Keranjang Koleksi</h1>
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
                            <h4><i class="fas fa-file-alt" style="padding-right: 10px;"></i>Keranjang Koleksi</h4>
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
                                    <tr>
                                        <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox-single-koleksi"></td>
                                        <td>1</td>
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
                                    <tr>
                                        <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox-single-koleksi"></td>
                                        <td>2</td>
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
                                    <tr>
                                        <td><input type="checkbox" name="checkbox-single-koleksi" id="checkbox-single-koleksi"></td>
                                        <td>3</td>
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

<!--checkbox-->
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

@stop
