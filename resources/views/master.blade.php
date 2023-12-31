<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Digital Library</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

  <!-- Vendor CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/0.4.4/aos.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"/>
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet"/>
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"/>

        <!-- Template Main CSS File -->
        <link href="/css/styling.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

        <!--<link href="/assets/css/style.css" rel="stylesheet"/>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <script>
            let select = document.querySelector("select");
            let divs = document.querySelector(".div-p");
            let result = document.querySelector("#result");

            function func1(par){
                result.innerText = divs[par - 1].innerText;
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
            $('.carousel').carousel({interval: 7000});
            });
        </script>

        <script>
            $('#checkbox-all-koleksi').click(function() {
                $(this.form.elements).filter(':checkbox').prop('checked' , this.checked);
            });
        </script>

        <script>
            import DataTable from 'datatables.net-dt';
 
            let table = new DataTable('#konten-tabel', {
                // config options...
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#konten-tabel').DataTable();
            });
        </script>

        <!-- Template Main CSS File -->
        <link href="/assets/css/style.css" rel="stylesheet" />

        @include('statistik_head')

    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <a class="navbar-logo" href="/">
                    <img src="{{ asset('assets/img/logo-perpus-100.png') }}" alt="...">
                </a>
                <h1 class="logo me-auto"><a href="#">Digital Library</a></h1>
      
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Baca di Tempat</a></li>
                                <li><a href="/borrowed">Peminjaman Buku</a></li>
                                <li><a href="/return">Pengembalian Buku</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Jelajahi</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/viewcollection">Koleksi Digital</a></li>
                                <li><a href="/viewopac">OPAC</a></li>
                                <li><a href="/statistik">Statistik</a></li>
                                <li><a href="/artikel">Artikel</a></li>
                                <li><a href="/survei">Survei</a></li>
                            </ul>
                        </li>
                        <li><a href="/bukutamu">Buku Tamu</a></li>
                        <li><a href="#">Keanggotaan Online</a></li>
                    </ul>
                </nav>
                <!-- .navbar -->

                <a href="{{ route('login') }}" class="get-started-btn">Login</a>

            </div>
        </header><!-- End Header -->

        <!-- ========= Konten ===========-->
        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="contact">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Alamat :</h3>
                                        <p>Fakultas Ekonomi & Bisnis<br>
                                        Universitas Brawijaya<br>
                                        Jl. MT. Haryono No.165<br>
                                        Malang, 21212</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="contact">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Hubungi Kami :</h3>
                                        <p>0812 3456 7890<br>0341 098 765</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="contact">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email :</h3>
                                        <p>contoh@email.com<br>contact@email.com</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="contact">
                                        <i class="bi bi-clock"></i>
                                        <h3>Jam Buka :</h3>
                                        <p>Senin - Jum'at<br>9:00WIB - 17:00WIB</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="footer-links">
                                        <h4>Layanan Kami</h4>
                                        <ul>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Online Public Access</a></li>                                        <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan Koleksi Digital</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Statistika</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Survei</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="footer-links">
                                        <h4>Layanan Kami</h4>
                                        <ul>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Online Public Access</a></li>                                        <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan Koleksi Digital</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Statistika</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Survei</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="col-lg-3 col-md-6 footer-contact">
                            <h3>Digital Library</h3>
                                <p>
                                Fakultas Ekonomi dan Bisnis<br>
                                Universitas Brawijaya<br>
                                Kota Malang<br><br>
                                <strong>Phone:</strong> +62 8123 4567 890<br>
                                <strong>Email:</strong> digilib_feb@example.com<br>
                                </p>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Koleksi Unggulan</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Monograf</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Skripsi</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Tesis</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Manuskrip</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Terbitan Berkala</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Layanan Kami</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Online Public Access</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan Koleksi Digital</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Statistika</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Survey</a></li>
                            </ul>
                        </div>-->

                    </div>
                </div>
            </div>

            <div class="container d-md-flex py-4">
                <div class="container copyright text-center mt-4">
                    <p>&copy; <span>Copyright All Rights Reserved</span></p>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="/assets/vendor/aos/aos.js"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/assets/vendor/php-email-form/validate.js"></script>
        <script src="/assets/vendor/jquery/jquery-3.7.0.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <!-- Template Main JS File -->
        <script src="/assets/js/main.js"></script>
        <script src="{{ asset('/assets/js/kode.js') }}"></script>
        <script src="{{ asset('/assets/js/survey.js') }}"></script>

    </body>

</html>
