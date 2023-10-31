@extends('adminlte::page')

@section('title', 'Import Data Dari Excel')

@section('content_header')

<div class="row">
    <div class="col-6">
        <h1>Import Data Dari Excel</h1>
    </div>
</div>

@stop

@section('content')

    <section id="akuisisi-page" class="akuisisi-page">
        <div class="importexcel">
            <div class="content">
                <div class="container">
                    <div class="collections-form">
                        <div class="content-header">
                            <div class="unduh-template">
                                <label>Template :</label>
                                <a href="assets/img/sample_data_koleksi_AACR.xlsx" class="btn btn-unduh" download>Unduh Template</a>
                            </div>
                        </div>
                        <div class="import-wrp">
                            <div class="file-name">
                                (Nama File)
                            </div>
                            <div class="file-import">
                                <label for="fileimport">
                                    <i class="fas fa-folder"></i>
                                    Browse
                                </label>
                                <input type="file" id="fileimport">
                            </div>
                        </div>
                        <div class="btn-wrp">
                            <!--<div class="remove">
                                <button type="button" class="btnRemove" id="btnRemove" >Remove</button>
                            </div>-->
                            <div class="proses">
                                <button type="button" class="btnProses">Proses</button>
                            </div>
                        </div>
                        <div class="syarat-import">
                            <h3>Informasi Penggunaan Import Excel :</h3>
                            <ul>
                                <li>Pastikan formart Tanggal Pengadaan sesuai dengan Template Excel yang disediakan</li>
                                <li>Jumlah data pada excel maksimal 200 data, jika melebihi batas yang ditentukan akan ditolak</li>
                                <li>Jika jumlah data yang akan diimport melebihi 200 data, sebaiknya menggunakan <a href="https://www.youtube.com/watch?v=c9rerOVIoEg">aplikasi pendukung</a></li>
                            </ul>
                        </div>
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
<script src="js/jquery-latest.min.js"></script>
<script>
    $(function () 
    {
        $("#fileimport").change(function(event) {
            var x = event.target.files[0].name
            $(".file-name").text(x)
        });
    });
</script>

<!--<script>
    $(document).ready(function () 
    {
        $('#btnRemove').on('click', function() {
            $('#file-name').val('(Nama File)');
        });
    });
</script>-->
<!--<script>
    $(document).ready(function () {
        $('#btnRemove').on('click', function(e) {
            var $el= $('#file-name');
            $el.wrap('<div>').closest('div').get(0).reset();
            $el.unwrap();
        });
    });
</script>-->
@stop