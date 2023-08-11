@extends('master')
@section('content')

<div class="container">
    <div class="content-wrapper">
        <div class="row">
            <section class="pb-4 text-lg-left">
                <div class="col-12">
                    <h1 class="h1 font-weight-bold text-center">Pendaftaran Anggota</h1>
                </div>
                <div class="row mt-2 pt-2">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <h2 style="text-align: center;">Persyaratan</h2>
                            <hr>
                            <p class="card-description"></p>
                            <ul>
                                <li>Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                                <li>Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                                <li>Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                                <li>Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                                <li>Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            <div class="card" style="margin-top: 10px;">
            <div class="card-header" style="background-color: aquamarine; color:aliceblue;">
                <div class="d-flex align-items-center">
                    <h2 class="card-title ml-3">Formulir Pendaftaran Anggota</h2>
                </div>
            </div>
            <div class="card-body">
              <form class="row g-3" autocomplete="off">
                <div class="col-md-3">
                  <label for="inputNo" class="active">No Identitas
                    <span style="color: red;">*</span>
                  </label>
                        <select name="identitas" id="identitas" class="form-select">
                            <option value="1">NIK</option>
                            <option value="2">NIM</option>
                        </select>   
                </div>
                <div class="col-md-9">
                    <label for="inputNo" style="opacity: 0;"></label><br>
                    <input type="text" maxlength="16" size="40" class="form-control" id="nomor" placeholder="Masukan nomor identitas">
                </div>
                <div class="col-md-12">
                  <label for="inputPass" class="form-label">Password
                    <span style="color: red;">*</span>
                  </label>
                <input type="password" class="form-control" id="inputPass" minlength="6" placeholder="Password">
                <small>Minimal 6 karakter</small>
                </div>
                <div class="col-md-12">
                  <label for="inputAddress" class="form-label">Nama Lengkap
                    <span style="color: red;">*</span>
                  </label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Masukan nama lengkap anda">
                  <small>Sesuai dengan identitas</small>
                </div>
                <div class="col-md-6">
                <label for="inputTtl" class="form-label">Tempat Tanggal Lahir
                    <span style="color: red;">*</span>
                </label>
                <input type="date" class="form-control" id="inputTtl">
                <small>Format: tgl/bln/thn</small>
                </div>
                <div class="col-md-6" style="opacity: 0;"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <label for="txtAlamatRumah" class="active">Alamat<span style="color: Red;">*</span></label>
                            <textarea name="txtAlamatRumah" rows="4" cols="40" id="txtAlamatRumah" class="form-control" placeholder="Masukan alamat Anda"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" style="opacity: 0;"></div>
                <div class="col-md-6">
                  <label for="inputNoHP" class="form-label">Nomor HP</label>
                  <input type="text" class="form-control" id="inputNoHP">
                  <small>Masukan tanpa pemisah(ex:089942149256)</small>
                </div>
                <div class="col-md-6">
                  <label for="inputInstitusi" class="form-label">Nama Institusi</label>
                  <input type="text" class="form-control" id="inputInstitusi">
                </div>
                <div class="col-md-6">
                  <label for="inputNoRum" class="form-label">Nomor Telepon Rumah</label>
                  <input type="text" class="form-control" id="inputNoRum">
                  <small>Masukan tanpa pemisah(ex:0241123456)</small>
                </div>
                <div class="col-md-6">
                  <label for="inputAlaIn" class="form-label">Alamat Institusi</label>
                  <textarea class="form-control" id="inputAlaIn"></textarea>
                </div>
                
                <div class="col-md-6">
                  <label for="inputPend" class="active">Pendidikan Terakhir
                  <span style="color: red;">*</span>
                  </label>
                        <select name="Pendidikan" id="Pendidikan" class="form-select">
                        @foreach ($mps as $item)
                            <option>{{$item->Nama}}</option>
                        @endforeach
                        </select>   
                </div>
                
                <div class="col-md-6">
                  <label for="inputNoIns" class="form-label">Telepon Institusi</label>
                  <input type="text" class="form-control" id="inputNoIns">
                  <small>Masukan tanpa pemisah(ex:0241123456)</small>
                </div>
                <div class="col-md-6">
                  <label for="inputJen" class="active">Jenis Kelamin
                  <span style="color: red;">*</span>
                  </label>
                        <select name="Jenis" id="Jenis" class="form-select">
                          @foreach ($jks as $item)  
                          <option>{{$item->Name}}</option>
                          @endforeach
                        </select>   
                </div>
                <div class="col-md-6">
                  <label for="inputEmail" class="form-label">Alamat Email Pribadi
                  <span style="color: red;">*</span>
                  </label>
                  <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="col-md-6">
                  <label for="inputKer" class="active">Pekerjaan
                  <span style="color: red;">*</span>
                  </label>
                        <select name="Kerja" id="Kerja" class="form-select">
                          @foreach ($kerjas as $item)
                          <option>{{$item->Pekerjaan}}</option>
                          @endforeach
                        </select>   
                </div>
                <div class="col-md-6" style="opacity: 0;"></div>
                <div class="col-md-6">
                  <label for="inputStatus" class="active">Status Perkawinan
                  <span style="color: red;">*</span>
                  </label>
                        <select name="Status" id="Status" class="form-select">
                          @foreach ($stat as $item)
                          <option>{{$item->Nama}}</option>
                          @endforeach
                        </select>   
                </div>
                <div class="text-center" >
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>
            </div>
            </section>
        </div>
    </div>
</div>

@endsection 