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
                    <li class="breadcrumb-item"><a class="text-white" href="/acara">Acara</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $event->title }}</li>
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
                                    <img 
                                    @if ($event->image)
                                        src="{{ asset($event->image) }}"
                                    @else
                                        src="{{ asset('img/carousel-1.jpg') }}" 
                                    @endif
                                    class="mx-auto d-block" alt="gambar" style="max-width: 1000px; max-height: 500px; object-fit:cover;">
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                    <h1 class="fw-bold text-center py-2">{{ $event->title }}</h1>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                    <p class="fw-light"><i class="fa fa-calendar"></i> <span>{{ $event->created_at->diffForHumans() }}</span></p>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                {!! $event->body !!}
                                </div>
                                {{-- <div class="row pt-4 pb-3 gy-0 text-end">
                                    <p class="fw-light">~ <span>{{ $event->author }}</span> ~</p>
                                </div> --}}
                            </div>

                            <!-- Service Start -->
                            <div class="container-xxl py-5">
                                <div class="container py-5">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <h6 class="text-secondary text-uppercase">Berita</h6>
                                        <h1 class="mb-5">Rekomendasi Terbaru Lainnya</h1>
                                    </div>
                                    <div class="row g-4">
                                        @foreach ($events as $event)
                                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="service-item p-4">
                                                    <div class="overflow-hidden mb-4">
                                                        <img class="img-fluid" src="{{ asset('img/service-1.jpg') }}" alt="">
                                                    </div>
                                                    <h4 class="mb-3">{{ $event->title }}</h4>
                                                    <p>{{ $event->excerpt }}</p>
                                                    <a class="btn-slide mt-2" href="/berita/{{ $event->id }}"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
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
                                        </div> --}}
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