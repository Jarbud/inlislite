@extends('master')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat Datang<br>di Digital Library Fakultas Ekonomi dan Bisnis<br>Universitas Brawijaya</h1>
      <h2>Masuk untuk mengakses konten secara luas!</h2>
      <a href="#" class="btn-get-started">Masuk Sekarang</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h1>Koleksi Kami</h1>
        <p>Akses berbagai macam bacaan untuk umum</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!--Koleksi Buku di Beranda-->
    <section id="collection" class="collection">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <!--<div class="col-lg-2 d-flex align-items-stretch">
            <div class="collection-item">
              <img src="assets/img/skripsi.png" class="img-fluid rounded-top" alt="..."/>
              <div class="collection-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Skripsi</h4>
                </div>

                <h3><a href="#">Judul Skripsi</a></h3>
                <p>Nama Pengarang</p>
              </div>
            </div>
        </div> -->


        <div class="col-lg-2 d-flex align-items-stretch">
            <div class="collection-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="collection-content">
                <h3><a href="#">Judul Yang Panjang Banget Sampe Menuh Menuhin Bla Bla Bla Gitu</a></h3>
                <p>Nama Pengarang</p>
              </div>
            </div>
        </div> <!-- End collection Item-->

        <div class="col-lg-2 d-flex align-items-stretch">
            <div class="collection-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="collection-content">
                <h3><a href="#">Faktor-Faktor yang Mempengaruhi Etika Bisnis Islami Pengusaha Percetakan</a></h3>
                <p>Nama Pengarang</p>
              </div>
            </div>
        </div> <!-- End collection Item-->

        <div class="col-lg-2 d-flex align-items-stretch">
            <div class="collection-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="collection-content">
                <h3><a href="#">Proses Penataan Arsip dalam Memudahkan Pencarian Arsip</a></h3>
                <p>Nama Pengarang</p>
              </div>
            </div>
        </div> <!-- End collection Item-->

        <div class="col-lg-2 d-flex align-items-stretch">
            <div class="collection-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="collection-content">
                <h3><a href="#">Manajemen Kearsipan pada Pascasarjana Fakultas Ekonomi dan Bisnis</a></h3>
                <p>Nama Pengarang</p>
              </div>
            </div>
        </div> <!-- End collection Item-->

        <div class="col-lg-2 d-flex align-items-stretch">
            <div class="collection-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="collection-content">
                <h3><a href="#">Analisis Prospek Ekspor Industri Kreatif dalam Meningkatkan Pertumbuhan Ekonomi</a></h3>
                <p>Nama Pengarang</p>
              </div>
            </div>
        </div> <!-- End collection Item-->

        <div class="col-lg-2 d-flex align-items-stretch">
            <div class="collection-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="collection-content">
                <h3><a href="#">Pengaruh Media Sosial dan Rasa Percaya Diri (Self Confidence) terhadap Minat Berwirausaha</a></h3>
                <p>Nama Pengarang</p>
              </div>
            </div>
        </div> <!-- End collection Item-->

          <div class="collection-button">
            <div class="d-flex justify-content-between align-items-center">
              <a href="/viewcollection" class="btn-collection">Lihat Semua Koleksi Digital</a>
            </div> 
          </div> 


        </div> 
      </div>
    </section>


    <!-- ============ Popular =========== -->
    <section id="popular" class="popular">
      <div class="container" data-aos="fade-up">

        <h1>Terpopuler</h1>
        <p>Yang paling sering dicari</p>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-md-3 d-flex align-items-stretch">
            <div class="popular-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="popular-content">
                <h3><a href="#">Pengaruh Media Sosial dan Rasa Percaya Diri (Self Confidence) terhadap Minat Berwirausaha</a></h3>
                <h4>Nama Pengarang</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch">
            <div class="popular-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="popular-content">
                <h3><a href="#">Analisis Faktor-Faktor yang Mempengaruhi Penggunaan Uang Elektronik pada Mahasiswa</a></h3>
                <h4>Nama Pengarang</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch">
            <div class="popular-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="popular-content">
                <h3><a href="#">Analisis Strategi Bersaing Coffee Shop Menggunakan Skema Business Model Canvas (Studi pada Sasadakopi Roastery)</a></h3>
                <h4>Nama Pengarang</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch">
            <div class="popular-item">
              <img src="assets/img/sampul.png" class="img-fluid rounded-top" alt="..."/>
              <div class="popular-content">
                <h3><a href="#">Peranan Yakuza Terhadap Bisnis Prostitusi di Jepang</a></h3>
                <h4>Nama Pengarang</h4>
              </div>
            </div>    
          </div>
        </div>
      </div>
    </section>


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h1>Layanan</h1>
        <p>Layanan Digital Library Fakultas Ekonomi dan Bisnis</p>
      </div>
    </div><!-- End Breadcrumbs -->



    <!--layanan : service-->
    <section id="service" class="service">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="service-content">
              <h3>Apa saja layanan kami?</h3>
            </div>
          </div>

          <div class="col-lg-9 d-flex align-items-stretch justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4">
                  <div class="icon-box mt-4 mt-xs-4">
                    <i class="bi bi-book"></i>
                    <h4><a href="#">Baca<br>Di Tempat</a></h4>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="icon-box mt-4 mt-xs-4">
                    <i class="bi bi-receipt"></i>
                    <h4><a href="/borrowed">Peminjaman Buku</a></h4>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="icon-box mt-4 mt-xs-4">
                    <i class="bi bi-archive"></i>
                    <h4><a href="/return">Pengembalian Buku</a></h4>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    <!--end layanan-->

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h1>Jelajahi</h1>
        <p>Jelajahi info terkait</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Jelajah Section : Explore ======= -->
    <section id="explore" class="explore">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-6">
            <div class="icon-box">
              <i class="bi bi-collection"></i>
              <h3><a href="/viewopac">OPAC</a></h3>
            </div>
          </div>
          <div class="col-6">
            <div class="icon-box">
              <i class="bi bi-graph-up"></i>
              <h3><a href="/statistic">Statistik</a></h3>
            </div>
          </div>
          <div class="col-6">
            <div class="icon-box">
              <i class="bi bi-paperclip"></i>
              <h3><a href="">Artikel</a></h3>
            </div>
          </div>
          <div class="col-6">
            <div class="icon-box">
              <i class="bi bi-clipboard-data"></i>
              <h3><a href="">Survei</a></h3>
            </div>
          </div>

      </div>
    </section><!-- End Jelajah Section -->

  </main><!-- End #main -->

@endsection