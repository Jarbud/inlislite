<!-- ======= Header ======= -->
<header id="header">
  <div class="container d-flex align-items-center">

    <a class="navbar-logo" href="/awal">
      <img src="/assets/img/logo-perpus-100.png" alt="...">
    </a>
    <h1 class="logo me-auto"><a href="/">Digital Library</a></h1>


    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="active" href="/
          ">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/baca">Baca di Tempat</a></li>
            <li><a href="#">Peminjaman Buku</a></li>
            <li><a href="#">Pengembalian Buku</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Jelajahi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/opac">OPAC</a></li>
            <li><a href="#">Layanan Koleksi Digital</a></li>
            <li><a href="/statistik">Statistik</a></li>
            <li><a href="#">Artikel</a></li>
            <li><a href="#">Survey</a></li>
          </ul>
        </li>
        <li><a href="/buku">Buku Tamu</a></li>
        <li><a href="{{ url('/pendaftaran') }}">Pendaftaran Anggota</a></li>

        <!-- <li><a href="#">Keanggotaan Online</a></li> -->
        <!--<li><a href="about.html">Buku Tamu</a></li>-->
        <!--<li><a href="courses.html">Baca di Tempat</a></li>-->
        <!--<li><a href="trainers.html">Keanggotaan Online</a></li>-->
        <!--<li><a href="events.html">OPAC</a></li>-->
        <!--<li><a href="pricing.html">Statistic</a></li>-->
      </ul>
    </nav>
    <!-- .navbar -->
    @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
      @auth
      @if(Auth::user()->jenis_anggota_id == 3)
      <a href="{{ url('/home') }}" class="get-started-btn">{{ Auth::user()->name }}</a>
      @else
      <a href="{{ url('/dashboard') }}" class="get-started-btn">{{ Auth::user()->name }}</a>
      @endif
      @else
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('login') }}" class="get-started-btn">Log in</a>
        </div>
      </div>
      @endauth
    </div>
    @endif
  </div>
</header>
<!-- End Header -->