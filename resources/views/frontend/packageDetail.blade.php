@extends('frontend.layouts.app')


<style>
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    .gallery-item img {
        transition: 0.5s;
    }

    .gallery-item .gallery-plus-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: 0.5s;
        opacity: 0;
    }

    .gallery-item:hover .gallery-plus-icon {
        opacity: 1;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .gallery-plus-icon a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }
</style>

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Package Details</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('packages') }}">Packages</a></li>
                <li class="breadcrumb-item active text-white">{{ $package->package_name }}</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Package Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Package Image -->
                    <div class="mb-4">
                        <img src="{{ asset($package->package_picture) }}" alt="{{ $package->package_name }}"
                            class="img-fluid w-100 rounded">
                    </div>

                    <!-- Package Details -->
                    <div class="mb-5">
                        <h1 class="mb-4">{{ $package->package_name }}</h1>

                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded p-2 text-white me-2">
                                <i class="fa fa-map-marker-alt me-2"></i>{{ $package->destination->destination_name }}
                            </div>
                            <div class="bg-primary rounded p-2 text-white me-2">
                                <i class="fa fa-calendar-alt me-2"></i>{{ $package->package_days }} Days
                            </div>
                            {{-- <div class="bg-primary rounded p-2 text-white me-2">
                                <i class="fa fa-user me-2"></i>{{ $package->package_person }} Person
                            </div> --}}
                            <div class="bg-primary rounded p-2 text-white me-2">
                                <i class="fa fa-tag me-2"></i>PKR {{ number_format($package->single_package_price) }}
                            </div>
                            <div class="bg-primary rounded p-2 text-white">
                                <i class="fa fa-tag me-2"></i>PKR {{ number_format($package->couple_package_price) }}
                            </div>
                        </div>

                        <h4 class="mb-3">Description</h4>
                        <p>{{ $package->package_description }}</p>

                        @if ($package->package_long_description)
                            <div class="mt-4">
                                {!! $package->package_long_description !!}
                            </div>
                        @endif
                    </div>

                    <!-- Package Includes -->
                    <div class="mb-5">
                        <h4 class="mb-3">Package Includes</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i
                                            class="fa fa-check text-primary me-2"></i>{{ $package->package_days - 1 }}
                                        nights accommodation</li>
                                    <li class="list-group-item"><i class="fa fa-check text-primary me-2"></i>Quality Meals
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-check text-primary me-2"></i>Luxury
                                        Transport</li>
                                    <li class="list-group-item"><i class="fa fa-check text-primary me-2"></i>Photography
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Package Info -->
                    <div class="bg-light rounded p-4 mb-4">
                        <h4 class="mb-4">Package Info</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-light">
                                <span><i class="fa fa-map-marker-alt text-primary me-2"></i>Destination</span>
                                <span>{{ $package->destination->destination_name }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-light">
                                <span><i class="fa fa-calendar-alt text-primary me-2"></i>Duration</span>
                                <span>{{ $package->package_days }} Days</span>
                            </li>
                            {{-- <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-light">
                                <span><i class="fa fa-user text-primary me-2"></i>Person</span>
                                <span>{{ $package->package_person }} Person</span>
                            </li> --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-light">
                                <span><i class="fa fa-user text-primary me-2"></i>single package price</span>
                                <span class="text-primary fw-bold">PKR
                                    {{ number_format($package->single_package_price, 2) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-light">
                                <span><i class="fa fa-user text-primary me-2"></i>couple package price</span>
                                <span class="text-primary fw-bold">PKR
                                    {{ number_format($package->couple_package_price, 2) }}</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="bg-light rounded p-4">
                        <h4 class="mb-4">Need Help?</h4>
                        <p>Contact our travel experts for more information about this package.</p>
                        <div class="d-flex mb-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">03264770853</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <p class="mb-0">travelwithshadventure@gmail.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                            <p class="mb-0">saddiq trade centre, goulberg 2 mazzanine floor office number M</p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('contactUs') }}" class="btn btn-primary w-100">Contact Us</a>
                        </div>
                    </div>

                    <!-- Additional Images -->
                    <div class="bg-light rounded p-4 mt-4">
                        <h4 class="mb-4">Additional Images</h4>
                        <div class="row">
                            @foreach ($package->images as $image)
                                <div class="col-md-6 mb-3">
                                    <div class="gallery-item h-100">
                                        <img src="{{ asset($image->image_path) }}" class="img-fluid w-100 h-100 rounded"
                                            alt="{{ $package->package_name }}">
                                        <div class="gallery-plus-icon">
                                            <a href="{{ asset($image->image_path) }}"
                                                data-lightbox="package-gallery-{{ $package->id }}" class="my-auto"><i
                                                    class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Package Detail End -->

    <!-- Related Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Related Packages</h5>
                <h1 class="mb-0">You May Also Like</h1>
            </div>
            <div class="row g-4">
                @php
                    $relatedPackages = \App\Models\Package::where('destination_id', $package->destination_id)
                        ->where('id', '!=', $package->id)
                        ->take(3)
                        ->get();
                @endphp

                @forelse($relatedPackages as $relatedPackage)
                    <div class="col-lg-4 col-md-6">
                        <div class="packages-item">
                            <div class="packages-img">
                                <img src="{{ asset($relatedPackage->package_picture) }}"
                                    class="img-fluid w-100 rounded-top" alt="Image">
                                <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                    style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-map-marker-alt me-2"></i>{{ $relatedPackage->package_name }}</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-calendar-alt me-2"></i>{{ $relatedPackage->package_days }}
                                        days</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-user me-2"></i>{{ $relatedPackage->package_person }}
                                        Person</small>
                                </div>
                                <div class="packages-price py-2 px-4">PKR
                                    {{ number_format($relatedPackage->package_price, 2) }}</div>
                            </div>
                            <div class="packages-content bg-light">
                                <div class="p-4 pb-0">
                                    <h5 class="mb-0">{{ $relatedPackage->package_name }}</h5>
                                    <p class="mb-4">{{ $relatedPackage->package_description }}</p>
                                </div>
                                <div class="row bg-primary rounded-bottom mx-0">
                                    <div class="col-6 text-start px-0">
                                        <a href="{{ route('packageDetail', ['slug' => $relatedPackage->slug]) }}"
                                            class="btn-hover btn text-white py-2 px-4">Read More</a>
                                    </div>
                                    <div class="col-6 text-end px-0">
                                        <a href="{{ route('contactUs') }}"
                                            class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No related packages found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Related Packages End -->
@endsection
