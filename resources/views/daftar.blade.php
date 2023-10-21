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
            <form class="row g-3" autocomplete="off" method="POST" action="{{route('daftar')}}">
              @csrf
              <div class="col-md-3">
                <label for="inputNo" class="active">No Identitas
                  <span style="color: red;">*</span>
                </label>
                <select name="identitas" id="identitas" class="form-select">
                  @foreach ($identitas as $item)
                  <option value="{{ $item->id }}">{{$item->Nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-9">
                <label for="inputNo" style="opacity: 0;"></label><br>
                <input type="text" maxlength="20" size="40" class="form-control" id="nomor" name="nomor"
                  placeholder="Masukan nomor identitas" required>
              </div>
              <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email
                  <span style="color: red;">*</span>
                </label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email"
                  onchange="toggleCheckbox()">
              </div>

              {{-- Password field --}}
              <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                  placeholder="{{ __('adminlte::adminlte.password') }}">

                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                  </div>
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              {{-- Confirm password field --}}
              <div class="input-group mb-3">
                <input type="password" name="password_confirmation"
                  class="form-control @error('password_confirmation') is-invalid @enderror"
                  placeholder="Ketik ulang password">

                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                  </div>
                </div>

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-12">
                <label for="inputNama" class="form-label">Nama Lengkap
                  <span style="color: red;">*</span>
                </label>
                <input type="text" class="form-control" id="Nama" name="name"
                  placeholder="Masukan nama lengkap anda sesuai kartu identitas" onchange="toggleCheckbox()">
                <small>Sesuai dengan identitas</small>
              </div>
              <div class="col-md-6">
                <label for="inputTtl" class="form-label">Tempat Tanggal Lahir
                  <span style="color: red;">*</span>
                </label>
                <input type="text" class="form-control" id="Tempat" name="tempat" placeholder="Masukan Tempat Lahir"
                  onchange="toggleCheckbox()">
              </div>
              <div class="col-md-3">
                <label for="inputTtl" class="form-label" style="opacity: 0;">Tempat Tanggal Lahir
                  <span style="color: red;">*</span>
                </label><br>
                <input type="date" class="form-control" id="Tempat" name="tanggal" onchange="toggleCheckbox()">
              </div>
              <div class="col-md-12">
                <label for="inputJen" class="active">Jenis Kelamin
                  <span style="color: red;">*</span>
                </label>
                <select name="Jenis" id="Jenis" class="form-select">
                  <option>Pilih Jenis Kelamin</option>
                  @foreach ($jks as $item)
                  <option value="{{ $item->ID }}">{{$item->Name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <label for="txtAlamatSaatIni" class="active">Alamat Tinggal Sesuai Identitas<span
                        style="color: Red;">*</span></label>
                    <textarea name="AlamatRumah" rows="4" cols="40" id="Alamat" class="form-control"
                      placeholder="Masukan alamat tinggal sesuai identitas" onchange="toggleCheckbox()"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <label for="txtAlamatRumah" class="active">Alamat Tinggal Saat Ini<span
                        style="color: Red;">*</span></label>
                    <textarea name="AlamatSaatini" rows="4" cols="40" id="txtAlamat" class="form-control"
                      placeholder="Masukan alamat tinggal saat ini" onchange="toggleCheckbox()"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <label for="inputPend" class="active">Pendidikan
                </label>
                <select name="Pendidikan" id="Pendidikan" class="form-select">
                  <option>Pilih Pendidikan</option>
                  @foreach ($pend as $item)
                  <option value="{{$item->id}}">{{$item->Nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <label for="inputKer" class="active">Pekerjaan
                </label>
                <select name="Kerja" id="Kerja" class="form-select">
                  <option>Pilih Pekerjaan</option>
                  @foreach ($kerjas as $item)
                  <option value="{{ $item->id }}">{{$item->Pekerjaan}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <label for="inputStatus" class="active">Agama</label>
                <select name="agama" id="agama" class="form-select">
                  <option>Pilih Agama</option>
                  @foreach ($pil as $item)
                  <option value="{{ $item->ID }}">{{$item->Name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <label for="inputStatus" class="active">Status Perkawinan
                </label>
                <select name="Status" id="Status" class="form-select">
                  <option>Pilih Status Perkawinan</option>
                  @foreach ($stat as $item)
                  <option value="{{$item->id}}">{{$item->Nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputNoHP" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" name="NoHP" id="inputNoHP">
                <small>Masukan tanpa pemisah(ex:089942149256)</small>
              </div>
              <div class="col-md-6">
                <label for="inputNoRum" class="form-label">Nomor Telepon Rumah</label>
                <input type="text" class="form-control" id="inputNoRum" name="NoRumah">
                <small>Masukan tanpa pemisah(ex:0241123456)</small>
              </div>
              <div class="col-md-6">
                <label for="inputInstitusi" class="form-label">Nama Institusi</label>
                <input type="text" class="form-control" id="inputInstitusi" name="Institusi">
              </div>
              <div class="col-md-6">
                <label for="inputAlaIn" class="form-label">Alamat Institusi</label>
                <textarea class="form-control" id="inputAlaIn" name="AlamatIns"></textarea>
              </div>
              <div class="col-md-6">
                <label for="inputNoIns" class="form-label">Telepon Institusi</label>
                <input type="text" class="form-control" id="inputNoIns" name="NoIns">
                <small>Masukan tanpa pemisah(ex:0241123456)</small>
              </div>
              <div class="col-md-12">
                <div class="alert alert-info">
                  <ul>
                    <li>Photo yang anda upload harus jpeg,png,jpg,svg</li>
                    <li>Photo yang anda upload tidak boleh melebihi 2 mb</li>
                  </ul>
                </div>
                <div class="form-group row">
                  <label for="photoinput" class="col-sm-2 col-form-label">Upload Foto KTP</label>
                  <div class="input-group col-sm-5">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="photoinput" required>
                      <label class="custom-file-label" for="photoinput">Pilih Foto</label>
                    </div>
                    <img id="preview" src="#" alt="your image" class="mt-3" style="width:100%;display:none;" />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="photoinput2" class="col-sm-2 col-form-label">Upload Foto Selfie</label>
                  <div class="input-group col-sm-5">
                    <div class="custom-file">
                      <input type="file" name="image2" class="custom-file-input" id="photoinput2" required>
                      <label class="custom-file-label" for="photoinput2">Pilih Foto</label>
                    </div>
                    <img id="preview2" src="#" alt="your image" class="mt-3" style="width:100%;display:none;" />
                  </div>
                </div>
              </div>
              <div class="mt-2 pt-2">
                <label class="custom-control-label">
                  <input onChange="showButton();" type="checkbox" class="custom-control-input" disabled>
                  Saya menyatakan data yang diisi benar dan dapat dipertanggungjawabkan.
                </label>
                <div>
                  <button type="submit" class="btn btn-primary" id="idBtnSub"
                    style="visibility: hidden;">Daftar</button>
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