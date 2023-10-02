@extends('adminlte::page')

@section('title', 'Upload Karya Ilmiah')

@section('content_header')
    <h1>Upload Karya Ilmiah</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><a class="btn btn-success" href="/karya-ilmiah-mahasiswa"> Kembali </a></h3>
                </div>
                <div class="card-body">
              @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif   
                    <form action="{{ route('Karyailmiahmhs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf    
                    <div class="bs-stepper">
                        <div class="bs-stepper-header" role="tablist">
                            <!-- your steps here -->
                            <div class="step" data-target="#logins-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Biodata</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#information-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Karya Ilmiah</span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                        <!-- your steps content here -->
                        <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                            <div class="form-group">
                                <label for="inpName">Nama<span style="color:red;">*</span></label>
                                <input type="text" id="inpName" name="Name" class="form-control"
                                    placeholder="Masukkan nama lengkap" autofocus required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" id="userEmail" name="userEmail" class="form-control"
                                    value="{{ Auth::user()->email }}">
                            </div>

                            <div class="form-group">
                                <label for="inpNim">Nim<span style="color:red;">*</span></label>
                                <input type="number" id="inpNim" name="Nim" class="form-control"
                                    placeholder="Masukkan NIM" required>
                            </div>

                            <div class="form-group">
                                <label for="inpProdi">Prodi<span style="color:red;">*</span></label>
                                <input type="text" id="inpProdi" name="Prodi" class="form-control"
                                    placeholder="Masukkan nama prodi" required>
                            </div>

                            <div class="form-group">
                                <label for="inpWa">Whatsapp<span style="color:red;">*</span></label>
                                <input type="number" id="inpWa" name="Wa" class="form-control"
                                    placeholder="Masukkan no WA" required>
                            </div>

                            <div class="form-group">
                                <label for="inpEmail">Email<span style="color:red;">*</span></label>
                                <input type="email" id="inpEmail" name="Email" class="form-control"
                                    placeholder="Masukkan email" required>
                            </div>

                            <div class="form-group">
                                <label for="inpHibah">Hibah<span style="color:red;">*</span></label>
                                <input type="number" id="inpHibah" name="Hibah" class="form-control"
                                    placeholder="Masukkan hibah" required>
                                <small class="form-text text-muted">Hibah "ALUMNI PEDULI" bersifat : Tidak mengikat dan Sukarela. Telah disetorkan Hibah Pembelian Buku ke Rekening <b>Bank BRI</b> KCP Universitas Brawijaya, Nomor Rekening : <b>1807-01-000289-56-0</b> atas nama: <b>"Alumni Peduli"</b></small>
                            </div>

                            <div class="form-group">
                                <label for="photoinput">Upload Bukti Transfer</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="Bukti" class="custom-file-input" id="photoinput">
                                        <label class="custom-file-label" for="photoinput">Pilih File</label>
                                    </div>
                                </div>
                                <img id="preview" src="#" alt="your image" class="mt-3" style="width:150px;height:200px;display:none;"/>
                            </div>
                            <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                        </div>
                        <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                        <center>
                            <img style="width:50%" src="https://lh6.googleusercontent.com/BcgYx3qyJW63jQDCXEtjV3SYPQd5sirjMkJcyuCkhf8VtNEVIpUNKH5JJku_SVFXiWFcvWrA7USuoFN82Q4Cm6ybnnnghye-4vrmI5OPA6ZcmNsp9XfIYc8q0P-WKM6EhA=w1176" alt="">
                        </center>
                        <div class="form-group">
                            <label for="inpJudul">Judul<span style="color:red;">*</span></label>
                            <input type="text" id="inpJudul" name="Judul" class="form-control"
                                placeholder="Masukkan Judul" required>
                        </div>

                        <div class="form-group">
                            <label for="inpPemb">Pembimbing/Promotor<span style="color:red;">*</span></label>
                            <input type="text" id="inpPemb" name="Pembimbing" class="form-control"
                                placeholder="Masukkan nama pembimbing/promotor" required>
                        </div>

                        <div class="form-group">
                            <label for="inpKp1">Ko - Promotor 1</label>
                            <input type="text" id="inpKp1" name="KoPromotor1" class="form-control"
                                placeholder="Masukkan nama ko - promotoro 1">
                        </div>

                        <div class="form-group">
                            <label for="inpKp2">Ko - Promotor 2</label>
                            <input type="text" id="inpKp2" name="KoPromotor2" class="form-control"
                                placeholder="Masukkan nama ko - promotoro 2">
                        </div>

                        <div class="form-group">
                            <label for="inpPeng1">Penguji 1<span style="color:red;">*</span></label>
                            <input type="text" id="inpPeng1" name="Penguji1" class="form-control"
                                placeholder="Masukkan nama penguji 1" required>
                        </div>

                        <div class="form-group">
                            <label for="inpPeng2">Penguji 2<span style="color:red;">*</span></label>
                            <input type="text" id="inpPeng2" name="Penguji2" class="form-control"
                                placeholder="Masukkan nama penguji 2" required>
                        </div>

                        <div class="form-group">
                            <label for="inpPeng3">Penguji 3</label>
                            <input type="text" id="inpPeng3" name="Penguji3" class="form-control"
                                placeholder="Masukkan nama penguji 3">
                        </div>

                        <div class="form-group">
                            <label for="inpPeng4">Penguji 4</label>
                            <input type="text" id="inpPeng4" name="Penguji4" class="form-control"
                                placeholder="Masukkan nama penguji 4">
                        </div>

                        <div class="form-group">
                            <label for="inpPeng5">Penguji 5(optional)</label>
                            <input type="text" id="inpPeng5" name="Penguji5" class="form-control"
                                placeholder="Masukkan nama penguji 5">
                        </div>

                        <div class="form-group">
                            <label for="inpPeng6">Penguji 6(optional)</label>
                            <input type="text" id="inpPeng6" name="Penguji6" class="form-control"
                                placeholder="Masukkan nama penguji 6">
                        </div>

                        <div class="form-group">
                            <label for="FileBgAwal">Upload Bagian Awal<span style="color:red;">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="FileBgAwal" class="custom-file-input" id="FileBgAwal" required>
                                    <label class="custom-file-label" for="FileBgAwal">Pilih File</label>
                                </div>
                            </div>
                            <img id="preview" src="#" alt="your image" class="mt-3" style="width:150px;height:200px;display:none;"/>
                        </div>

                        <div class="form-group">
                            <label for="FileBgUtama">Upload Bagian Utama<span style="color:red;">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="FileBgUtama" class="custom-file-input" id="FileBgUtama" required>
                                    <label class="custom-file-label" for="FileBgUtama">Pilih File</label>
                                </div>
                            </div>
                            <img id="preview" src="#" alt="your image" class="mt-3" style="width:150px;height:200px;display:none;"/>
                        </div>

                        <div class="form-group">
                            <label for="FileBgAkhir">Upload Bagian Akhir<span style="color:red;">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="FileBgAkhir" class="custom-file-input" id="FileBgAkhir" required>
                                    <label class="custom-file-label" for="FileBgAkhir">Pilih File</label>
                                </div>
                            </div>
                            <img id="preview" src="#" alt="your image" class="mt-3" style="width:150px;height:200px;display:none;"/>
                        </div>
                        <fieldset class="form-group">
                            <label>Pernyataan<span style="color:red;">*</span></label>
                            <small class="form-text text-muted">Saya telah membaca dan memahami <a style="color:blue" data-toggle="modal" data-target="#exampleModal">Surat Pernyataan Publikasi Karya Ilmiah</a>, maka dengan ini saya menyatakan:</small>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Pernyataan" id="optionsRadios1" value="Setuju" checked="">
                                <label class="form-check-label" for="optionsRadios1">
                                Setuju
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Pernyataan" id="optionsRadios2" value="Tidak Setuju">
                                <label class="form-check-label" for="optionsRadios2">
                                Tidak Seteju
                                </label>
                            </div>
                        </fieldset>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
              
                </div>
                </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Surat Pernyataan Publikasi Karya Ilmiah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Dengan ini saya (Nama Penulis dan NIM) tersebut di atas menyatakan bahwa:<br>
        <ol>
            <li>Memberikan hak bebas royalti kepada Self Access Centre (SAC) Fakultas Ekonomi dan Bisnis Universitas Brawijaya atas penulisan karya ilmiah saya, demi pengembangan ilmu pengetahuan</li>
            <li>Memberikan hak menyimpan, mengalih mediakan /mengalih formatkan, mengelola dalam bentuk pangkalan data (database), mendistribusikannya, serta menampilkannya dalam bentuk softcopy untuk kepentingan akademis kepada Self Access Centre (SAC) Fakultas Ekonomi dan Bisnis Universitas Brawijaya, tanpa perlu meminta ijin dari saya selama tetap mencantumkan nama saya sebagai penulis / pencipta.</li>
            <li>Bersedia dan menjamin untuk menanggung secara pribadi tanpa melibatkan pihak Self Access Centre (SAC) Fakultas Ekonomi dan Bisnis Universitas Brawijaya, dari semua bentuk tuntutan hukum yang timbul atas pelanggaran hak cipta dalam karya ilmiah ini.</li>
        </ol>
        <br>
        Demikian pernyataan ini saya buat dengan sesungguhnya dan semoga dapat digunakan sebagaimana semestinya. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
@stop



@section('js')
<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script>
    photoinput.onchange = evt => {
        preview = document.getElementById('preview');
        preview.style.display = 'block';
        const [file] = photoinput.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }

    $('#FileBgAwal').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })

    $('#FileBgUtama').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })

    $('#FileBgAkhir').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })

    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

</script>
@stop