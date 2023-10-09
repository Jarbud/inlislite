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
    <table class="table table-striped table-bordered" id="histori-table">
        <thead>
            <th>#</th>
            <th>Waktu</th>
            <th>User ID</th>
            <th>IP</th>
            <th>Keyword</th>
            <th>Jenis Bahan</th>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" id="histori-id" name="histori-id" style="width: 63px"></td>
                <td><input type="text" id="histori-time" name="histori-time"></td>
                <td><input type="text" id="histori-userid" name="histori-userid"></td>
                <td><input type="text" id="histori-ip" name="histori-ip"></td>
                <td><input type="text" id="histori-key" name="histori-key"></td>
                <td><input type="text" id="histori-bhn" name="histori-bhn"></td>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->ID}}</td>
                <td>{{$item->waktu}}</td>
                <td>{{$item->User_id}}</td>
                <td>{{$item->ip}}</td>
                <td>{{$item->keyword}}</td>
                <td>{{$item->jenis_bahan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
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