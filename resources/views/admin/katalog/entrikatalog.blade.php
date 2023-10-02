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
                        <li id="menu-katalog"><a href="{{ route('katalog') }}">Katalog</a></li>
                        <li id="menu-koleksi"><a href="{{ route('koleksi')}}">Koleksi</a></li>
                        <li id="menu-cover"><a href="{{ route('upload.form') }}">Cover</a></li>
                        <li id="menu-kontendigital"><a href="{{ route('kontendigital') }}">Konten Digital</a></li>
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
@include('admin.katalog.katalog1')
@elseif($halaman === 'koleksi')
@include('admin.katalog.koleksi1')
@elseif($halaman === 'upload')
@include('admin.katalog.cover1')
@elseif($halaman === 'kontendigital')
@include('admin.katalog.kontenDigital1')
@endif
@endsection
@stop



@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/admin.css') }}">
@stop

@section('js')
<script src="{{ asset('/assets/js/admin.js') }}"></script>
@stop