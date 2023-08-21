@extends('layouts.main')

@section('container')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="Picture1" style="height: 750px; object-fit:cover;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Mpok Sinah Klamben</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For You in <span class="text-primary">Mangkubumen</span>, Surakarta</h1>
                                <p class="fs-3 fw-medium text-white mb-4 pb-2">Komunitas untuk mewadahi aktivitas ekonomi bagi para pelaku UMKM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/service-1.jpg" alt="Picture1" style="height: 750px; object-fit:cover;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Mpok Sinah Klamben</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For You in <span class="text-primary">Mangkubumen</span>, Surakarta</h1>
                                <p class="fs-3 fw-medium text-white mb-4 pb-2">Tempatnya sangar kesenian dan live music setiap hari</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="Picture2" style="height: 750px; object-fit:cover;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Mpok Sinah Klamben</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For You in <span class="text-primary">Mangkubumen</span>, Surakarta</h1>
                                <p class="fs-3 fw-medium text-white mb-4 pb-2">Terdapat banyak kuliner persembahan dari warga Mangkubumen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" id="readMore" src="img/mpok1.jpg" style="object-fit: cover;" alt="logo">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">Tentang Kami</h6>
                    <h1 class="mb-5">Mpok Sinah Klamben</h1>
                    <p class="mb-5">“Mpok Sinah Klamben” merupakan singkatan dari Kelompok Seni dan Usaha Kecil Menengah Kelurahan Mangkubumen yang berasal dari Banjarsari, Surakarta. Komunitas ini mewadahi aktivitas ekonomi bagi para pelaku UMKM. Salah satu programnya adalah menyelenggarakan “Pasar Jadoel” (Jajanan Tempo Doeloe) yang berlokasi di Sasono Krido Mangkubumen, Jl. RM Said 236.</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <!-- <i class="fa-solid fa-utensils text-primary mb-3"></i> -->
                            <i class="fa fa-utensils fa-3x text-primary mb-3"></i>
                            <h5>Kuliner</h5>
                            <p class="m-0">Beragam kuliner dari warga Mangkubumen</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-guitar fa-3x text-primary mb-3"></i>
                            <h5>Kesenian</h5>
                            <p class="m-0">Live Music dan sanggar kesenian warga Mangkubumen dan sekitarnya</p>
                        </div>
                    </div>
                    <!-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a>   -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                    <h1 class="mb-5">#1 Place To Manage All Of Your Shipments</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                                <p class="text-white mb-0">UMKM</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-guitar fa-3x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                                <p class="text-white mb-0">Sanggar Kesenian</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Customer Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Fact End -->


    <!-- Berita Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Berita</h6>
                <h1 class="mb-5">Berita Terbaru Kami</h1>
            </div>
            <div class="row g-4">
                @foreach ($posts as $item)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4 shadow">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid"
                            @if ($item->image)
                                src="{{ asset('storage/'.$item->image) }}" 
                            @else
                                src="{{ asset('img/service-1.jpg') }}" 
                            @endif 
                            alt="" style="max-height: 260px; min-height: 259px; object-fit:cover;">
                        </div>
                        <h4 class="mb-3">{{ $item->title }}</h4>
                        <p>{{ $item->excerpt }}</p>
                        <a class="btn-slide mt-2" href="/berita/{{ $item->slug }}"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4 shadow">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Ocean Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4 shadow">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Road Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> --}}
                <div class="col wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row pt-2 pb-2 gy-0">
                        <a href="/berita" class="fs-5 fw-bold text-end">Berita Lainnya &gt;&gt;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Berita End -->

    <!-- Acara Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Acara</h6>
                <h1 class="mb-5">Acara Terbaru Kami</h1>
            </div>
            <div class="row g-4">
                @foreach ($events as $item)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4 shadow">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid"
                            @if ($item->image)
                                src="{{ asset('storage/'.$item->image) }}" 
                            @else
                                src="{{ asset('img/service-1.jpg') }}" 
                            @endif 
                            alt="" style="max-height: 260px; min-height: 259px; object-fit:cover;">
                        </div>
                        <h4 class="mb-3">{{ $item->title }}</h4>
                        <p>{{ $item->excerpt }}</p>
                        <a class="btn-slide mt-2" href="/acara/{{ $item->slug }}"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Air Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Ocean Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Road Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> --}}
                <div class="col wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row pt-2 pb-2 gy-0">
                        <a href="/acara" class="fs-5 fw-bold text-end">Acara Lainnya &gt;&gt;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Acara End -->

    <!-- UMKM Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Usaha Micro Kecil Menengah</h6>
                <h1 class="mb-5">Kuliner Warga Mangkubumen</h1>
            </div>
            <div class="row g-4">
                @foreach ($umkms as $item)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4 shadow">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid"
                            @if ($item->image)
                                src="{{ asset('storage/'.$item->image) }}" 
                            @else
                                src="{{ asset('img/service-1.jpg') }}" 
                            @endif 
                            alt="" style="max-height: 260px; min-height: 259px; object-fit:cover;">
                        </div>
                        <h4 class="mb-3">{{ $item->title }}</h4>
                        <p>{{ $item->excerpt }}</p>
                        <a class="btn-slide mt-2" href="/umkm/{{ $item->slug }}"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Air Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Ocean Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Road Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> --}}
                <div class="col wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row pt-2 pb-2 gy-0">
                        <a href="/acara" class="fs-5 fw-bold text-end">Kuliner Lainnya &gt;&gt;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- UMKM End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Team</h6>
                <h1 class="mb-5">Tim Pengelola</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Aris Saputro</h5>
                        <p>Kepala Pengelola</p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Vero Bagus Wardana</h5>
                        <p>Kelompok 15 KKN UNS</p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <h5 class="mb-0">M. Hardiansyah</h5>
                        <p>Kelompok 15 KKN UNS</p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Mas Nova</h5>
                        <p>Ketua Karang Taruna</p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Apa kata Pengunjung?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <script>
        function scrollTo(){
            const elemen = document.getElementById("readMore");
            elemen.scrollIntoView();
        }
    </script>
@endsection
