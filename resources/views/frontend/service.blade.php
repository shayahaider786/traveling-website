@extends('frontend.layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">Services</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

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
            </div>


        </div>
    </div>
    <!-- Services End -->

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
                                    <i class="fas fa-star {{ $i <= $review->rating ? 'text-primary' : 'text-light' }}"></i>
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
