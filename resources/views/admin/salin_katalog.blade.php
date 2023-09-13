@extends('adminlte::page')

@section('title', 'Salin Katalog')

@section('content_header')
<h1>Salin Katalog</h1>
@stop

@section('content')
<div class="box" id="body-salin-katalog">
    <div class="box" id="salin_kat">
        <label for="jenisbahan1">
            <span>Jenis Bahan</span>
            <select name="jenisbahan1" id="jenisbahan1">
                <option>contoh</option>
                <option>bruh</option>
            </select>
        </label>
    </div>

    <div class="box" id="sumber_kat">
        <label for="sumber_kat1">
            <span>Sumber</span>
            <select name="sumber_kat1" id="sumber_kat1">
                <option> contoh</option>
            </select>
        </label>
    </div>

    <div class="box" id="format_kat">
        <label for="format_kat1">
            <span>Format</span>
            <select name="format_kat1" id="format_kat1">
                <option> contoh</option>
            </select>
        </label>
    </div>

    <button class="btn btn-primary">Unduh Contoh File</button>
    <br>
    <div class="box" id="salin-kat-button">
        <label for="input-salin_kat">
            Pilih File
            <input type="button" value="Pilih File">
        </label>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/admin.css') }}">
@stop

@section('js')

@stop