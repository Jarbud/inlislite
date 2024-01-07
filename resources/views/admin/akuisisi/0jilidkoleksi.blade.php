@extends('adminlte::page')

@section('title', 'Jilid Koleksi')

@section('content_header')

<div class="row">
    <div class="col-6">
        <h1>Jilid Koleksi</h1>
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
                            <h4><i class="fa fa-list-ul" style="padding-right: 10px;"></i>Jilid Koleksi</h4>
                        </div>
                        <div class="entri-jilid">
                            <button type="button" class="btn-entri-jilid">
                                <i class="fas fa-plus" style="padding-right: 5px;"></i>Entri Jilid Baru
                            </button>
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
                            
                                <table class="tabel-x" width="100%">
                                    <tr class="tabel-header">
                                        <th width="3%">#</th>
                                        <th width="10%">ID Jilid</th>
                                        <th width="11%">Tahun Jilid</th>
                                        <th width="13%">No. Panggil Jilid</th>
                                        <th width="43%">Data Bibliografis</th>
                                        <th width="9%">Eksemplar</th>
                                        <th width="11%">Detail</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>0001-2016</td>
                                        <td>0001-2016</td>
                                        <td>(belum diset)</td>
                                        <td>
                                            <strong>Wirata : Warta Informasi Peraturan Perundang-Undangan Bidang Ketenagakerjaan dan Ketransmigrasian</strong>
                                            <br><br>
                                            Penerbitan : Jakarta : Biro Hukum dan KLN. Departemen Tenaga Kerja dan Transmigrasi RI, 2003.
                                        </td>
                                        <td>2</td>
                                        <td>
                                            <button type="button" class="btn-detail">
                                            <i class="fa fa-book" style="padding-right: 5px"></i>Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>0001-2016</td>
                                        <td>0001-2016</td>
                                        <td>(belum diset)</td>
                                        <td>
                                            <strong>Wirata : Warta Informasi Peraturan Perundang-Undangan Bidang Ketenagakerjaan dan Ketransmigrasian</strong>
                                            <br><br>
                                            Penerbitan : Jakarta : Biro Hukum dan KLN. Departemen Tenaga Kerja dan Transmigrasi RI, 2003.
                                        </td>
                                        <td>2</td>
                                        <td>
                                            <button type="button" class="btn-detail">
                                            <i class="fa fa-book" style="padding-right: 5px"></i>Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>0001-2016</td>
                                        <td>0001-2016</td>
                                        <td>(belum diset)</td>
                                        <td>
                                            <strong>Wirata : Warta Informasi Peraturan Perundang-Undangan Bidang Ketenagakerjaan dan Ketransmigrasian</strong>
                                            <br><br>
                                            Penerbitan : Jakarta : Biro Hukum dan KLN. Departemen Tenaga Kerja dan Transmigrasi RI, 2003.
                                        </td>
                                        <td>2</td>
                                        <td>
                                            <button type="button" class="btn-detail">
                                            <i class="fa fa-book" style="padding-right: 5px"></i>Detail
                                            </button>
                                        </td>
                                    </tr>
                                </table> 
                        </div>
                    </div>
            </div>

            <!--<div class="container" id="popup-container">
                <div class="popup-content">
                    <h4>Entri Jilid Baru</h4>
                    <div class="row">
                        <label class="col-sm-3">ID Jilid</label>
                        <div class="col-sm-9">
                            <input type="text" style="width:75%">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3">Tahun Jilid</label>
                        <div class="col-sm-9">
                            <input type="text" style="width:75%">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3">No. Panggil Jilid</label>
                        <div class="col-sm-9">
                            <input type="text" style="width:75%">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3">
                    </div>
                </div>
            </div>-->
            
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
