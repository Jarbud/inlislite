@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container" class="fade-up">
        <h1>Statistik</h1>
      </div>
    </section>

    <section id="statistic" class="statistic">
        <div class="chart">
            <ul class="numbers">
                <li><span>100%</span></li>
                <li><span>50%</span></li>
                <li><span>0</span></li>
            </ul>
            <ul class="bars">
                <li><div class="bar" data-percentage="50"><span>Option 01</span></div></li>
                <li><div class="bar" data-percentage="30"><span>Option 02</span></div></li>
                <li><div class="bar" data-percentage="60"><span>Option 03</span></div></li>
                <li><div class="bar" data-percentage="100"><span>Option 04</span></div></li>
                <li><div class="bar" data-percentage="80"><span>Option 05</span></div></li>
        </div>

        <!--<section id="top-10" class="top-10">
            <div class="container" class="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <h1>Top 10 Yang Paling Sering Dibaca</h1>

                        <div class="top-2 col-lg-6 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body">
                                    <a href="#" class="card-title">The Influence Of Promotion, Perceived Ease Of Use, And Price Toward Repurchase Intention Transportation Services Go-Jek On Students In Universitas Negeri Padang</a>
                                    <h3><i class="bi bi-calendar-fill"></i>1 September 2022</h3>
                                    <p class="card-text">Abdul Haris Nasution</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-2 col-lg-6 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body">
                                    <a href="#" class="card-title">Pengaruh Reputasi, Electronic Word Of Mouth Dan Web Quality Terhadap Kepercayaan Pelanggan Shopee di Kota Padang</a>
                                    <h3><i class="bi bi-calendar-fill"></i>12 Agustus 2023</h3>
                                    <p class="card-text">Cipto Mangunkusumo</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-8 col-lg-3 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body justify-content-between">
                                    <a href="#" class="card-title">Judul Skripsi</a>
                                    <h3><i class="bi bi-calendar-fill"></i>Tanggal Publish</h3>
                                    <p class="card-text">Nama Pengarang</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-8 col-lg-3 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body justify-content-between">
                                    <a href="#" class="card-title">Judul Skripsi</a>
                                    <h3><i class="bi bi-calendar-fill"></i>Tanggal Publish</h3>
                                    <p class="card-text">Nama Pengarang</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-8 col-lg-3 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body justify-content-between">
                                    <a href="#" class="card-title">Judul Skripsi</a>
                                    <h3><i class="bi bi-calendar-fill"></i>Tanggal Publish</h3>
                                    <p class="card-text">Nama Pengarang</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-8 col-lg-3 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body justify-content-between">
                                    <a href="#" class="card-title">Judul Skripsi</a>
                                    <h3><i class="bi bi-calendar-fill"></i>Tanggal Publish</h3>
                                    <p class="card-text">Nama Pengarang</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-8 col-lg-3 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body justify-content-between">
                                    <a href="#" class="card-title">Judul Skripsi</a>
                                    <h3><i class="bi bi-calendar-fill"></i>Tanggal Publish</h3>
                                    <p class="card-text">Nama Pengarang</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-8 col-lg-3 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body justify-content-between">
                                    <a href="#" class="card-title">Judul Skripsi</a>
                                    <h3><i class="bi bi-calendar-fill"></i>Tanggal Publish</h3>
                                    <p class="card-text">Nama Pengarang</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-8 col-lg-3 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body justify-content-between">
                                    <a href="#" class="card-title">Judul Skripsi</a>
                                    <h3><i class="bi bi-calendar-fill"></i>Tanggal Publish</h3>
                                    <p class="card-text">Nama Pengarang</p>
                                </div>
                            </div>
                        </div>

                        <div class="top-8 col-lg-3 d-flex">
                            <div class="card flex-row"><img class="card-img-left" src="assets/img/skripsi32.png"/>
                                <div class="card-body justify-content-between">
                                    <a href="#" class="card-title">Peran Laporan Keuangan dan Intuisi dalam Pengambilan Keputusan Kredit</a>
                                    <h3><i class="bi bi-calendar-fill"></i>30 Agustus 2023</h3>
                                    <p class="card-text">Aulia Rosa Zahrani</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>-->

    </section>

    <script type="text/javascript">
    $(function(){
        $('.statistic .bars li .bar').each(function(key, bar){
            var percentage = $(this).data('percentage');
            $(this).animate({
                'height' : percentage + '%'
            },1000);
        });
    });
    </script>
    
@endsection
