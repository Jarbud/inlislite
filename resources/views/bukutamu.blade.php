@extends('master')
@section('content')

  <section id="bukutamu-title" class="bukutamu-title">
    <div class="container">
      <h1>Selamat Datang di<br>Ruang Baca Umum</h1>
    </div>
  </section>

  <section id="bukutamu" class="bukutamu">
    <form action="{{ route('bukutamu-store') }}" autocomplete="off" method="POST">
      @csrf 
      <div class="container" class="fade-up">
          <div class="bukutamu-nav">
            <ul class="nav nav-tabs" id="bukutamu-nav" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="anggota-tab" data-bs-toggle="tab" data-bs-target="#anggota" type="button" role="tab" aria-controls="anggota" aria-selected="true">Anggota</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nonanggota-tab" data-bs-toggle="tab" data-bs-target="#nonanggota" type="button" role="tab" aria-controls="nonanggota" aria-selected="false">Non Anggota</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="rombongan-tab" data-bs-toggle="tab" data-bs-target="#rombongan" type="button" role="tab" aria-controls="rombongan" aria-selected="false">Rombongan</button>
              </li>
            </ul>

            <div class="tab-content" id="bukutamu-tab-content">
              <div class="tab-pane fade show active" id="anggota" role="tabpanel" aria-labelledby="anggota-tab">
                <img class="bukutamu-pfp" src="assets/img/iqbaal.jpg"/></img>
                <h2>Nama Pengunjung</h2>
                <h3>Apa yang ingin Anda lakukan hari ini?</h3>
                  <div class="tujuankunjungan">
                    <input type="submit" class="btn btn-kunjungan" value="Kunjungan Biasa/Membaca" >
                    <input type="submit" class="btn btn-penelitian" value="Penelitian">
                    <input type="submit" class="btn btn-studytour" value="Study Tour">
                    <input type="submit" class="btn btn-refreshing" value="Refreshing">
                    <input type="submit" class="btn btn-tugaskuliah" value="Tugas Kuliah">
                    <input type="submit" class="btn btn-literatur" value="Pencarian Literatur">
                  </div>
              </div>
              <div class="tab-pane fade" id="nonanggota" role="tabpanel" aria-labelledby="nonanggota-tab">
                <div class="nonanggota">
                  <!--Pengisian data non anggota-->
                  <form action="#">
                    <div class="row">
                      <div class="col-3">
                        <label for="namapengunjung">Nama Pengunjung</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="namapengunjung" name="namapengunjung" placeholder="Tulis nama panjang Anda..." style="width:100%">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="pekerjaan">Pekerjaan</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountPelajar" name="CountPelajar" value="CountPelajar">
                        <label for="CountPelajar">Pelajar</label><br>
                        <input type="radio" id="CountGuru" name="CountGuru" value="CountGuru">
                        <label for="CountGuru">Guru</label><br>
                        <input type="radio" id="CountMahasiswa" name="CountMahasiswa" value="CountMahasiswa">
                        <label for="CountMahasiswa">Mahasiswa</label><br>
                        <input type="radio" id="CountDosen" name="CountDosen" value="CountDosen">
                        <label for="CountDosen">Dosen</label><br>

                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountPSwasta" name="CountPSwasta" value="CountPSwasta">
                        <label for="CountPSwasta">Pegawai Swasta</label><br>
                        <input type="radio" id="CountWiraswasta" name="CountWiraswasta" value="CountWiraswasta">
                        <label for="CountWiraswasta">Wiraswasta</label><br>
                        <input type="radio" id="CountPensiunan" name="CountPensiunan" value="CountPensiunan">
                        <label for="CountPensiunan">Pensiunan</label><br>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountPNS" name="CountPNS" value="CountPNS">
                        <label for="CountPNS">PNS</label><br>
                        <input type="radio" id="CountTNI" name="CountTNI" value="CountTNI">
                        <label for="CountTNI">TNI/Polri</label><br>
                        <input type="radio" id="CountPeneliti" name="CountPeneliti" value="CountPeneliti">
                        <label for="CountPeneliti">Peneliti</label><br>
                        <input type="radio" id="CountLainnya" name="CountLainnya" value="CountLainnya">
                        <label for="CountLainnya">Lain-lain</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="pendidikanterakhir">Pendidikan Terakhir</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountSD" name="CountSD" value="CountSD">
                        <label for="CountSD">SD</label><br>
                        <input type="radio" id="CountD1" name="CountD1" value="CountD1">
                        <label for="CountD1">Diploma (D1)</label><br>
                        <input type="radio" id="CountS1" name="CountS1" value="CountS1">
                        <label for="CountS1">Sarjana (S1)</label>
                      </div> 
                      <div class="col-3">
                        <input type="radio" id="CountSMP" name="CountSMP" value="CountSMP">
                        <label for="CountSMP">SMP (sederajat)</label><br>
                        <input type="radio" id="CountD2" name="CountD2" value="CountD2">
                        <label for="CountD2">Diploma (D2)</label><br>
                        <input type="radio" id="CountS2" name="CountS2" value="CountS2">
                        <label for="CountS2">Magister (S2)</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountSMA" name="CountSMA" value="CountSMA">
                        <label for="CountSMA">SMA (sederajat)</label><br>
                        <input type="radio" id="CountD3" name="CountD3" value="CountD3">
                        <label for="CountD3">Diploma (D3)</label><br>
                        <input type="radio" id="CountS3" name="CountS3" value="CountS3">
                        <label for="CountS3">Doktor (S3)</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="lakilaki" name="jeniskelamin" value="lakilaki">
                        <label for="lakilaki">Laki-laki</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="perempuan" name="jeniskelamin" value="perempuan">
                        <label for="perempuan">Perempuan</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="alamat">Alamat</label>
                      </div>
                      <div class="col-6">
                        <textarea id="alamat" name="alamat" placeholder="Tuliskan alamat lengkap Anda..." style="width:100%; height:200px"></textarea>
                      </div>
                    </div>  
                    <!--<div class="row">
                      <div class="col-3">
                        <label for="tujuan">Tujuan</label>
                      </div>                  
                      <div class="col-6">
                        <select id="tujuan" name="tujuan" style="width:100%">
                          <option disabled selected>Pilih Tujuan Kunjungan</option>
                          @foreach ( $tujuan_kunjungan as $item )
                          <option>{{$item->TujuanKunjungan}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>-->
                    <div class="row">
                      <div class="col-3"></div>
                      <div class="col-6">
                        <div class="resetsubmit-nonanggota">
                          <input type="reset" value="Reset" class="btn-resetnonanggota">
                          <input type="submit" value="Submit" class="btn-submitnonanggota">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
              <div class="tab-pane fade" id="rombongan" role="tabpanel" aria-labelledby="rombongan-tab">
                <!--Pengisian Data Rombongan-->
                <div class="rombongan">
                  <!--<form action="{{ route('bukutamu-store') }}" autocomplete="off" method="POST">-->
                    <div class="row">
                      <div class="col-3">
                        <label for="NamaKetua">Nama Ketua Rombongan</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="NamaKetua" name="NamaKetua" style="width:100%" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="NomorTelponKetua">Nomor Telepon Ketua Rombongan</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="NomorTelponKetua" name="NomorTelponKetua" style="width:100%" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="AsalInstansi">Nama Instansi Lembaga</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="AsalInstansi" name="AsalInstansi" style="width:100%" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="AlamatInstansi">Alamat Instansi Lembaga</label>
                      </div>
                      <div class="col-6">
                        <textarea id="AlamatInstansi" name="AlamatInstansi" style="width:100%; height:200px" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="TeleponInstansi">Nomor Telepon Instansi</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="TeleponInstansi" name="TeleponInstansi" style="width:100%" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="EmailInstansi">Alamat Email Instansi</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="EmailInstansi" name="EmailInstansi" style="width:100%" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountLaki" name="CountLaki" value="CountLaki">
                        <label for="CountLaki">Laki-laki</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountPerempuan" name="CountPerempuan" value="CountPerempuan">
                        <label for="CountPerempuan">Perempuan</label>
                      </div>
                    </div>   
                    <div class="row">
                      <div class="col-3">
                        <label for="pekerjaan">Pekerjaan</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountPelajar" name="CountPelajar" value="CountPelajar">
                        <label for="CountPelajar">Pelajar</label><br>
                        <input type="radio" id="CountGuru" name="CountGuru" value="CountGuru">
                        <label for="CountGuru">Guru</label><br>
                        <input type="radio" id="CountMahasiswa" name="CountMahasiswa" value="CountMahasiswa">
                        <label for="CountMahasiswa">Mahasiswa</label><br>
                        <input type="radio" id="CountDosen" name="CountDosen" value="CountDosen">
                        <label for="CountDosen">Dosen</label><br>

                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountPSwasta" name="CountPSwasta" value="CountPSwasta">
                        <label for="CountPSwasta">Pegawai Swasta</label><br>
                        <input type="radio" id="CountWiraswasta" name="CountWiraswasta" value="CountWiraswasta">
                        <label for="CountWiraswasta">Wiraswasta</label><br>
                        <input type="radio" id="CountPensiunan" name="CountPensiunan" value="CountPensiunan">
                        <label for="CountPensiunan">Pensiunan</label><br>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountPNS" name="CountPNS" value="CountPNS">
                        <label for="CountPNS">PNS</label><br>
                        <input type="radio" id="CountTNI" name="CountTNI" value="CountTNI">
                        <label for="CountTNI">TNI/Polri</label><br>
                        <input type="radio" id="CountPeneliti" name="CountPeneliti" value="CountPeneliti">
                        <label for="CountPeneliti">Peneliti</label><br>
                        <input type="radio" id="CountLainnya" name="CountLainnya" value="CountLainnya">
                        <label for="CountLainnya">Lain-lain</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="pendidikanterakhir">Pendidikan Terakhir</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountSD" name="CountSD" value="CountSD">
                        <label for="CountSD">SD</label><br>
                        <input type="radio" id="CountD1" name="CountD1" value="CountD1">
                        <label for="CountD1">Diploma (D1)</label><br>
                        <input type="radio" id="CountS1" name="CountS1" value="CountS1">
                        <label for="CountS1">Sarjana (S1)</label>
                      </div> 
                      <div class="col-3">
                        <input type="radio" id="CountSMP" name="CountSMP" value="CountSMP">
                        <label for="CountSMP">SMP (sederajat)</label><br>
                        <input type="radio" id="CountD2" name="CountD2" value="CountD2">
                        <label for="CountD2">Diploma (D2)</label><br>
                        <input type="radio" id="CountS2" name="CountS2" value="CountS2">
                        <label for="CountS2">Magister (S2)</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="CountSMA" name="CountSMA" value="CountSMA">
                        <label for="CountSMA">SMA (sederajat)</label><br>
                        <input type="radio" id="CountD3" name="CountD3" value="CountD3">
                        <label for="CountD3">Diploma (D3)</label><br>
                        <input type="radio" id="CountS3" name="CountS3" value="CountS3">
                        <label for="CountS3">Doktor (S3)</label>
                      </div>
                    </div>  
                    <!--<div class="row">
                      <div class="col-3">
                        <label for="tujuan">Tujuan</label>
                      </div>                  
                      <div class="col-6">
                        <select id="tujuan" name="tujuan" style="width:100%">
                          <option disabled selected>Pilih Tujuan Kunjungan</option>
                          @foreach ( $tujuan_kunjungan as $item )
                          <option>{{$item->TujuanKunjungan}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>-->
                    <div class="row">
                      <div class="col-3"></div>
                      <div class="col-6">
                        <div class="resetsubmit-rombongan">
                          <input type="reset" value="Reset" class="btn-resetrombongan">
                          <input type="submit" value="Submit" class="btn-submitrombongan">
                        </div>
                      </div>
                    </div>                 
                  <!-- </form> -->
                </div>
              </div>
            </div>

          </div>   
         
      </div>
    </form>
  </section>


        

@endsection