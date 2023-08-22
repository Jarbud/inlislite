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
            <form action="{{ route('usermanagement.store') }}" method="post">
        @csrf

        {{-- Name field --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}" placeholder="Masukkan nama lengkap" autofocus required>

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
        <div class="input-group mb-3">
            <select class="custom-select" name="jenis_anggota_id">
                <option selected>Silahkan Pilih Jenis Anggota</option>
                <option value="1">Mahasiswa</option>
                <option value="2">Umum</option>
                <option value="3">Admin</option>
                <option value="2">Tamu</option>

            </select>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-people-arrows"></span>
                </div>
            </div>
        </div>

        {{-- NIM field --}}
        <div class="input-group mb-3">
            <input type="number" name="no_pengenal" class="form-control @error('no_pengenal') is-invalid @enderror"
                   value="{{ old('nim') }}" placeholder="Masukkan NIM/NIK" required>

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
        <div class="input-group mb-3">
            <input type="number" name="telp" class="form-control @error('telp') is-invalid @enderror"
                   value="{{ old('telp') }}" placeholder="Masukkan nomor WA aktif(08.....)" >

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
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" required>

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
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                   placeholder="{{ __('adminlte::adminlte.password') }}" required>

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


        {{-- Register button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            Tambah Akun
        </button>

    </form>
            </div>
            </div>
        </div>
    </div>
</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop