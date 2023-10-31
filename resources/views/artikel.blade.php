@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container" class="fade-up">
        <h1>Artikel</h1>
      </div>
    </section>

    <section id="search" class="search">
      <div class="container" data-aos="fade-up">
        <h1>Pencarian</h1>
        <div class="row">

          <div class="col-sm-6 d-flex align-items-stretch">
            <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            </div>
          </div>

          <div class="col-sm-5 d-flex align-items-stretch">
            <div class="input-group rounded">
              <select name="input-dropdown" id="input-dropdown" class="input-control rounded">
                <option value="0">Pilih Jenis</option>
                <option value="A">Judul</option>
                <option value="B">Subyek</option>
                <option value="C">Pengarang</option>
              </select>
            </div>
          </div>

          <div class="col-sm-1 d-flex align-items-stretch">
            <a href="#" class="btn-search">Search</a>
          </div>

        </div>
      </div>
    </section>

    <section id="artikel" class="artikel">
      <div class="container" class="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-6 d-flex align-items-stretch">
            <div class="artikel-content row">
              <h4>Pengarang</h4>
              <div class="judul-artikel"><a href="#">Judul Artikel</a></div>
              <a class="btn btn-viewartikel"  href="#">Lihat Detail<i class="bi bi-arrow-right-short"></i></a>
            </div>
          </div>

          <div class="col-6 d-flex align-items-stretch">
            <div class="artikel-content row">
              <h4>Penerbit</h4>
              <div class="judul-artikel"><a href="#">Disini Itu Tempat Buat Judul Artikelnya</a></div>
              <a class="btn btn-viewartikel" href="#">Lihat Detail<i class="bi bi-arrow-right-short"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>



@endsection