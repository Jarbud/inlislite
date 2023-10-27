@extends('adminlte::page')

@section('title', 'Verifikasi Akun')

@section('content_header')
    <h1>Verifikasi Akun</h1>
@stop

@section('content')
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
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
                    <th>Photo KTP</th>
                    <th>Photo Selfie</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($results as $verify)
                    
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $verify->joined_data[0]->name }}</td>
                        <td>
                        <img id="myImg" class="img-fluid" style="height:100px;"
                       src="{{ asset('storage/ktp/'.$verify->photoKtp ) }}"
                       alt="Photo KTP">
                       
                          </td>
                        <td>
                        <img id="myImg" class="img-fluid" style="height:100px;"
                       src="{{ asset('storage/selfie/'.$verify->photoSelfie ) }}"
                       alt="Photo Selfie">
                          </td>
                        <td>
                          @if($verify->joined_data[0]->verifikasi == "true")
                            <span class="badge bg-success">Diterima</span>
                          @elseif($verify->joined_data[0]->verifikasi == "decline")
                            <span class="badge bg-danger">Ditolak</span>
                          @else
                            <a class="btn btn-primary" href="{{ route('updateStatusVerify',[$verify->joined_data[0]->_id,'accept']) }}">Diterima</a>
                            <a class="btn btn-danger" href="{{ route('updateStatusVerify',[$verify->joined_data[0]->_id,'decline']) }}">Ditolak</a>
                          @endif
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
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css" />
    <style>

.img-fluid:hover {opacity: 0.7;}
.img-fluid{
  cursor: pointer;
  transition: 0.3s;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 60px;
  right: 260px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
    </style>
@stop



@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
  });
  // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var img2 = document.getElementById("myImg2")
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }

// img2.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
@stop