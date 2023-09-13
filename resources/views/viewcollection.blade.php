@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container" class="fade-up">
        <h1>Koleksi Digital</h1>
      </div>
    </section>

    <section id="search" class="search">
      <div class="container" data-aos="fade-up">
        <h1>Pencarian</h1>
        <div class="row " data-aos="zoom-in" data-aos-delay="100">

          <div class="col-sm-5 d-flex align-items-stretch">
            <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            </div>
          </div>

          <div class="col-sm-3 d-flex align-items-stretch">
            <div class="input-group rounded">
              <select name="input-dropdown" id="input-dropdown" class="input-control rounded">
                <option value="0">Pilih Jenis</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">D</option>
              </select>
            </div>
          </div>
          
          <div class="col-sm-3 d-flex align-items-stretch">
            <div class="input-group rounded">
              <select name="input-dropdown" id="input-dropdown" class="input-control rounded">
                <option value="0">Pilih Jenis</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">D</option>
              </select>
            </div>
          </div>

          <div class="col-sm-1 d-flex align-items-stretch">
            <a href="#" class="btn-search">Search</a>
          </div>

        </div>
      </div>
    </section>


    <section id="view-collection" class="view-collection">
      <div class="container" class="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <h2>Koleksi Unggulan Yang Tersedia</h2>

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card flex-row"><img class="card-img-left" src="assets/img/sampul.png"/>
              <div class="card-body">
                <a href="/viewdetail" class="card-title">Pengaruh Self-Efficacy, Tolerance For Risk, dan Kebebasan dalam Bekerja terhadap Minat Entrepreneurship Mahasiswa Universitas Negeri Padang</a>
                <h3><i class="bi bi-calendar-fill"></i>16 Mei 2022</h3>
                <p class="card-text">Nama Pengarang Panjang Bingit Wadawwww</p>
                <a href="/viewdetail" class="btn btn-viewdetail">Lihat Detail
                  <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card flex-row"><img class="card-img-left" src="assets/img/sampul.png"/>
              <div class="card-body">
                <a href="#" class="card-title">The Influence Of Promotion, Perceived Ease Of Use, And Price Toward Repurchase Intention Transportation Services Go-Jek On Students in Universitas Negeri Padang</a>
                <h3><i class="bi bi-calendar-fill"></i>8 November 2021</h3>
                <p class="card-text">Nama Pengarang</p>
                <a href="/viewdetail" class="btn btn-viewdetail">Lihat Detail
                  <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card flex-row"><img class="card-img-left" src="assets/img/sampul.png"/>
              <div class="card-body">
                <a href="#" class="card-title">Pengaruh Financial Knowledge dan Internal Locus Of Control terhadap Personal Financial Management Behaviour Pelaku Umkm Kota Bukittinggi</a>
                <h3><i class="bi bi-calendar-fill"></i>4 April 2018</h3>
                <p class="card-text">Nama Pengarang</p>
                <a href="/viewdetail" class="btn btn-viewdetail">Lihat Detail
                  <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card flex-row"><img class="card-img-left" src="assets/img/sampul.png"/>
              <div class="card-body">
                <a href="#" class="card-title">Pengaruh Daya Tarik Iklan, Harga Dan Electronic Word Of Mouth (EWOM) terhadap Minat Pengguna Jasa Transportasi Online Grab di Kota Padang</a>
                <h3><i class="bi bi-calendar-fill"></i>25 Juli 2015</h3>
                <p class="card-text">Nama Pengarang</p>
                <a href="/viewdetail" class="btn btn-viewdetail">Lihat Detail
                  <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card flex-row"><img class="card-img-left" src="assets/img/sampul.png"/>
              <div class="card-body">
                <a href="/viewdetail" class="card-title">Hubungan Antara Kompensasi dengan Kepuasan Kerja Guru Honorer Sekolah Menengah Atas Negeri di Kota Administrasi Jakarta Timur</a>
                <h3><i class="bi bi-calendar-fill"></i>13 Maret 2021</h3>
                <p class="card-text">Nama Pengarang</p>
                <a href="/viewdetail" class="btn btn-viewdetail">Lihat Detail
                  <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card flex-row"><img class="card-img-left" src="assets/img/sampul.png"/>
              <div class="card-body">
                <a href="/viewdetail" class="card-title">Macam-Macam Faktor yang Mempengaruhi Profitabilitas di Perusahaan Industri Rokok yang Tercatat di BEJ</a>
                <h3><i class="bi bi-calendar-fill"></i>5 September 2012</h3>
                <p class="card-text">Nama Pengarang</p>
                <a href="/viewdetail" class="btn btn-viewdetail">Lihat Detail
                  <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
            </div>
          </div>
          
        </div>          
      </div>
    </section>


@endsection