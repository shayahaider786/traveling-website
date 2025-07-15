@extends('frontend.layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Gallery</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">Gallery</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5 my-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Gallery</h5>
            <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
            <p class="mb-0">Explore our stunning collection of travel destinations and experiences through our gallery.
                Each image captures the beauty and excitement of our carefully curated travel packages.
            </p>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                        href="#GalleryTab-1">
                        <span class="text-dark" style="width: 150px;">All</span>
                    </a>
                </li>
                @foreach($destinations as $destination)
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#GalleryTab-{{ $destination->id }}">
                            <span class="text-dark" style="width: 150px;">{{ $destination->destination_name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-2">
                        @foreach($galleries as $gallery)
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{ asset($gallery->gallery_picture) }}" class="img-fluid w-100 h-100 rounded"
                                        alt="{{ $gallery->destination->destination_name }}">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">
                                                {{ $gallery->destination->destination_name }}</h5>
                                            <a href="{{ route('destination') }}" class="btn-hover text-white">View All Place <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{ asset($gallery->gallery_picture) }}"
                                            data-lightbox="all-gallery-{{ $gallery->id }}" class="my-auto"><i
                                                class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @foreach($destinations as $destination)
                    <div id="GalleryTab-{{ $destination->id }}" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            @if($destination->galleries->count() > 0)
                                @foreach($destination->galleries as $gallery)
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="gallery-item h-100">
                                            <img src="{{ asset($gallery->gallery_picture) }}" class="img-fluid w-100 h-100 rounded"
                                                alt="{{ $destination->destination_name }}">
                                            <div class="gallery-content">
                                                <div class="gallery-info">
                                                    <h5 class="text-white text-uppercase mb-2">{{ $destination->destination_name }}</h5>
                                                    <a href="{{ route('destination') }}" class="btn-hover text-white">View All Place <i
                                                            class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-plus-icon">
                                                <a href="{{ asset($gallery->gallery_picture) }}"
                                                    data-lightbox="destination-gallery-{{ $destination->id }}" class="my-auto"><i
                                                        class="fas fa-plus fa-2x text-white"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 text-center py-5">
                                    <h4>No gallery images available for this destination yet.</h4>
                                    <p>Check back soon for updates!</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery End -->
@endsection
