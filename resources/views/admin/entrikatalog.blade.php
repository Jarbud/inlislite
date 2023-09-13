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
<script>
    function updateFileName() {
        const input = document.getElementById('imageInput');
        const selectedFileName = document.getElementById('selectedFileName');
        const imagePreview = document.getElementById('previewImage');
        
        if (input.files.length > 0) {
            const fileName = input.files[0].name;
            selectedFileName.value = fileName;

            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);

            const box = document.querySelector('#imagePreview .box');
            if (box) {
                box.style.height = imagePreview.offsetHeight + 'px';
            }

        } else {
            selectedFileName.value = '';
            imagePreview.src = '';
        }
    }

    const popupContainer = document.getElementById('popupContainer');
    const openPopupButton = document.getElementById('popupOpen');
    const closePopupButton = document.getElementById('popupClose');
    const body = document.body;

    function openPopup() {
      popupContainer.style.opacity = '1';
      popupContainer.style.display = 'block';
      body.classList.add('popup-open'); 
    }

    function closePopup() {
      popupContainer.style.opacity = '0';
      setTimeout(() => {
        popupContainer.style.display = 'none';
      }, 300);
      body.classList.remove('popup-open');
    }

    openPopupButton.addEventListener('click', openPopup);
    closePopupButton.addEventListener('click', closePopup);
    popupContainer.addEventListener('click', (e) => {
      if (e.target === popupContainer) {
        closePopup();
      }
    });

    document.querySelector(".plus-pengarang").addEventListener("click", function() {
    // Dapatkan elemen yang ingin Anda duplikasi
    var pengarangDiv = document.getElementById("pengarang");
    var boxpil = document.getElementById("box-ptambahan");
    var clonedElements = pengarangDiv.cloneNode(true).childNodes;
    var clonedElements = boxpil.cloneNode(true).childNodes;

    // Hapus ID dari elemen input yang baru
    for (var i = 0; i < clonedElements.length; i++) {
        if (clonedElements[i].querySelector) {
            var inputElement = clonedElements[i].querySelector("input[name='Author']");
            if (inputElement) {
                inputElement.removeAttribute("id");
            }
        }
    }

    // Sisipkan elemen yang telah terduplikasi ke bawah
    for (var i = 0; i < clonedElements.length; i++) {
        pengarangDiv.parentNode.appendChild(clonedElements[i]);
        
    }
});

</script>
@stop