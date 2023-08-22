<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Digital Library</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,
  600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,
  300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"/>

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet"/>
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet"/>
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"/>
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet"/>
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"/>

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet"/>

  @include('statistik_head')

</head>

<body>

  @include('header')

  @yield('content')

  @include('footer')

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/jquery/jquery-3.7.0.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="{{ asset('/assets/js/kode.js') }}"></script>
  <script src="{{ asset('/assets/js/survey.js') }}"></script>
  
</body>

</html>