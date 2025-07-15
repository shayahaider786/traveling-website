@extends('backend.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="d-flex justify-content-between align-items-center pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Create New Package</h3>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="{{ route('admin.packages.index') }}" class="btn btn-primary">Back to Packages</a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Package Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="destination_id">Destination</label>
                                <select class="form-control @error('destination_id') is-invalid @enderror"
                                    id="destination_id" name="destination_id">
                                    <option value="">Select Destination</option>
                                    @foreach ($destinations as $destination)
                                        <option value="{{ $destination->id }}"
                                            {{ old('destination_id') == $destination->id ? 'selected' : '' }}>
                                            {{ $destination->destination_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('destination_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="package_name">Package Name</label>
                                <input type="text" class="form-control @error('package_name') is-invalid @enderror"
                                    id="package_name" name="package_name" value="{{ old('package_name') }}">
                                @error('package_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    id="slug" name="slug" value="{{ old('slug') }}">
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="single_package_price">Single Package Price</label>
                                        <input type="number" step="0.01"
                                            class="form-control @error('single_package_price') is-invalid @enderror"
                                            id="single_package_price" name="single_package_price"
                                            value="{{ old('single_package_price') }}">
                                        @error('single_package_price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="couple_package_price">Couple Package Price</label>
                                        <input type="number" step="0.01"
                                            class="form-control @error('couple_package_price') is-invalid @enderror"
                                            id="couple_package_price" name="couple_package_price"
                                            value="{{ old('couple_package_price') }}">
                                        @error('couple_package_price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="package_picture">Main Package Picture (Max: 6MB)</label>
                                <input type="file" class="form-control @error('package_picture') is-invalid @enderror"
                                    id="package_picture" name="package_picture">
                                @error('package_picture')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="package_images">Additional Package Images (Max: 6MB each)</label>
                                <input type="file" class="form-control @error('package_images.*') is-invalid @enderror"
                                    id="package_images" name="package_images[]" multiple>
                                @error('package_images.*')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="package_days">Days</label>
                                <input type="number" class="form-control @error('package_days') is-invalid @enderror"
                                    id="package_days" name="package_days" value="{{ old('package_days') }}">
                                @error('package_days')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="package_description">Package Short Description</label>
                                <textarea class="form-control @error('package_description') is-invalid @enderror" id="package_description"
                                    name="package_description" rows="3">{{ old('package_description') }}</textarea>
                                @error('package_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="package_long_description">Package Long Description</label>
                                <textarea class="form-control @error('package_long_description') is-invalid @enderror" id="package_long_description"
                                    name="package_long_description" rows="5">{{ old('package_long_description') }}</textarea>
                                @error('package_long_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create Package</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle slug generation
            const packageNameInput = document.getElementById('package_name');
            const slugInput = document.getElementById('slug');

            packageNameInput.addEventListener('input', function() {
                slugInput.value = packageNameInput.value.toLowerCase().replace(/\s+/g, '-');
            });
        });
    </script>
@endsection

