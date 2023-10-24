@extends('master')

@section('content')
<section id="kunjungan">
    <div id="baratas">
        <strong>Selamat Datang</strong> <br>
        <strong>Di Ruang Baca Umum</strong>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#anggota">Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Non Anggota</a>
                </li>
            </ul>
        </div>
    </div>
    <section id="anggota">
        <p>Silahkan pindai kartu anggota Anda</p>
        <br>
        <form id="nimForm" action="{{route('buku-tamu')}}" method="POST">
            @csrf
            <input type="text" name="NoPengunjung" id="NoPengunjung" placeholder="No.anggota/pengunjung">
            <button type="button" id="checkButton"><i class="bi bi-check2"></i></button>
        </form>
        <div id="mahasiswaData" style="display: none">
            <h2 id="Fullname"></h2>
            <button type="submit" id="simpanButton">Simpan</button>
        </div>
    </section>
</section>
@endsection