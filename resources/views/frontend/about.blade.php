@extends('frontend.layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #EF6724 transparent #EF6724;">
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
                    {{-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
@endsection
