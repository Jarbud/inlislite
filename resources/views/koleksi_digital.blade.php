@extends('master')
@section('content')

<section class="content-search" style="background-color: #a2abff;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Cari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ramban</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input name="#" type="text" id="#" class="form-control" placeholder="Kata Kunci">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="container">
      <div class="container">
      <script language="JavaScript">
    function toggle(source) {
      checkboxes = document.getElementsByName('cek');
      for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
      }
    }
    </script>
    <input type="checkbox" onClick="toggle(this)"/> Pilih Semua
    <a href="/baca" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Tambah ke tampung</a>
      </div>
        <table class="table">
            <tr>
                <td width="80%">
                <table class="table" style="border: 1px;">
                <tbody class="table-primary" style="text-align: justify;">
                    <tr>
                    <td rowspan="5">
                    <label>
			              <input type="checkbox" name="cek">
			              <i></i>
		              </label>
                       <img src="/assets/img/skripsi.png" style="width: 200px; height: 300px;"/>
                    </td>
                    <tr>
                    <td width="100%" colspan="3">
                        <strong>
                            <p class="link">
                                <a href="#">Pertanian</a>
                            </p>
                        </strong>
                    </td>
                    </tr>
                    <tr>
                    <td width="15%">
                        <p>
                            Isi
                        </p>
                    </td>
                    <td width="1%">
                        <p>
                            :
                        </p>
                    </td>
                    <td width="84%">
                        <p>
                        Paket informasi ini terdiri dari kumpulan artikel mengenai Pertanian dengan rincian pada seri a. ERecources berjumlah 554 judul, dengan cakupan sub topik bahasan meliputi: 1. Pertanian (165 judul) 2. Petani (389 judul); b. Indonesia One Search berjumlah 45 Judul; c. Repositori Institusi berjumlah 632 artikel mengenai Pertanian, dengan cakupan sub topik bahasan meliputi: 1. Agribisnis (427 judul) 2. Bioteknologi Pertanian (40 judul) 3. Teknologi Pertanian (165 judul); d. Media Massa Online berjumlah 215 artikel, dengan cakupan sub topik bahasan meliputi: 1. Agronomi (67 judul) 2. Agribisnis (4 judul) 3. Bioteknologi Pertanian (4 judul) 4. Genetika Pertanian (8 judul) 5. Irigasi Pertanian (28 judul) 6. Konservasi tanah (7 judul) 7. Pemuliaan Tanaman (5 judul) 8. Penyakit dan pembasmian pada tanaman pertanian (22 judul) 9. Pertanian (65 judul) 10. Teknik Pemupukkan (5 judul).
                        </p>
                    </td>
                    </tr>
                    <tr>
                    <td width="15%">
                        <p>
                            Jenis Bahan
                        </p>
                    </td>
                    <td width="1%">
                        <p>
                            :
                        </p>
                    </td>
                    <td width="84%">
                        <p>
                        Sumber Elektronik (teks) (sumber daya sambung jaring)
                    </p>
                    </td>
                    </tr>
                    <tr>
                    <td width="15%">
                        <p>
                            Kreator
                        </p>
                    </td>
                    <td width="1%">
                        <p>
                            :
                        </p>
                    </td>
                    <td width="84%">
                        <p>
                        Sumber Elektronik (teks) (sumber daya sambung jaring)
                    </p>
                    </td>
                    </tr>
                    <tr>
                        <td>
                    <table class="table table-bordered">
                        <thead>
                            <tr width="100%">
                            <th>No</th>
                            <th>Nama File</th>
                            <th>Nama File Format Flash</th>
                            <th>Format File</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                    </td>
                    </tr>
                    </tr></break>
                </tr>
                </tbody>
            </table>
                </td>
                <td width="20%">
                <Strong>Lebih Spesifik</Strong>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Jenis Bahan
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Monograf
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Pendidikan
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Indonesia
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Inggris
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Pengarang
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Indonesia
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Inggris
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Penerbit
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Indonesia
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Inggris
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Lokasi Terbitan
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Indonesia
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Inggris
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Tahun Terbit
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Indonesia
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Inggris
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Subjek
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Indonesia
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Inggris
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div><br>
                </td>
            </tr>
        </table>
    </div>
</section>

@endsection 