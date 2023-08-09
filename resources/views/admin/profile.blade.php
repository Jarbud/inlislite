@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <h1>Profil</h1>
@stop

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                <p class="text-muted text-center">
                    @if( Auth::user()->jenis_anggota_id == 1 )
                        Mahasiswa
                    @elseif( Auth::user()->jenis_anggota_id == 2 )
                        Umum
                    @elseif( Auth::user()->jenis_anggota_id == 3 )
                        Admin
                    @elseif( Auth::user()->jenis_anggota_id == 4 )
                        Tamu
                    @endif
                </p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Biodata</a></li>
                    <li class="nav-item"><a class="nav-link" href="#foto" data-toggle="tab">Update Foto</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <form action="{{ route('usermanagement.update',Auth::user()->id) }}" method="post" class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="inputName" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">WA</label>
                                    <div class="col-sm-10">
                                    <input type="number" name="telp" class="form-control" id="inputName2" value="{{ Auth::user()->telp }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    @if( Auth::user()->jenis_anggota_id == 1 )
                                        <label for="inputName3" class="col-sm-2 col-form-label">NIM</label>
                                    @elseif( Auth::user()->jenis_anggota_id == 2 )
                                        <label for="inputName3" class="col-sm-2 col-form-label">NIK</label>
                                    @else
                                        <label for="inputName3" class="col-sm-2 col-form-label">NIM/NIK</label>
                                    @endif
                                    
                                    <div class="col-sm-10">
                                    <input type="number" name="no_pengenal" class="form-control" id="inputName3" value="{{ Auth::user()->no_pengenal }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" id="inputExperience" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="foto">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label for="exampleInputFile" class="col-sm-2 col-form-label">Upload Foto</label>
                                    <div class="input-group col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css" />
@stop



@section('js')

@stop