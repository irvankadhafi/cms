@extends('layouts.header-footer')
@section('content')
    <link rel="stylesheet" type="text/css" href="fonts/login/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- ================ start banner Area ================= -->
    <section class="home-banner-area">
        <div class="container">
            <div class="row justify-content-center fullscreen align-items-center">
                <div class="col-lg-5 col-md-8 home-banner-left">
                    <img class="img-fluid" src="img/Asset 29.png" alt="" />
                    <p class="mx-auto text-white  mt-20 mb-40">
                        <img class="img-fluid" src="img/Asset 32.png" alt="" />
                    </p>
                </div>
                <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
                    <img class="img-fluid" src="img/header-img3.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End banner Area ================= -->
    <!-- ================ FILOSOFI LOGO BEM ================= -->
    <section class="popular-course-area section-gap">
        <div class="container-fluid">
            <div class="row justify-content-center section-title">
                <div class="col-lg-8">
                    <img class="f-img img-fluid mx-auto" src="img/Asset 11.png" alt="" />
                </div>
            </div>
            <div class="owl-carousel popuar-course-carusel">
                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p1.png" alt="" />
                    </div>
                    <div class="details">
                        <img class="img-fluid" src="img/Asset 5.png" alt="" />
                        <p ALIGN="CENTER" style = "font-family:Bruzh;font-size:20px;">
                            MELAMBANGKAN 5 PERAN DAN FUNGSI MAHASISWA
                        </p>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p2.png" alt="" />
                    </div>
                    <div class="details">
                        <img class="img-fluid" src="img/Asset 9.png" alt="" />
                        <p ALIGN="CENTER" style = "font-family:Bruzh;font-size:20px;">
                            MELAMBANGKAN BEM SEBAGAI RODA PENGGERAK
                        </p>

                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p3.png" alt="" />
                    </div>
                    <div class="details">
                        <img class="img-fluid" src="img/Asset 7.png" alt="" />
                        <p ALIGN="CENTER" style = "font-family:Bruzh;font-size:20px;">
                            MELAMBANGKAN 4 ELEMEN KEMA POLBAN
                        </p>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p4.png" alt="" />
                    </div>
                    <div class="details">
                        <img class="img-fluid" src="img/Asset 8.png" alt="" />
                        <p ALIGN="CENTER" style = "font-family:Bruzh;font-size:20px;">
                            MELAMBANGKAN TRIDHARMA PERGURUAN TINGGI
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ End FILOSOFI LOGO BEM ================= -->

    <!-- ================- Start About Area ================= -->
    <section class="about-area section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-6 about-left">
                    <img class="img-fluid" src="img/header-img3.png" alt="">
                </div>
                <div class="offset-lg-1 col-lg-5 col-md-12 about-right">
                    <div>
                        <!-- ================ Start Feature Area ================= -->
                        @foreach($data as $deskripsi => $hasil)
                        <section class="feature-area">
                            <div class="container-fluid">
                                <img class="img-fluid" src="img/Asset 13.png" alt="">
                                <p>
                                    <img class="img-fluid" src="img/Asset 18.png" alt="">  sebagai poros pergerakan yang profesional untuk Almamater, bangsa, dan negara.
                                </p>
                                <img class="img-fluid" src="img/Asset 12.png" alt="">
{{--                                <p>--}}
{{--                                    <h3>Poros Stabilitas Kabinet</h3>--}}
{{--                                    <img class="img-fluid" src="img/Asset 19.png" alt="">--}}
{{--                                    <br>--}}
{{--                                    Membentuk internal kabinet yang profesional dengan asas kekeluargaan.<br><br>--}}
{{--                                    <img class="img-fluid" src="img/Asset 20.png" alt=""> <br>--}}
{{--                                    Mengoptimalkan pelayanan advokasi mahasiswa POLBAN serta pengabdian masyarakat yang<br>--}}
{{--                                    partisipatif dan kolaboratif dengan orientasi kemanfaatan.<br><br>--}}
{{--                                    <img class="img-fluid" src="img/Asset 21.png" alt=""> <br>--}}
{{--                                    Mengawal serta menyikapi isu luar dalam kampus serta mengupayakan pembentukan opini mahasiswa<br>--}}
{{--                                    POLBAN dan masyarakat.<br><br>--}}
{{--                                    <img class="img-fluid" src="img/Asset 22.png" alt=""> <br>--}}
{{--                                    Menjalin komunikasi serta kerjasama yang berkelanjutan dengan pihak luar dan dalam kampus<br><br>--}}
{{--                                    <img class="img-fluid" src="img/Asset 23.png" alt=""> <br>--}}
{{--                                    Memberikan fasilitas dalam kegiatan keilmuan serta minat dan bakat mahasiswa POLBAN.--}}
{{--                                </p>--}}
                                {!! $hasil->misi !!}
                            </div>
                        </section>
                        @endforeach
                        <!-- ================ End Feature Area ================= -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================- End About Area ================= -->


    <!-- ================ Start Testimonials Area ================= -->
    <section class="testimonials-area section-gap">
        <div class="container">
            <div class="testi-slider owl-carousel" data-slider-id="1">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="item">
                            <div class="testi-item">
                                {{--================================== nama jabatan ========================--}}
                                <img src="img/Asset 36.png" alt="" /><br>
                                <img src="img/Asset 37.png" alt="" />
                                <div class="mt-40 text">
                                    <p>
                                        {{--                                   Deskripsi Tambahan Kalau ADA--}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--===========================Foto Pejabat=============================--}}
                    <div class="offset-lg-1 col-lg-6">
                        <img src="img/testimonial/komar.png" alt="" />
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="item">
                            <div class="testi-item">
                                <img src="img/Asset 38.png" alt="" /><br>
                                <img src="img/Asset 40.png" alt="" />
                                <div class="mt-40 text">
                                    <p>
                                        {{--                                   //Deskripsi Kalo Ada--}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-6">
                        <img src="img/testimonial/abdil.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Testimonials Area ================= -->


    <!-- ================ NEAREST EVENT ================= -->
    <section class="popular-course-area section-gap">
        <div class="container-fluid">
            <div class="row justify-content-center section-title">
                <div class="col-lg-12">
                    <h2>
                        Nearest Events
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="owl-carousel popuar-course-carusel">
                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p1.jpg" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">programming language</p>
                            <p class="value">$150</p>
                        </div>
                        <a href="#">
                            <h4>Learn Angular JS Course for Legendary Persons</h4>
                        </a>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p2.jpg" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">programming language</p>
                            <p class="value">$150</p>
                        </div>
                        <a href="#">
                            <h4>Learn Angular JS Course for Legendary Persons</h4>
                        </a>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p3.jpg" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">programming language</p>
                            <p class="value">$150</p>
                        </div>
                        <a href="#">
                            <h4>Learn Angular JS Course for Legendary Persons</h4>
                        </a>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p4.jpg" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">programming language</p>
                            <p class="value">$150</p>
                        </div>
                        <a href="#">
                            <h4>Learn Angular JS Course for Legendary Persons</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Popular Course Area ================= -->

    <!-- ================ Start Video Area ================= -->
    <section class="video-area section-gap-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h2 class="text-white">
                            Watch Our Profile
                        </h2>
                        <p>
                            In the history of modern astronomy, there is probably no one greater leap forward than the building and
                            launch of the space telescope known as the Hubble.
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-md-6 video-left">
                    <div class="owl-carousel video-carousel">
                        <div class="single-video">
                            <div class="video-part">
                                <img class="img-fluid" src="img/video-img1.jpg" alt="">
                                <div class="overlay"></div>
                                <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=M4ehPNyyda4">
                                    <img class="play-icon" src="img/play-btn.png" alt="">
                                </a>
                            </div>
                            <h4 class="text-white mb-20 mt-30">Learn Angular js Course for Legendary Persons</h4>
                            <p class="text-white mb-20">
                                In the history of modern astronomy, there is probably no one greater leap forward than the building and
                                launch of the space telescope known as the Hubble.
                            </p>
                        </div>

                        <div class="single-video">
                            <div class="video-part">
                                <img class="img-fluid" src="img/video-img2.jpg" alt="">
                                <div class="overlay"></div>
                                <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
                                    <img class="play-icon" src="img/play-btn.png" alt="">
                                </a>
                            </div>
                            <h4 class="text-white mb-20 mt-30">Learn Angular js Course for Legendary Persons</h4>
                            <p class="text-white mb-20">
                                In the history of modern astronomy, there is probably no one greater leap forward than the building and
                                launch of the space telescope known as the Hubble.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Video Area ================= -->

@endsection
