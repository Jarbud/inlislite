@extends('master')
@section('content')

<div class="container">
    <div class="content-wrapper">
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <span style="font-size: 50px;">Persyaratan Pendaftaran</span>
            </div>
        </div>
        <div style="height: 350px; overflow:scroll; padding: 5px;">
            <div class="row mt-2 pt-2">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <h2>Persyaratan</h2>
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
            <div class="row mt-2 pt-2">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <h2>Persyaratan</h2>
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
            <div class="row mt-2 pt-2">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <h2>Persyaratan</h2>
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
        </div>
        <div class="mt-2 pt-2">
        <form action="/daftar2">
            <label> <input type="checkbox" id="agree" name="agree" onchange="document.getElementById('button').disabled = !this.checked;"> Saya telah membaca & menyetujui atas persyaratan dan kondisi yang berlaku </label> <br>
            <input type="submit" value="SUBMIT" class="btn btn-primary" style="margin-top: 10px;" id="button" name="button" disabled>
        </form>
        </div>
    </div>
</div>

@endsection