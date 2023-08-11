@extends('layouts.main')

@section('container')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-3" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Judul Berita</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Berita</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Judul Berita</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Artikel Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="container my-4">
                        <article>
                            <div class="col border-bottom">
                                <div class="row pt-2 pb-2 gy-0 px-auto">
                                    <img src="img/carousel-1.jpg" class="mx-auto d-block" alt="gambar" style="max-width: 1000px; max-height: 500px;">
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                    <h1 class="fw-bold text-center py-2">Mpok Sinah Klamben</h1>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                    <p class="fw-light"><i class="fa fa-calendar"></i> <span>17 Agustus 2023</span></p>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, libero a mattis rutrum, turpis metus eleifend orci, sit amet accumsan enim est pellentesque velit. Vivamus purus erat, rhoncus et rutrum non, dictum sed urna. Donec faucibus congue arcu, et varius sem aliquet vel. Duis blandit tristique arcu vel scelerisque. Quisque accumsan facilisis lobortis. Sed condimentum lorem non ante bibendum tristique. Etiam laoreet in odio at pretium. Fusce orci lorem, commodo eu faucibus a, condimentum nec nibh. Donec quis dui lectus. Donec varius justo eget euismod rhoncus. Curabitur quis ligula iaculis, efficitur turpis non, interdum quam. Nunc a maximus orci, at placerat libero. Quisque non consectetur neque, vitae maximus velit.
                                </p>
                                <p>
                                Nunc molestie velit vel felis mattis aliquet. Fusce ac pellentesque lorem, et dignissim ante. Aliquam elementum consequat sem vitae vestibulum. Proin a ipsum semper, iaculis arcu vitae, hendrerit orci. Sed congue nec lorem sed commodo. Ut lectus sapien, fermentum ultricies nulla ac, tempus viverra nisi. In posuere aliquam sapien id porta. Curabitur sit amet tortor neque. Vestibulum purus augue, convallis consectetur mauris vitae, vehicula tempus nisi. Curabitur consequat dolor et leo condimentum accumsan. Curabitur aliquet quam lobortis nulla vestibulum consequat. Aliquam vel tristique lorem, vitae sagittis neque. Fusce velit ex, pretium at nisl pharetra, fermentum semper ante.
                                </p>
                                </div>
                                <div class="row pt-4 pb-3 gy-0 text-end">
                                    <p class="fw-light">~ <span>Author</span> ~</p>
                                </div>
                            </div>

                            <!-- Service Start -->
                            <div class="container-xxl py-5">
                                <div class="container py-5">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <h6 class="text-secondary text-uppercase">Berita</h6>
                                        <h1 class="mb-5">Rekomendasi Artikel Lainnya</h1>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
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
                                        </div>
                                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="service-item p-4">
                                                <div class="overflow-hidden mb-4">
                                                    <img class="img-fluid" src="img/service-4.jpg" alt="">
                                                </div>
                                                <h4 class="mb-3">Train Freight</h4>
                                                <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                                                <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="service-item p-4">
                                                <div class="overflow-hidden mb-4">
                                                    <img class="img-fluid" src="img/service-5.jpg" alt="">
                                                </div>
                                                <h4 class="mb-3">Customs Clearance</h4>
                                                <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                                                <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                                            <div class="service-item p-4">
                                                <div class="overflow-hidden mb-4">
                                                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                                                </div>
                                                <h4 class="mb-3">Warehouse Solutions</h4>
                                                <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                                                <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service End -->
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Artikel End -->
@endsection