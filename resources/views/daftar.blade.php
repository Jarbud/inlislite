@extends('master')
@section('content')

@php
    $user = auth()->user();
@endphp

<div class="container">
    <div class="content-wrapper">
        <div class="row">
            <section class="pb-4 text-lg-left">
                <div class="col-12">
                    <h1 class="h1 font-weight-bold text-center" style="margin-bottom: 50px;">Pendaftaran Anggota</h1>
                </div>
            <div class="card" style="margin-top: 10px;">
            <div class="card-header" style="background-color: #a2abff; color:aliceblue;">
                <div class="d-flex align-items-center">
                    <h2 class="card-title ml-3">Formulir Pendaftaran Anggota</h2>
                </div>
            </div>
            <div class="card-body">
              <form class="row g-3" autocomplete="off" action="/daftar">
                @csrf
                <div class="col-md-3">
                  <label for="inputNo" class="active">No Identitas
                    <span style="color: red;">*</span>
                  </label>
                  <select name="identitas" id="identitas" class="form-select">
                    @foreach ($identitas as $item)  
                    <option>{{$item->Nama}}</option>
                    @endforeach
                  </select>   
                </div>
                <div class="col-md-9">
                  <label for="inputNo" style="opacity: 0;"></label><br>
                  <input type="text" maxlength="20" size="40" class="form-control" id="nomor" placeholder="Masukan nomor identitas">
                </div>
                <div class="col-md-12">
                  <label for="inputPass" class="form-label">Password
                    <span style="color: red;">*</span>
                  </label>
                <input type="password" class="form-control" id="inputPass" minlength="6" placeholder="Masukan password" value="{{ $user->password }}">
                <small>Minimal 6 karakter</small>
                </div>
                <div class="col-md-12">
                  <label for="inputEmail" class="form-label">Email
                      <span style="color: red;">*</span>
                  </label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email" onchange="toggleCheckbox()" value="{{ $user->email }}">
                </div>
                <div class="col-md-12">
                  <label for="inputNama" class="form-label">Nama Lengkap
                      <span style="color: red;">*</span>
                  </label>
                  <input type="text" class="form-control" id="Nama" placeholder="Masukan nama lengkap anda sesuai kartu identitas" onchange="toggleCheckbox()" value="{{ $user->name }}">
                  <small>Sesuai dengan identitas</small>
                </div>
                <div class="col-md-6">
                <label for="inputTtl" class="form-label">Tempat Tanggal Lahir
                    <span style="color: red;">*</span>
                </label>
                  <input type="text" class="form-control" id="Tempat" placeholder="Masukan Tempat Lahir" onchange="toggleCheckbox()">
                </div>
                <div class="col-md-3">
                <label for="inputTtl" class="form-label" style="opacity: 0;">Tempat Tanggal Lahir
                    <span style="color: red;">*</span>
                </label><br>
                <input type="date" class="form-control" id="Tempat" onchange="toggleCheckbox()">
                </div>
                <div class="col-md-12">
                  <label for="inputJen" class="active">Jenis Kelamin
                  <span style="color: red;">*</span>
                  </label>
                        <select name="Jenis" id="Jenis" class="form-select">
                          @foreach ($jks as $item)  
                          <option>{{$item->Name}}</option>
                          @endforeach
                        </select>   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <label for="txtAlamatSaatIni" class="active">Alamat Tinggal Sesuai Identitas<span style="color: Red;">*</span></label>
                            <textarea name="txtAlamatRumah" rows="4" cols="40" id="Alamat" class="form-control" placeholder="Masukan alamat tinggal sesuai identitas" onchange="toggleCheckbox()"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <label for="txtAlamatRumah" class="active">Alamat Tinggal Saat Ini<span style="color: Red;">*</span></label>
                            <textarea name="txtAlamatSaatini" rows="4" cols="40" id="txtAlamat" class="form-control" placeholder="Masukan alamat tinggal saat ini" onchange="toggleCheckbox()"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="inputPend" class="active">Pendidikan
                  </label>
                        <select name="Pendidikan" id="Pendidikan" class="form-select">
                        @foreach ($pend as $item)
                            <option>{{$item->Nama}}</option>
                        @endforeach
                        </select>   
                </div>
                <div class="col-md-12">
                  <label for="inputKer" class="active">Pekerjaan
                  </label>
                        <select name="Kerja" id="Kerja" class="form-select">
                          @foreach ($kerjas as $item)
                          <option>{{$item->Pekerjaan}}</option>
                          @endforeach
                        </select>   
                </div>
                <div class="col-md-12">
                  <label for="inputStatus" class="active">Agama
                  </label>
                        <select name="agama" id="agama" class="form-select">
                          @foreach ($pil as $item)
                          <option>{{$item->Name}}</option>
                          @endforeach
                        </select>   
                </div>
                <div class="col-md-12">
                  <label for="inputStatus" class="active">Status Perkawinan
                  </label>
                        <select name="Status" id="Status" class="form-select">
                          @foreach ($stat as $item)
                          <option>{{$item->Nama}}</option>
                          @endforeach
                        </select>   
                </div>
                <div class="col-md-6">
                  <label for="inputNoHP" class="form-label">Nomor HP</label>
                  <input type="text" class="form-control" id="inputNoHP">
                  <small>Masukan tanpa pemisah(ex:089942149256)</small>
                </div>
                <div class="col-md-6">
                  <label for="inputNoRum" class="form-label">Nomor Telepon Rumah</label>
                  <input type="text" class="form-control" id="inputNoRum">
                  <small>Masukan tanpa pemisah(ex:0241123456)</small>
                </div>
                <div class="col-md-6">
                  <label for="inputInstitusi" class="form-label">Nama Institusi</label>
                  <input type="text" class="form-control" id="inputInstitusi">
                </div>
                <div class="col-md-6">
                  <label for="inputAlaIn" class="form-label">Alamat Institusi</label>
                  <textarea class="form-control" id="inputAlaIn"></textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputNoIns" class="form-label">Telepon Institusi</label>
                  <input type="text" class="form-control" id="inputNoIns">
                  <small>Masukan tanpa pemisah(ex:0241123456)</small>
                </div>
                <div class="mt-2 pt-2">
                  <label class="custom-control-label">
                    <input onChange="showButton();" type="checkbox" class="custom-control-input" disabled>
                    Saya menyatakan data yang diisi benar dan dapat dipertanggungjawabkan.
                  </label>
                  <div>
                    <a href="/submit" class="btn btn-primary" id="idBtnSub" style="visibility: hidden;">Daftar</a>
                  </div>
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