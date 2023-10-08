@extends('adminlte::page')

@section('title', 'Verifikasi')

@section('content_header')
    <h1>Verifikasi</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header p-2">
                        @if(Auth::user()->verifikasi == "true")
                            Akun terverifikasi
                        @else
                            Upload Foto KTP dan Selfie untuk melakukan verifikasi
                        @endif
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif    
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif   
                        @if (Auth::user()->verifikasi == "false")
                            <form action="{{ route('uploadPhotoVerify',Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
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
                                            <input type="file" name="image" class="custom-file-input" id="photoinput">
                                            <label class="custom-file-label" for="photoinput">Pilih Foto</label>
                                        </div>
                                        <img id="preview" src="#" alt="your image" class="mt-3" style="width:100%;display:none;"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photoinput2" class="col-sm-2 col-form-label">Upload Foto Selfie</label>
                                    <div class="input-group col-sm-5">
                                        <div class="custom-file">
                                            <input type="file" name="image2" class="custom-file-input" id="photoinput2">
                                            <label class="custom-file-label" for="photoinput2">Pilih Foto</label>
                                        </div>
                                        <img id="preview2" src="#" alt="your image" class="mt-3" style="width:100%;display:none;"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="koderegister" class="col-sm-2 col-form-label">Kode Register Keanggotaan</label>
                                    <div class="input-group col-sm-5">
                                        <input type="text" name="kode" class="form-control" id="koderegister" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @elseif(Auth::user()->verifikasi == "pending")
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-info"></i>Status Verifikasi Masih Pending!</h5>
                            Verifikasi anda sedang dilakukan pengecekan oleh admin, waktu maksimal pengecekan 1 x 24 jam(hari kerja), jika sudah terlewat dengan waktu tersebut, silahkan bertanya ke customer service yang sudah tertera di website DIGILIB.
                        </div>
                        @elseif(Auth::user()->verifikasi == "decline")
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-info"></i>Status Verifikasi Anda Ditolak!</h5>
                            Akun anda ditolak karena persyaratan tidak sesuai dengan yang diajukan, silahkan melakukan penguploadan ulang.
                        </div>
                        <form action="{{ route('updatePhotoVerify',Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
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
                                            <input type="file" name="image" class="custom-file-input" id="photoinput">
                                            <label class="custom-file-label" for="photoinput">Pilih Foto</label>
                                        </div>
                                        <img id="preview" src="#" alt="your image" class="mt-3" style="width:100%;display:none;"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photoinput2" class="col-sm-2 col-form-label">Upload Foto Selfie</label>
                                    <div class="input-group col-sm-5">
                                        <div class="custom-file">
                                            <input type="file" name="image2" class="custom-file-input" id="photoinput2">
                                            <label class="custom-file-label" for="photoinput2">Pilih Foto</label>
                                        </div>
                                        <img id="preview2" src="#" alt="your image" class="mt-3" style="width:100%;display:none;"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="koderegister" class="col-sm-2 col-form-label">Kode Register Keanggotaan</label>
                                    <div class="input-group col-sm-5">
                                        <input type="text" name="kode" class="form-control" id="koderegister" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @elseif(Auth::user()->verifikasi == "true")
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-info"></i>Akun Anda Sudah Terverifikasi!</h5>
                            Anda sekarang sudah bisa membaca atau mendownload jurnal yang berada di koleksi digital.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css" />
@stop



@section('js')
<script>
        photoinput.onchange = evt => {
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = photoinput.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }

        photoinput2.onchange = evt => {
            preview = document.getElementById('preview2');
            preview.style.display = 'block';
            const [file] = photoinput2.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
@stop