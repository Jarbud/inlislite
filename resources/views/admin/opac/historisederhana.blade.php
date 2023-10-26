@extends('adminlte::page')

@section('title', 'Entri Katalog')

@section('content_header')
<h1>Histori Pencarian Sederhana</h1>
@stop

@section('content')
<div class="box" id="histori">
    <hr style="padding-bottom: 5px">
    <div class="box" id="histori-header">
        <i class="fas fa-file-alt"> Histori Pencarian Sederhana</i>
    </div>
    <div class="box" id="histori-pil">
        <span>Tampilkan :</span>
        <select name="page" id="page">
            <option value="10">10 per halaman</option>
            <option value="50">50 per halaman</option>
            <option value="100">100 per halaman</option>
        </select>
    </div>
    <div id="table-data">
        @include('admin/opac/pagination_data')
    </div>
    <div class="box" id="histori-refresh">
        <button id="historirefresh"><i class="fas fa-redo"> Segarkan Kembali</i></button>
    </div>
    <div class="box" id="histori-page">
        {{$data->links()}}
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/opac.css') }}">
@stop

@section('js')
<script src="{{ asset('/assets/js/opac.js') }}"></script>
@stop