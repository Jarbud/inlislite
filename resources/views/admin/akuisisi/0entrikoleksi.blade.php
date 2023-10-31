@extends('adminlte::page')

@section('title', 'Entri Koleksi')

@section('content_header')

<div class="row">
    <div class="col-6">
        <h1>Entri Koleksi</h1>
    </div>
</div>    

@stop

@section('content')

<section id="akuisisi-page" class="akuisisi-page">
    <form action="{{ route('0entrikoleksi-store') }}" autocomplete="off" method="POST">
        <div class="entrikoleksi">

            @csrf
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
                                <div class="row">
                                    <div class="col-3">
                                        <label for="">Jenis Bahan</label>
                                    </div>
                                    <div class="col-6">
                                        <div class="select-container">
                                            <select class="select-box form-control" name="ColWorksheet" data-placeholder="Pilih Jenis Bahan" style="width:100%">
                                                <option disabled selected></option>
                                                @foreach ( $worksheets as $item )
                                                <option value="{{$item->Name}}">{{$item->Name}} ({{ $item->Keterangan }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                </div>


                        <div class="box">
                            <h3>Data Pengadaan</h3>
                            <hr>
                            <form action="">

                                <div class="row">
                                    <div class="col-3">
                                        <label for="jumlaheksemplar">Jumlah Eksemplar</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="ColJumEks" style="width:70px"
                                        class="form-control">
                                    </div>
                                </div>

                                <div class="noinduk">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-2">
                                            <label>No Induk</label>
                                            <input type="text" style="width:100%" 
                                            name="ColNoInduk" >
                                        </div>
                                        <div class="col-2">
                                            <label>No Barcode</label>
                                            <input type="text" style="width:100%" class="form-control" 
                                            name="ColNomorBarcode" >
                                        </div>
                                        <div class="col-2">
                                            <label>No RFID</label>
                                            <input type="text" style="width:100%" class="form-control" 
                                            name="ColRFID" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="TanggalPengadaan">Tanggal Pengadaan</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="date" name="ColTanggalPengadaan">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Jenis Sumber</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="Pilih Jenis Sumber" style="width:100%" name="ColSource">
                                            <option></option>
                                            @foreach ( $jenissumber as $item )
                                            <option>{{$item->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Nama Sumber</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="--- Belum Diketahui ---" style="width:100%" name="ColPartner">
                                            <option disabled selected></option>
                                            @foreach ( $partners as $item )
                                            <option>{{ $item->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <a class="btn btn-sm btn-primary btn-tambahkoreksi" id="btn-popup" style="width:37%">Tambah</a>
                                        <a class="btn btn-sm btn-primary btn-tambahkoreksi" style="width:37%">Koreksi</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Bentuk Fisik</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="** Tidak Diketahui **" style="width:100%" Name="ColMedia">
                                            <option disabled selected></option>
                                            @foreach ( $bentukfisik as $item )
                                            <option>{{ $item->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Kategori</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="** Tidak Diketahui **" style="width:100%" Name="ColCategory">
                                            <option disabled selected></option>
                                            @foreach ( $kategori as $item )
                                            <option>{{$item->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Akses</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="** Pilih Akses **" style="width:100%" Name="ColRule">
                                            <option disabled selected></option>
                                            @foreach ( $akses as $item )
                                            <option>{{ $item->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Lokasi Perpustakaan</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="** Pilih Lokasi **" style="width:100%" Name="ColLocationLib">
                                            <option disabled selected></option>
                                            @foreach ( $lokasiperpus as $item )
                                            <option>{{$item->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Lokasi Ruang</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="** Pilih Lokasi **" style="width:100%" Name="ColLocation">
                                            <option disabled selected></option>
                                            @foreach ( $lokasi as $item )
                                            <option>{{$item->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Ketersediaan</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="** Tidak Diketahui **" style="width:100%" Name="ColStatus">
                                            <option disabled selected></option>
                                            @foreach ( $status as $item )
                                            <option>{{ $item->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Mata Uang</label>
                                    </div>
                                    <div class="col-6">
                                        <select class="select-box" data-placeholder="** Tidak Diketahui **" style="width:100%" Name="ColCurrency">
                                            <option disabled selected></option>
                                            @foreach ( $matauang as $item )
                                            <option>{{$item->Currency}} ({{ $item->Description}})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Harga</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" style="width:100%" Name="ColPrice">
                                    </div>
                                    <div class="col-3">
                                        <select class="select-box" data-placeholder="Per eksemplar" style="width:75%" Name="ColPriceType">
                                            <option>Per eksemplar</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Nomor Panggil</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" style="width:100%" name="ColCallNumber">
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox">
                            <label>Tampil di OPAC</label>
                        </div>

                        <div class="button-footer">
                            <input type="submit" value="Simpan" class="btn-simpan">
                            <a class="btn btn-sm btn-primary btn-pilih-judul">Pilih Judul</a>
                            <a class="btn btn-sm btn-primary btn-salin-katalog">Salin Katalog dari</a>
                            <a class="btn btn-sm btn-warning btn-selesai">Selesai</a>
                        </div>


                    </div>                
                </div>
            </div>

            <div class="container">
                <div class="popup-container">
                    <div id="popup" class="popup">
                        <div class="popup-content">
                            <span class="close-popup">&times;</span>
                            <br>
                            <div class="popup-title">
                                <h4>Tambah Nama Sumber</h4>
                            </div>
                            <div class="row">
                                <label class="col-sm-2">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" style="width:90%" Name="PartnerName">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" style="width:90%" Name="PartnerAddress">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2">No. Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" style="width:90%" Name="PartnerPhone">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2">Faks</label>
                                <div class="col-sm-10">
                                    <input type="text" style="width:90%" Name="PartnerFax">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2">Provinsi</label>
                                <div class="col-sm-10">
                                    <input type="text" style="width:90%" Name="PartnerProvince">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2">Kota</label>
                                <div class="col-sm-10">
                                    <input type="text" style="width:90%" Name="PartnerCity">
                                </div>
                            </div>
                            <br>

                            <div class="btn-in-popup" style="float:right">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="cancel" class="btn btn-danger btn-batal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </form>

</section>
</body>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/stylingadmin.css') }}">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>
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
    var modal = document.getElementById("popup");
    var btn = document.getElementById("btn-popup");
    var span = document.getElementsByClassName("close-popup")[0];
    var batal = document.getElementsByClassName("btn-batal")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    batal.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

@stop