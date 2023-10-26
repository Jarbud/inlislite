@extends('master')

@section('content')
<section id="bukutamu">
    <div id="boxbuku">
        <strong>Penentuan Lokasi</strong> <br>
        <strong>Buku Tamu</strong>
    </div>
    <div class="container" id="isibuku">
        <form action="{{route('Bukutamu.store')}}" method="post">
            @csrf
            <strong>IP Komputer</strong>
            <br>
            <strong id="ipAddress">{{ $ip }}</strong>
            <br>
            <select name="perpus" id="lokasiPerpustakaan">
                <option disabled selected>-- Silahkan pilih lokasi perpustakaan --</option>
                @foreach ($lokPerpus as $item)
                <option>{{$item->Name}}</option>
                @endforeach
            </select>
            <br>
            <select name="library" id="lokasiBaca">
                <option selected disabled>-- Pilih Lokasi --</option>
                @foreach ($libraryPerpus as $item)
                <option>{{$item->Name}}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Simpan</button>
            <br>
        </form>
    </div>
</section>
@endsection