@extends('master')
@section('content')

@php
    $user = auth()->user();
@endphp

<div class="container" style="margin-top: 65px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success">
                <p>Terimakasih sudah mendaftar menjadi anggota kami, silahkan login akun menggunakan akun yang sudah di daftarkan.</p>
            </div>
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header"></div>
                <div class="card-body">
                    <h4 class="card-title">Anda harus melakukan verifikasi keanggotaan ke admin SAC Fakultas Ekonomi dan Bisnis Universitas Brawijaya</h4>
                    <p class="card-text">Terdapat 2 cara melakukan verifikasi : </p>
                    <p class="card-text">1. Melakukan verifikasi dengan menunjukkan kartu pengenal pada admin SAC secara offline yang bertempat di gedung pascasarjana FEB UB</p>
                    <p class="card-text">2. Melakukan verifikasi dengan menunjukkan kartu pengenal pada admin SAC secara online dengan mengirimkan foto kartu pengenal ke WA admin SAC.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection