<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travel With SH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row text-center gx-0">
            <div class="col-lg-12 text-center  mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">

                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/share/1CKtTvd974/"><i
                            class="fab fa-facebook-f fw-normal"></i></a>

                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/travel_with_sh_adventure?utm_source=qr&igsh=b3o4YnUzeGxqYmJ0"><i
                            class="fab fa-instagram fw-normal"></i></a>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand p-0">
                <!-- <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i></h1> -->
                <img src="../frontend/img/logo.png" alt="Logo" width="100%" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('index') }}"
                        class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('service') }}"
                        class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('destination') }}"
                        class="nav-item nav-link {{ request()->routeIs('destination') ? 'active' : '' }}">Destination</a>
                    <a href="{{ route('gallery') }}"
                        class="nav-item nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                    <a href="{{ route('packages') }}"
                        class="nav-item nav-link {{ request()->routeIs('packages') ? 'active' : '' }}">Packages</a>
                    <a href="{{ route('contactUs') }}"
                        class="nav-item nav-link {{ request()->routeIs('contactUs') ? 'active' : '' }}">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
            </div>
        </nav>

        <!-- Carousel Start -->
        @if (Request::is('/'))
            @yield('carousel')
        @endif
        <!-- Carousel End -->
    </div>

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid footer py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Get In Touch</h4>
                        <a href=""><i class="fas fa-home me-2"></i>saddiq trade centre, goulberg 2 mazzanine
                            floor office number M</a>
                        <a href=""><i class="fas fa-envelope me-2"></i>travelwithshadventure@gmail.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> 03264770853</a>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary rounded-circle mx-1"
                                href="https://www.facebook.com/share/1CKtTvd974/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1"
                                href="https://www.instagram.com/travel_with_sh_adventure?utm_source=qr&igsh=b3o4YnUzeGxqYmJ0"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Company</h4>

                        <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> About</a>
                        <a href="{{ route('contactUs') }}"><i class="fas fa-angle-right me-2"></i> Contact</a>
                        <a href="{{ route('service') }}"><i class="fas fa-angle-right me-2"></i> Services</a>
                        <a href="{{ route('destination') }}"><i class="fas fa-angle-right me-2"></i> Destination</a>
                        <a href="{{ route('gallery') }}"><i class="fas fa-angle-right me-2"></i> Gallery</a>
                        <a href="{{ route('packages') }}"><i class="fas fa-angle-right me-2"></i> Packages</a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Support</h4>
                        <a href="{{ route('contactUs') }}"><i class="fas fa-angle-right me-2"></i> Contact</a>
                        <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                        <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> Terms and
                            Conditions</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright text-body py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-end mb-md-0">
                    <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Travel With SH</a>, All
                    right
                    reserved.
                </div>
                <div class="col-md-6 text-center text-md-start">
                    Designed By <a class="text-white" href="#">shayan haider</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
