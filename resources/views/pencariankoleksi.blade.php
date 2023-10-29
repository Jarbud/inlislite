@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container">
        <h1>Pencarian Koleksi</h1>
      </div>
    </section>

    <section id="detail" class="detail">
        <div class="container">

            <div class="pencarian">
                <form action="{{ route('pencariankoleksi.search') }}" method="GET">
                    <div class="row">
                        <div class="col-sm-6 d-flex align-items-stretch">
                            <div class="input-group rounded">
                                <input type="text" name="query" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            </div>
                        </div>
                        <div class="col-sm-1 d-flex align-items-stretch">
                            <button type="submit" class="btn-search">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            @if ($katalog->count() > 0)
            <div class="tabel-koleksi">
                @foreach ($katalog as $item)
                <table id="konten-tabel" width="100%">
                    <tbody>
                        <tr style="vertical-align: top;">
                            <td rowspan="8" style="padding: 10px 10px;">
                                <span><img src="{{ asset('assets/img/sampul.png') }}"/></span>                
                            </td>
                        </tr>
                        <tr>
                            <th width="23%">Judul</th>
                            <td width="2%">:</td>
                            <td><a href="{{ route('viewdetail', $item->id) }}" class="judul-tabel">{{ $item->Title }}</a></td>
                        </tr>
                        <tr>
                            <th width="23%">Jenis Bahan</th>
                            <td width="2%">:</td>
                            <td width="75%">{{ $item->worksheets ? $item->worksheets->Name : '(Tidak diketahui)' }}</td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td>:</td>
                            <td>{{ $item->Author }}</td>
                        </tr>
                        <tr>
                            <th>Penerbitan</th>
                            <td>:</td>
                            <td>{{ $item->Publisher }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit</th>
                            <td>:</td>
                            <td>{{ $item->PublishYear }}</td>
                        </tr>
                        <tr>
                            <th>Subjek</th>
                            <td>:</td>
                            <td>{{ $item->Subject }}</td>
                        </tr>
                        <tr class="table-button">
                            <td>
                                <a class="btn btn-viewdetail" href="{{ route('viewdetail', $item->id) }}">Lihat Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @endforeach
                @else
                <p>Tidak ada hasil ditemukan.</p>
                @endif
            </div>
           

            <div class="pagination">
                {{ $katalog->appends(['query' => $query])->links() }}
            </div>

        </div>
    </section>

@endsection

@section ('js')
<script>
    $(function () {
    $("#konten-tabel").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false
        });
    });
  </script>
@stop