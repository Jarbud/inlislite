@extends('master')

@section('content')
<section id="kunjungan">
    <div id="baratas">
        <strong>Selamat Datang</strong> <br>
        <strong>Di Ruang Baca Umum</strong>
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
        <br>
            <small style="color:red;"><i class="bi bi-excalamtion-circle"></i>Klik Tombol Simpan</small>
        <p>Name: {{ $user['name'] }}</p>
        <p>Photo: </p>
        <div style="width: 150px;margin: 0 auto;"><img style="width:100%;height:100%;" src="{{ asset('storage/images/'.$user['photo'] ) }}" alt="" srcset=""></div>
        <form method="POST" action="{{route('bukutamu.store')}}">
            @csrf
            <input type="hidden" name="no_pengenal" value="{{ $user->no_pengenal }}">
            <input type="hidden" name="name" value="{{ $user->name }}">
            @if ($user->jenis_anggota)
            <input type="hidden" name="jenis_anggota" value="{{ $user->jenis_anggota->jenisanggota }}">
            @endif
            <button type="submit">Simpan</button>
        </form>
        @elseif (isset($message))
        <p>{{ $message }}</p>
        @endif
    </section>
</section>
@endsection