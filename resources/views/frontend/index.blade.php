@extends('frontend.layouts.app')
@include('frontend.layouts.carousel')
@section('content')
    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #EF6724 transparent #EF6724 ;">
                        <img src="frontend/img/ceo.jpg" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(frontend/img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">About Us</h5>
                    <h1 class="mb-4">Welcome to <span class="text-primary">SH Travel</span></h1>
                    <p class="mb-4"> FOUNDED IN 2022 AND REGISTERED IN 2023.
                        Travel with SH adventure is Pakistan first online marketplace for people to search, compare,
                        discover and book trips, tours and travel experiences across Pakistan at any price point. You can
                        follow out activities from our listings and join a pre-arranged tour with like-minded travel
                        enthusiasts.</p>
                    <p class="mb-4">We wander/travel not to get lost but to seek life in nature. You can't find your
                        happiness only at one station you arrive at but in a consistent exposure of the world's souls and
                        places through traveling.</p>

                    <p class="mb-4">We don't keep our one destination because we believe in evolving every next point to
                        find life in it. We carry this life with us and strain to renew our capacity to wonder. Our team is
                        determined to show the world the beauty of Pakistan in every manner.</p>
                    <p class="mb-4">
                        As a trusted travel platform, Travel with SH adventure connects Pakistan vibrant cultures and
                        fascinating landscapes with the rest of the world.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ route('about') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Searvices</h5>
                <h1 class="mb-0">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-globe fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">WorldWide Tours</h5>
                                    <p class="mb-0">
                                        Northern Pakistan is a stunning region filled with towering mountains, lush valleys,
                                        and rich culture.
                                        Tour packages include everything: transport, food, accommodation, and guided tours.
                                        You can explore scenic areas like Hunza, Swat, and Skardu.
                                        Each journey is well-organized for a smooth experience.
                                        From nature to history, there's something for everyone.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-user fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Travel Guides</h5>
                                    <p class="mb-0">
                                        Professional travel guides ensure your journey is safe and informative.
                                        Transport options include cars, coasters, and 4x4 jeeps.
                                        For remote areas, domestic flights like Islamabad to Skardu are arranged.
                                        Airport transfers and intercity travel are also included.
                                        All routes are carefully planned for comfort.
                                        Guides share local stories and cultural insights.
                                        Your tour becomes more meaningful with expert guidance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-hotel fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Hotel Reservation</h5>
                                    <p class="mb-0">
                                        Enjoy cozy and clean accommodations throughout your trip.
                                        Hotels are selected based on comfort, safety, and location.
                                        You’ll stay close to tourist spots and scenic views.
                                        Options range from luxury to traditional guesthouses.
                                        Rooms are equipped with basic amenities and local charm.
                                        Tour plans can be adjusted to match your comfort level.
                                        A peaceful stay is part of the complete travel experience.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-cog fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Food</h5>
                                    <p class="mb-0">
                                        Tour packages offer delicious meals with local flavors.
                                        Breakfast is usually included, and some tours include all meals.
                                        Enjoy traditional dishes like chapli kebab and daal chawal.
                                        Hunza’s apricot soup and walnut cake are popular treats.
                                        Food is served in hygienic restaurants or hotel dining areas.
                                        We also consider special dietary needs.
                                        Great food makes your travel experience unforgettable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center">
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ route('service') }}">Service
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Destination Start -->
    <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destination</h5>
                <h1 class="mb-0">Popular Destination</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                            href="#tab-all">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>
                    @foreach ($destinations as $key => $destination)
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                                href="#tab-{{ $destination->id }}">
                                <span class="text-dark" style="width: 150px;">{{ $destination->destination_name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    <div id="tab-all" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($destinations as $destination)
                                <div class="col-lg-4 col-md-6">
                                    <div class="destination-img h-100">
                                        <img class="img-fluid w-100 h-100 rounded"
                                            src="{{ asset($destination->destination_picture) }}"
                                            alt="{{ $destination->destination_name }}">
                                        <div class="destination-overlay p-4">
                                            <h4 class="text-white mb-2 mt-3">{{ $destination->destination_name }}</h4>
                                            <a href="{{ route('destination') }}" class="btn-hover text-white">View All
                                                Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="{{ asset($destination->destination_picture) }}"
                                                data-lightbox="destination-{{ $destination->id }}"><i
                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @foreach ($destinations as $destination)
                        <div id="tab-{{ $destination->id }}" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img h-100">
                                        <img class="img-fluid w-100 h-100 rounded"
                                            src="{{ asset($destination->destination_picture) }}"
                                            alt="{{ $destination->destination_name }}">
                                        <div class="destination-overlay p-4">
                                            <h4 class="text-white mb-2 mt-3">{{ $destination->destination_name }}</h4>
                                            <a href="{{ route('destination') }}" class="btn-hover text-white">View All
                                                Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="{{ asset($destination->destination_picture) }}"
                                                data-lightbox="destination-tab-{{ $destination->id }}"><i
                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($destination->galleries->take(3) as $gallery)
                                    <div class="col-lg-6">
                                        <div class="destination-img h-100">
                                            <img class="img-fluid w-100 h-100 rounded"
                                                src="{{ asset($gallery->gallery_picture) }}"
                                                alt="{{ $destination->destination_name }}">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">{{ $destination->destination_name }}</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset($gallery->gallery_picture) }}"
                                                    data-lightbox="gallery-{{ $gallery->id }}"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->


    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Packages</h5>
                <h1 class="mb-0">Awesome Packages</h1>
            </div>
            <div class="packages-carousel owl-carousel">
                @foreach ($packages as $package)
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset($package->package_picture) }}" class="img-fluid w-100 rounded-top"
                                alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>{{ $package->package_name }}</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>{{ $package->package_days }} days</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-user me-2"></i>{{ $package->package_person }} Person</small>
                            </div>
                            {{-- <div class="packages-price py-2 px-4">PKR {{ $package->package_price }}</div> --}}
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">{{ $package->package_name }}</h5>
                                <p class="mb-4">{{ $package->package_description }}</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="{{ route('packageDetail', $package->slug) }}"
                                        class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="{{ route('contactUs') }}" class="btn-hover btn text-white py-2 px-4">Book
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Packages End -->

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
                @foreach ($destinations as $destination)
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
                        @foreach ($galleries as $gallery)
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{ asset($gallery->gallery_picture) }}"
                                        class="img-fluid w-100 h-100 rounded"
                                        alt="{{ $gallery->destination->destination_name }}">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">
                                                {{ $gallery->destination->destination_name }}</h5>
                                            <a href="{{ route('destination') }}" class="btn-hover text-white">View All
                                                Place <i class="fa fa-arrow-right ms-2"></i></a>
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

                @foreach ($destinations as $destination)
                    <div id="GalleryTab-{{ $destination->id }}" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            @if ($destination->galleries->count() > 0)
                                @foreach ($destination->galleries as $gallery)
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="gallery-item h-100">
                                            <img src="{{ asset($gallery->gallery_picture) }}"
                                                class="img-fluid w-100 h-100 rounded"
                                                alt="{{ $destination->destination_name }}">
                                            <div class="gallery-content">
                                                <div class="gallery-info">
                                                    <h5 class="text-white text-uppercase mb-2">
                                                        {{ $destination->destination_name }}</h5>
                                                    <a href="{{ route('destination') }}"
                                                        class="btn-hover text-white">View All Place <i
                                                            class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-plus-icon">
                                                <a href="{{ asset($gallery->gallery_picture) }}"
                                                    data-lightbox="destination-gallery-{{ $destination->id }}"
                                                    class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
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

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Travel Guide</h5>
                <h1 class="mb-0">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="frontend/img/guide-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="frontend/img/guide-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>

                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="frontend/img/guide-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>

                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="frontend/img/guide-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>

                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonial</h5>
                <h1 class="mb-0">Our Clients Say!!!</h1>
            </div>
            <div class="text-end m-5">
                <a href="{{ route('review.create') }}" class="btn btn-primary rounded-pill px-4 py-2">Add Review</a>
            </div>
            <div class="testimonial-carousel owl-carousel">
                @forelse($reviews as $review)
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">{{ $review->comment }}</p>
                        </div>
                        {{-- <div class="testimonial-img p-1">
                            <img src="{{ asset('frontend/img/testimonial-' . (($loop->index % 4) + 1) . '.jpg') }}" class="img-fluid rounded-circle" alt="Image">
                        </div> --}}
                        <div class="mt-3">
                            <h5 class="mb-0">{{ $review->name }}</h5>
                            <div class="d-flex justify-content-center">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i
                                        class="fas fa-star {{ $i <= $review->rating ? 'text-primary' : 'text-light' }}"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <p>No reviews available yet. Be the first to leave a review!</p>
                        <a href="{{ route('review.create') }}" class="btn btn-primary mt-3">Add Review</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
