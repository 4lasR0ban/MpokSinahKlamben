@extends('layouts.main')

@section('container')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Usaha Micro Kecil Menengah</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/umkm">UMKM</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $umkm->title }}</li>
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
                                  <div class="container col-md-10">
                                    <img 
                                    @if ($umkm->image)
                                        src="{{ asset('storage/'.$umkm->image) }}"
                                    @else
                                        src="{{ asset('img/carousel-1.jpg') }}" 
                                    @endif
                                    class="d-block mx-auto img-fluid img-thumbnail" alt="gambar">
                                  </div>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                  <h1 class="fw-bold text-center py-2">{{ $umkm->title }}</h1>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                  <p class="fw-light">Deskripsi</p>
                                </div>
                                <div class="row pt-2 pb-2 gy-0">
                                  {!! $umkm->body !!}
                                </div>
                                <!-- Gallery -->
                                @if($images && count($images) > 0)
                                  <div class="row">
                                      @foreach($images as $index => $image)
                                          @if($index % 2 == 0)
                                          <div class="col-lg-4 mb-4 mb-lg-0">
                                          @endif

                                              <img
                                                  @if ($image->image)
                                                    src="{{ asset('storage/'.$image->image) }}"
                                                  @else
                                                    src="{{ asset('img/food-3.jpg') }}"
                                                  @endif
                                                  class="w-100 shadow-1-strong rounded mb-4"
                                                  {{-- alt="{{ $image->alt }}" --}}
                                              />

                                          @if($index % 2 != 0 || $loop->last)
                                          </div>
                                          @endif
                                      @endforeach
                                  </div>
                                @endif
                                {{-- <div class="row">
                                  <div class="col-lg-4 mb-4 mb-lg-0">
                                    <img
                                      src="{{ asset('img/food-1.jpg') }}"
                                      class="w-100 shadow-1-strong rounded mb-4"
                                      alt="Boat on Calm Water"
                                    />

                                    <img
                                      src="{{ asset('img/food-2.jpg') }}"
                                      class="w-100 shadow-1-strong rounded mb-4"
                                      alt="Wintry Mountain Landscape"
                                    />
                                  </div>

                                  <div class="col-lg-4 mb-4 mb-lg-0">
                                    <img
                                      src="{{ asset('img/food-3.jpg') }}"
                                      class="w-100 shadow-1-strong rounded mb-4"
                                      alt="Mountains in the Clouds"
                                    />

                                    <img
                                      src="{{ asset('img/food-4.jpg') }}"
                                      class="w-100 shadow-1-strong rounded mb-4"
                                      alt="Boat on Calm Water"
                                    />
                                  </div>

                                  <div class="col-lg-4 mb-4 mb-lg-0">
                                    <img
                                      src="{{ asset('img/food-5.jpg') }}"
                                      class="w-100 shadow-1-strong rounded mb-4"
                                      alt="Waves at Sea"
                                    />

                                    <img
                                      src="{{ asset('img/food-6.jpg') }}"
                                      class="w-100 shadow-1-strong rounded mb-4"
                                      alt="Yosemite National Park"
                                    />
                                  </div>
                                </div> --}}
<!-- Gallery -->
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Artikel End -->
@endsection