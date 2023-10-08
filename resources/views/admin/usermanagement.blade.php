@extends('adminlte::page')

@section('title', 'User Management')

@section('content_header')
    <h1>User Management</h1>
@stop

@section('content')
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a class="btn btn-success" href="{{ route('usermanagement.create') }}"> Buat Akun Baru </a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                  </div>
              @endif
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Anggota</th>
                    <th>NIM/NIK</th>
                    <th>WA</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->jenis_anggota_id == 1)
                                <span>Mahasiswa</span>
                            @elseif($user->jenis_anggota_id == 2)
                                <span>Umum</span>
                            @elseif($user->jenis_anggota_id == 3)
                                <span>Admin</span>
                            @elseif($user->jenis_anggota_id == 4)
                                <span>Tamu</span>
                            @endif
                        </td>
                        <td>{{ $user->no_pengenal }}</td>
                        <td>{{ $user->telp }}</td>
                        <td>
                            
                            <form action="{{route('usermanagement.destroy', $user->id)}}" method="post">
                            <a class="btn btn-primary" href="{{ route('usermanagement.edit',$user->id) }}">Edit</a>
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css" />
@stop



@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
  });
</script>
@stop