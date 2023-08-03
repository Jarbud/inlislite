@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ruang Baca Umum</h1>
@stop

@section('content')
    <div class="container">
        <div class="sub-navigation">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Bacaan saat ini</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Arsip</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="min-h-[350px] w-full lg:max-w-full lg:flex !rounded-xl shadow-[-2px_-1px_73px_4px_rgba(219,219,219,0.22)]">
        <div class="h-48 w-48 lg:h-auto lg:w-[250px] flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" 
        title="Ensiklopedia Anak Cerdas : Olahraga ">
            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
            <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" 
            style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
        </span>
        <img alt="Ensiklopedia Anak Cerdas : Olahraga " 
        srcset="/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F211201025936D8HgL5tRVl.jpg&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F211201025936D8HgL5tRVl.jpg&amp;w=640&amp;q=75 2x" 
        src="/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F211201025936D8HgL5tRVl.jpg&amp;w=640&amp;q=75" 
        decoding="async" 
        data-nimg="intrinsic" 
        class="!w-full !h-full !object-cover" 
        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
        <noscript>

        </noscript>
    </span>
</div>
<div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
    <div class="flex items-center">
        <ul class="!pl-[0] !mt-[5px]">
            <li class="text-green-700 !font-semibold !line-clamp-1 !space-x-2">
                <span>Tanggal Post: 2021-12-01</span>
            </li>
        </ul>
    </div>
    <div class="text-gray-900 font-bold text-xl mb-2">
        <a href="/buku-baru/ensiklopedia-anak-cerdas-olahraga">
            <h3 class="line-clamp-2">
                Ensiklopedia Anak Cerdas : Olahraga 
            </h3></a></div><div class="!line-clamp-6 h-full flex-grow mb-2">...
                
            </div><div class="flex items-center"><ul class="!pl-[0] !mt-[5px]"><li class="text-primary !font-semibold !line-clamp-1 !space-x-2"><i class="flaticon-checked"></i><span>Abstrak</span></li><li class="text-primary !font-semibold !line-clamp-1 !space-x-2"><i class="flaticon-user"></i><span>Maincent, Geraldine (pengarang) Arlene, Alexandre (ilustrator) Isma Soekoto (pengalih bahasa) Aprillia Wirahma (penyunting)</span></li><li class="text-primary !font-semibold !line-clamp-1 !space-x-2"><i class="flaticon-calendar"></i><span>2019</span></li></ul></div></div></div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop



@section('js')

@stop