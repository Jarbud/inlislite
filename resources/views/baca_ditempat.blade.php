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
                        <a class="nav-link active" aria-current="page" href="#">Arsip</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <div class="library-story-item">
            <div class="on-story-preview cover cover-lg">
                <div class="fixed-ratio fixed-ratio-cover">
                    <img src="###" alt="">
                    <div class="story-overlay on-story-hover" style="display: none;">
                    <div class="overlay-bg"></div>
                    <div class="quick-controls clearfix">
                        <button class="btn btn-text on-delete-story">
                            <span class="fa fa-trash fa-wp-neutral-5 " aria-hidden="true" style="font-size:20px;"></span>
                        </button>
                    </div>
                </div>
                <div class="overlay-container">
                    <button class="btn btn-block btn-glass btn-left-align on-read">Lanjutkan Membaca</button>
                    <button class="btn btn-block btn-glass btn-left-align on-details">Detail</button>
                    <button class="btn btn-block btn-glass btn-left-align on-archive-story">Arsip</button>
                    <button data-story-id="290998826" class="btn btn-block btn-glass btn-left-align on-reading-list btn-story-lists on-lists-add-clicked">Tambahkan ke daftar</button>
                </div>
            </div>
        </div>
        <span class="percentage-read">
            <span class="percentage-position" style="width:98.77%"></span>
        </span>

        <div class="content">
            <div class="info">
                <strong>BEYOND THE HORIZON</strong>
                <small>mozachee</small>
            </div>
            <a href="/user/mozachee" class="avatar avatar-sm on-navigate" title="mozachee's Profile">
            <img src="###" alt=""></a>
            <div class="meta">
                <span> <span class="fa fa-view fa-wp-neutral-2 " aria-hidden="true" style="font-size:16px;"></span> 1.9M </span>
                <span> <span class="fa fa-vote fa-wp-neutral-2 " aria-hidden="true" style="font-size:16px;"></span> 339K </span>
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop



@section('js')

@stop