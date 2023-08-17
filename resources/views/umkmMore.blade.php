@extends('layouts.main')

@section('container')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Usaha Micro Kecil Menengah</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">UMKM</li>
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
                                    <h1 class="fw-bold text-center py-2">Susu Segar Boyolali</h1>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                    <p class="fw-light">Deskripsi</p>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, libero a mattis rutrum, turpis metus eleifend orci, sit amet accumsan enim est pellentesque velit. Vivamus purus erat, rhoncus et rutrum non, dictum sed urna. Donec faucibus congue arcu, et varius sem aliquet vel. Duis blandit tristique arcu vel scelerisque.
                                </p>
                                </div>
                                <div class="row pt-2 pb-2 gy-0 px-auto">
                                    <img src="img/carousel-1.jpg" class="mx-auto d-block" alt="gambar" style="max-width: 1000px; max-height: 500px;">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Artikel End -->
@endsection