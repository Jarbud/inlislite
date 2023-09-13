@extends('master')
@section('content')

    <section id="bukutamu-title" class="bukutamu-title">
      <div class="container">
        <h1>Selamat Datang di<br>Ruang Baca Umum</h1>
      </div>
    </section>

    <section id="bukutamu" class="bukutamu">
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
                    <input type="submit" class="btn btn-kunjungan" value="Kunjungan Biasa/Membaca">
                    <input type="submit" class="btn btn-penelitian" value="Penelitian">
                    <input type="submit" class="btn btn-studytour" value="Study Tour">
                    <input type="submit" class="btn btn-refreshing" value="Refreshing">
                    <input type="submit" class="btn btn-tugaskuliah" value="Tugas Kuliah">
                    <input type="submit" class="btn btn-literatur" value="Pencarian Literatur">
                    <!--<a href="#" class="btn btn-kunjungan">Kunjungan Biasa/Membaca</a>
                    <a href="#" class="btn btn-penelitian">Penelitian</a>
                    <a href="#" class="btn btn-studytour">Study Tour</a>
                    <a href="#" class="btn btn-refreshing">Refreshing</a>
                    <a href="#" class="btn btn-tugaskuliah">Tugas Kuliah</a>
                    <a href="#" class="btn btn-literatur">Pencarian Literatur</a>-->
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
                        <input type="radio" id="pns" name="pekerjaan" value="PNS">
                        <label for="pns">PNS</label><br>
                        <input type="radio" id="guru" name="pekerjaan" value="Guru">
                        <label for="guru">Guru</label><br>
                        <input type="radio" id="tni" name="pekerjaan" value="TNI">
                        <label for="tni">TNI/Polri</label><br>
                        <input type="radio" id="pelajar" name="pekerjaan" value="Pelajar">
                        <label for="pelajar">Pelajar</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="swasta" name="pekerjaan" value="Swasta">
                        <label for="swasta">Swasta</label><br>
                        <input type="radio" id="dosen" name="pekerjaan" value="Dosen">
                        <label for="dosen">Dosen</label><br>
                        <input type="radio" id="mahasiswa" name="pekerjaan" value="Mahasiswa">
                        <label for="mahasiswa">Mahasiswa</label><br>
                        <input type="radio" id="pensiunan" name="pekerjaan" value="Pensiunan">
                        <label for="pensiunan">Pensiunan</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="peneliti" name="pekerjaan" value="Peneliti">
                        <label for="peneliti">Peneliti</label><br>
                        <input type="radio" id="wartawan" name="pekerjaan" value="Wartawan">
                        <label for="wartawan">Wartawan</label><br>
                        <input type="radio" id="mahasiswi" name="pekerjaan" value="Mahasiswi">
                        <label for="mahasiswi">Mahasiswi</label><br>
                        <input type="radio" id="lain" name="pekerjaan" value="Lain">
                        <label for="lain">Lain-lain</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="pendidikanterakhir">Pendidikan Terakhir</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="sd" name="pendidikanterakhir" value="SD">
                        <label for="sd">SD</label><br>
                        <input type="radio" id="diploma1" name="pendidikanterakhir" value="Diploma1">
                        <label for="diploma1">Diploma (D1)</label><br>
                        <input type="radio" id="sarjana" name="pendidikanterakhir" value="Sarjana">
                        <label for="sarjana">Sarjana (S1)</label>
                      </div> 
                      <div class="col-3">
                        <input type="radio" id="smp" name="pendidikanterakhir" value="SMP">
                        <label for="smp">SMP (sederajat)</label><br>
                        <input type="radio" id="diploma2" name="pendidikanterakhir" value="Diploma2">
                        <label for="diploma2">Diploma (D2)</label><br>
                        <input type="radio" id="magister" name="pendidikanterakhir" value="Magister">
                        <label for="magister">Magister (S2)</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="sma" name="pendidikanterakhir" value="SMA">
                        <label for="sma">SMA (sederajat)</label><br>
                        <input type="radio" id="diploma3" name="pendidikanterakhir" value="Diploma3">
                        <label for="diploma3">Diploma (D3)</label><br>
                        <input type="radio" id="doktor" name="pendidikanterakhir" value="Doktor">
                        <label for="doktor">Doktor (S3)</label>
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
                    <div class="row">
                      <div class="col-3">
                        <label for="tujuan">Tujuan</label>
                      </div>                  
                      <div class="col-6">
                        <select id="tujuan" name="tujuan" style="width:100%">
                          <option value="0">Pilih tujuan kunjungan</option>
                          <option value="kunjungan">Kunjungan Biasa/Membaca</option>
                          <option value="penelitian">Penelitian</option>
                          <option value="studytour">Study Tour</option>
                          <option value="refreshing">Refreshing</option>
                          <option value="tugaskuliah">Tugas Kuliah</option>
                          <option value="literatur">Pencarian Literatur</option>
                        </select>
                      </div>
                    </div>
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
                  <form action="#">
                    <div class="row">
                      <div class="col-3">
                        <label for="namaketua">Nama Ketua Rombongan</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="namaketua" name="namaketua" style="width:100%">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="nomorketua">Nomor Telepon Ketua Rombongan</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="nomorketua" name="nomortelepon" style="width:100%">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="namainstansi">Nama Istansi Lembaga</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="namainstansi" name="namainstansi" style="width:100%">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="alamatinstansi">Alamat Instansi Lembaga</label>
                      </div>
                      <div class="col-6">
                        <textarea id="alamatinstansi" name="alamatinstansi" style="width:100%; height:200px"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="nomorinstansi">Nomor Telepon Instansi</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="nomorinstansi" name="nomorinstansi" style="width:100%">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="emailinstansi">Alamat Email Instansi</label>
                      </div>
                      <div class="col-6">
                        <input type="text" id="emailinstansi" name="emailinstansi" style="width:100%">
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
                        <label for="pekerjaan">Pekerjaan</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="pelajar" name="pekerjaan" value="Pelajar">
                        <label for="pelajar">Pelajar</label><br>
                        <input type="radio" id="guru" name="pekerjaan" value="Guru">
                        <label for="guru">Guru</label><br>
                        <input type="radio" id="mahasiswa" name="pekerjaan" value="Mahasiswa">
                        <label for="mahasiswa">Mahasiswa</label><br>
                        <input type="radio" id="dosen" name="pekerjaan" value="Dosen">
                        <label for="dosen">Dosen</label><br>

                      </div>
                      <div class="col-3">
                        <input type="radio" id="pns" name="pekerjaan" value="PNS">
                        <label for="pns">PNS</label><br>
                        <input type="radio" id="tni" name="pekerjaan" value="TNI">
                        <label for="tni">TNI/Polri</label><br>
                        <input type="radio" id="peneliti" name="pekerjaan" value="Peneliti">
                        <label for="peneliti">Peneliti</label><br>
                        <input type="radio" id="wartawan" name="pekerjaan" value="Wartawan">
                        <label for="wartawan">Wartawan</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="swasta" name="pekerjaan" value="Swasta">
                        <label for="swasta">Pegawai Swasta</label><br>
                        <input type="radio" id="wiraswasta" name="pekerjaan" value="Wiraswasta">
                        <label for="wiraswasta">Wiraswasta</label><br>
                        <input type="radio" id="pensiunan" name="pekerjaan" value="Pensiunan">
                        <label for="pensiunan">Pensiunan</label><br>
                        <input type="radio" id="lain" name="pekerjaan" value="Lain">
                        <label for="lain">Lain-lain</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="pendidikanterakhir">Pendidikan Terakhir</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="sd" name="pendidikanterakhir" value="SD">
                        <label for="sd">SD</label><br>
                        <input type="radio" id="diploma1" name="pendidikanterakhir" value="Diploma1">
                        <label for="diploma1">Diploma (D1)</label><br>
                        <input type="radio" id="sarjana" name="pendidikanterakhir" value="Sarjana">
                        <label for="sarjana">Sarjana (S1)</label>
                      </div> 
                      <div class="col-3">
                        <input type="radio" id="smp" name="pendidikanterakhir" value="SMP">
                        <label for="smp">SMP (sederajat)</label><br>
                        <input type="radio" id="diploma2" name="pendidikanterakhir" value="Diploma2">
                        <label for="diploma2">Diploma (D2)</label><br>
                        <input type="radio" id="magister" name="pendidikanterakhir" value="Magister">
                        <label for="magister">Magister (S2)</label>
                      </div>
                      <div class="col-3">
                        <input type="radio" id="sma" name="pendidikanterakhir" value="SMA">
                        <label for="sma">SMA (sederajat)</label><br>
                        <input type="radio" id="diploma3" name="pendidikanterakhir" value="Diploma3">
                        <label for="diploma3">Diploma (D3)</label><br>
                        <input type="radio" id="doktor" name="pendidikanterakhir" value="Doktor">
                        <label for="doktor">Doktor (S3)</label>
                      </div>
                    </div>  
                    <div class="row">
                      <div class="col-3"></div>
                      <div class="col-6">
                        <div class="resetsubmit-rombongan">
                          <input type="reset" value="Reset" class="btn-resetrombongan">
                          <input type="submit" value="Submit" class="btn-submitrombongan">
                        </div>
                      </div>
                    </div>                 
                  </form>
                </div>
              </div>
            </div>

          </div>   
         
      </div>
    </section>


        

@endsection