@extends('master')
@section('content')

<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <div class="navbar">
            <div class="subnav">
                <div class="subnav-content">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="/baca">Bacaan saat ini</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/simpan">Arsip</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-4 d-flex align-items-stretch">
                <div class="course-item">
                    <img
                        src="/assets/img/skripsi.png"
                        class="img-fluid"/>
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4><a href="#">Baca</a></h4>
                            <a href="#"><span><i class="bi bi-arrow-counterclockwise"></i></span></a>
                        </div>
                        <h3><a href="course-details.html">Website Design</a></h3>
                        <p>
                            Et architecto provident deleniti facere repellat nobis iste.
                            Id facere quia quae dolores dolorem tempore.
                        </p>
                    </div>
                </div>
            </div> <!-- End Course Item-->
            <div class="col-lg-3 col-md-4 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="course-item">
                    <img
                        src="/assets/img/skripsi.png"
                        class="img-fluid"
                        alt="..."
                    />
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4><a href="#">Baca</a></h4>
                            <a href="#"><span><i class="bi bi-arrow-counterclockwise"></i></span></a>
                        </div>
                        <h3>
                            <a href="course-details.html">Search Engine Optimization</a>
                        </h3>
                        <p>
                            Et architecto provident deleniti facere repellat nobis iste.
                            Id facere quia quae dolores dolorem tempore.
                        </p>
                    </div>
                </div>
            </div> <!-- End Course Item-->
        </div>
    </div>
</section>

@endsection