@extends('master')
@section('content')

<div class="d-flex justify-content-center align-items-center" style="margin-top: 10px;">
    <div class="modal-content d-flex flex-column rounded shadow" style="width: 500px; height: 240px;">
        <div class="modal-header p-3 text-center">
            <h5 class="mb-0 mx-auto">Kode Verifikasi</h5>
        </div>
        <div class="modal-body p-3 text-center">
            <strong>Silahkan salin kode dibawah ini untuk melakukan verifikasi</strong> <br/><br/>
            <p class="mb-0">{{ Illuminate\Support\Str::random(10) }}</p>
        </div>
        <div class="modal-footer flex-nowrap p-0 d-flex justify-content-center align-items-center" style="margin-bottom: 10px;">
            <button id="copyCodeButton" class="btn btn-primary btn-sm"><strong>Salin Kode</strong></button>
        </div>
    </div>
</div>

@endsection