@extends('adminlte::page')

@section('title', 'User Management')

@section('content_header')
    <h1>Tambah Akun</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><a class="btn btn-info" href="/admin/usermanagement"> Kembali </a></h3>
                </div>
            
            <div class="card-body">
            @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                  </div>
              @endif
            <form action="{{ route('usermanagement.update',$user->id) }}" method="post">
        @csrf
        @method('PUT')
        {{-- Name field --}}
        <label>Nama Lengkap</label>
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ $user->name }}" placeholder="Masukkan nama lengkap" autofocus required>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Jenis Anggota field --}}
        <label>Jenis Anggota</label>
        <div class="input-group mb-3">
            <select class="custom-select" name="jenis_anggota_id">
                @if ($user->jenis_anggota_id == 1)
                <option value="1" Selected>Mahasiswa</option>
                <option value="2">Umum</option>
                <option value="3">Admin</option>
                <option value="4">Tamu</option>
                @elseif($user->jenis_anggota_id == 2)
                <option value="1" >Mahasiswa</option>
                <option value="2" Selected>Umum</option>
                <option value="3">Admin</option>
                <option value="4">Tamu</option>
                @elseif($user->jenis_anggota_id == 3)
                <option value="1" >Mahasiswa</option>
                <option value="2" >Umum</option>
                <option value="3" Selected>Admin</option>
                <option value="4">Tamu</option>
                @elseif($user->jenis_anggota_id == 4)
                <option value="1" >Mahasiswa</option>
                <option value="2" >Umum</option>
                <option value="3" >Admin</option>
                <option value="4" Selected>Tamu</option>
                @endif
            </select>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-people-arrows"></span>
                </div>
            </div>
        </div>

        {{-- NIM field --}}
        @if($user->jenis_anggota_id == 1)
        <label>NIM</label>
        @elseif($user->jenis_anggota_id == 2)
        <label>NIK</label>
        @else
        <label>NIM/NIK</label>
        @endif
        <div class="input-group mb-3">
            <input type="number" name="no_pengenal" class="form-control @error('no_pengenal') is-invalid @enderror"
                   value="{{ $user->no_pengenal }}" placeholder="Masukkan NIM/NIK" required>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-id-card"></span>
                </div>
            </div>

            @error('nim')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Telp field --}}
        <label>WA</label>
        <div class="input-group mb-3">
            <input type="number" name="telp" class="form-control @error('telp') is-invalid @enderror"
                   value="{{ $user->telp }}" placeholder="Masukkan nomor WA aktif(08.....)" >

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fab fa-whatsapp-square"></span>
                </div>
            </div>

            @error('telp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Email field --}}
        <label>Email</label>
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   value="{{ $user->email }}" placeholder="{{ __('adminlte::adminlte.email') }}" required>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <label>Password</label><br>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
            Reset Password
        </button>
        
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Kembali</button>
                
            </div> -->
            </div>
        </div>
        </div>
        <!-- <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                   placeholder="{{ __('adminlte::adminlte.password') }}" required value="{{ $user->password }}">

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
        </div> -->


        {{-- Register button --}}
        <button type="submit" style="margin-top: 20px;" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            Update Akun
        </button>

    </form>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Password Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('newpassword',$user->id) }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="{{ __('adminlte::adminlte.password') }}" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float:right">Simpan</button>
                </form>
            </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop