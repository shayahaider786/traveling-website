@extends('frontend.layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Travel Packages</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">Packages</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Packages</h5>
                <h1 class="mb-0">Awesome Packages</h1>
            </div>
            <div class="row g-4">
                @foreach ($packages as $package)
                    <div class="col-lg-4 col-md-6 packages-item">
                        <div class="packages-img">
                            <img src="{{ asset($package->package_picture) }}" class="img-fluid w-100 rounded-top"
                                alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>{{ $package->package_name }}</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>{{ $package->package_days }} days</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user me-2"></i>{{ $package->package_person }}Single Person</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-user me-2"></i>{{ $package->package_person }} Couple</small>
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
@endsection
