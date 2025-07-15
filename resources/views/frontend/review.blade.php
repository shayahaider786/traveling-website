@extends('frontend.layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Review</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">Review</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Review Form Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonial</h5>
                <h1 class="mb-0">Share Your Experience</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light rounded p-5">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('review.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Your Name" value="{{ old('name') }}">
                                        <label for="name">Your Name</label>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Your Email" value="{{ old('email') }}">
                                        <label for="email">Your Email</label>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Rating</label>
                                    <div class="rating-stars mb-3">
                                        <div class="d-flex">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="rating"
                                                        id="rating{{ $i }}" value="{{ $i }}"
                                                        {{ old('rating') == $i ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="rating{{ $i }}">
                                                        <i class="fas fa-star text-warning"></i>
                                                    </label>
                                                </div>
                                            @endfor
                                        </div>
                                        @error('rating')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('comment') is-invalid @enderror" name="comment"
                                            placeholder="Leave your review here" id="comment" style="height: 160px">{{ old('comment') }}</textarea>
                                        <label for="comment">Your Review</label>
                                        @error('comment')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Review</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Review Form End -->
@endsection
