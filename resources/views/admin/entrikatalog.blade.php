@extends('adminlte::page')

@section('title', 'Entri Katalog')

@php
$halaman = Request::segment(2);
@endphp

@section('content_header')
<h1>Entri Katalog</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" id="Simpankoleksi" style="border-top: 3px solid #3c8dbc;">
            <div class="container" id="nav1">
                <nav>
                    <ul>
                        <li><a href="{{ route('katalog') }}">Katalog</a></li>
                        <li><a href="{{ route('koleksi')}}">Koleksi</a></li>
                        <li><a href="{{ route('upload.form') }}">Cover</a></li>
                        <li><a href="{{ route('kontendigital') }}">Konten Digital</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="card-body" id="entriDrop">
            @yield('bagian')
        </div>
    </div>
</div>
@section('bagian')
@if($halaman === 'katalog')
@include('admin.katalog1')
@elseif($halaman === 'koleksi')
@include('admin.koleksi1')
@elseif($halaman === 'upload')
@include('admin.cover1')
@elseif($halaman === 'kontendigital')
@include('admin.kontenDigital1')
@endif
@endsection
@stop



@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/admin.css') }}">
@stop

@section('js')
<link rel="stylesheet" href="{{ asset('/assets/js/admin.js') }}">
@stop