@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-lg-8">
              <div class="card bg-light d-flex flex-fill" >
                <div class="card-header text-muted border-bottom-0">
                  @if(Auth::user()->verifikasi == "false")
                    <a href="/pendaftaran" class="btn btn-warning">Belum Terverifikasi</a>
                  @elseif(Auth::user()->verifikasi == "true")
                    <a href="/verifikasi" class="btn btn-success">Terverifikasi</a>
                  @elseif(Auth::user()->verifikasi == "pending")
                    <a href="/verifikasi" class="btn btn-info">Verifikasi Pending</a>
                  @elseif(Auth::user()->verifikasi == "decline")
                    <a href="/verifikasi" class="btn btn-danger">Verifikasi Ditolak</a>
                  @endif
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-8">
                      <div class="text-muted card-header border-bottom-0 margin-left-0" style="padding-left: 0;">
                      @if( Auth::user()->jenis_anggota_id == 1 )
                        Mahasiswa
                    @elseif( Auth::user()->jenis_anggota_id == 2 )
                        Umum
                    @elseif( Auth::user()->jenis_anggota_id == 3 )
                        Admin
                    @elseif( Auth::user()->jenis_anggota_id == 4 )
                        Tamu
                    @endif
                  <br>
                  Keanggotaan sampai : {{ Auth::user()->tgl_habis_anggota }}
                      </div>
                    
                      <h2 class="lead"><b>{{ Auth::user()->name }}</b></h2>
                      <table class="text-muted">
                        <tr>
                          <td><span><i class="fas fa-lg fa-id-card"></i></span></td>
                          @if( Auth::user()->jenis_anggota_id == 1 )
                            <td>NIM</td>
                          @elseif( Auth::user()->jenis_anggota_id == 2 )
                            <td>NIK</td>
                          @else
                            <td>NIM/NIK</td>
                          @endif
                          <td>:</td>
                          <td>{{ Auth::user()->no_pengenal }}</td>
                        </tr>
                        <tr>
                          <td><span><i class="fas fa-lg fa-mail-bulk"></i></span></td>
                          <td>Email</td>
                          <td>:</td>
                          <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                          <td><span><i class="fas fa-lg fa-phone"></i></span></td>
                          <td>WA</td>
                          <td>:</td>
                          <td>{{ Auth::user()->telp }}</td>
                        </tr>
                        <tr>
                          <td><span><i class="fas fa-lg fa-building"></i></span></td>
                          <td>Alamat</td>
                          <td>:</td>
                          <td>{{ Auth::user()->alamat }}</td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-4 text-center">
                      @if(isset(Auth::user()->photo))
                        <img src="{{ asset('storage/images/'.Auth::user()->photo) }}" alt="user-avatar" class="img-fluid">
                      @else
                        <img src="https://www.seekpng.com/png/detail/428-4287240_no-avatar-user-circle-icon-png.png" alt="user-avatar" class="img-fluid">
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  QR CODE
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-lg-12">
                      
                      <img src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2021/02/02081213/tampilan-qr-code-1024x1024.jpg" alt="user-avatar" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table Peminjaman Buku</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tgl Peminjaman</th>
                    <th>Tgl Pengembalian</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jurnal Ekonomi dan Pembangunan</td>
                        <td>Senin, 08/09/2023</td>
                        <td>Kamis, 10/09/2023</td>
                        <td><span class="badge bg-danger">Belum Dikembalikan</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>No Die Today</td>
                        <td>Senin, 09/01/2023</td>
                        <td>Kamis, 12/02/2023</td>
                        <td><span class="badge bg-success">Sudah Dikembalikan</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        @if( Auth::user()->jenis_anggota_id == 1 )
          <div class="row">
            <div class="col-lg-12">
            <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Progress Verifikasi Karya Ilmiah</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">NO</th>
                          <th>Judul</th>
                          <th>Progress</th>
                          <th style="width: 40px">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>Perokonomian Daerah</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-danger" style="width: 25%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-danger">Pengecekan Berkas</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Perbandingan ekonomi .......</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" style="width: 50%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-warning">Pengecekan Kedua</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>Perbandingan .......</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-success">Terverifikasi</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
            </div>
          </div>
        @endif
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
  });
</script>
@stop