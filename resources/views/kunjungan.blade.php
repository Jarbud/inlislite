@extends('master')

@section('content')
<section id="kunjungan">
    <div id="baratas">
        <strong>Selamat Datang</strong> <br>
        <strong>Di Ruang Baca Umum</strong>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#anggota" onclick="showTab('anggota')">Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nonAnggota" onclick="showTab('nonAnggota')">Non Anggota</a>
                </li>
            </ul>
        </div>
    </div>
    <section id="anggota-content">
        <p>Silahkan pindai kartu anggota Anda</p>
        <br>
        <form method="GET" action="{{route('bukutamu')}}">
            @csrf
            <label for="no_pengenal" style="margin-right: 10px">No Pengenal </label>
            <input type="text" name="no_pengenal" id="codeunik">
            <button type="submit"><i class="bi bi-check2"></i></button>
        </form>

        @if (isset($user))
        <p>Name: {{ $user['name'] }}</p>
        <p>Photo: {{ $user['photo'] }}</p>
        <form method="POST" action="{{route('bukutamu.store')}}">
            @csrf
            <input type="hidden" name="no_pengenal" value="{{ $user['no_pengenal'] }}">
            <input type="hidden" name="name" value="{{ $user['name'] }}">
            <button type="submit">Simpan</button>
        </form>
        @endif
    </section>

</section>
@endsection