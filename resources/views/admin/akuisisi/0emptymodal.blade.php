@extends('adminlte::page')

@section('title', '')

@section('content_header')

<div class="row">
    <div class="col-6">
        <h1></h1>
    </div>
</div>    

@stop

@section('content')

    <section id="akuisisi-page" class="akuisisi-page">
        <div class="entrikoleksi">

            <div class="content">
                <div class="container">

                    <div class="popup-container">
                        <button id="btn-popup" class="btn-popup">Pencet Dong</button>
                        <div id="popup" class="popup">
                            <div class="popup-content">
                                <span class="close-popup">&times;</span>
                                <p>Isi konten</p>
                            </div>
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
<script>
    var modal = document.getElementById("popup");
    var btn = document.getElementById("btn-popup");
    var span = document.getElementsByClassName("close-popup")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

@stop