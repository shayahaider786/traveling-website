@section('carousel')
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="frontend/img/slider1.jpeg" class="img-fluid" alt="Valley">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Discover
                                Pakistan</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Breathtaking Valleys Await</h1>
                            <p class="mb-5 fs-5">Explore Northern Pakistan's serene beauty — snow-capped peaks, crystal
                                lakes, and green meadows for unforgettable family adventures.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                    href="{{ route('destination') }}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="frontend/img/slider2.jpeg" class="img-fluid" alt="Adventure">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Adventure Awaits
                            </h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Explore The Untouched North</h1>
                            <p class="mb-5 fs-5">From Hunza to Swat, discover breathtaking landscapes, warm hospitality, and
                                hidden gems in Pakistan’s mountainous paradise.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                    href="{{ route('destination') }}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="frontend/img/slider3.jpeg" class="img-fluid" alt="Nature">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Reconnect With
                                Nature</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Lakes. Mountains. Magic.</h1>
                            <p class="mb-5 fs-5">Escape into the wild beauty of Pakistan’s north — a perfect escape for
                                peace seekers, explorers, and nature lovers alike.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                    href="{{ route('destination') }}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="frontend/img/slider4.jpeg" class="img-fluid" alt="Family Trip">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Family Adventure
                            </h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Unforgettable Family Getaways</h1>
                            <p class="mb-5 fs-5">Create lifelong memories in lush green meadows, beside calm lakes, and
                                beneath towering peaks — all in Northern Pakistan.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                    href="{{ route('destination') }}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
