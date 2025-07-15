@extends('backend.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="d-flex justify-content-between align-items-center pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Package Details</h3>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="{{ route('admin.packages.index') }}" class="btn btn-primary">Back to Packages</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Package Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="destination_id">Destination</label>
                                    <p>{{ $package->destination->destination_name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="package_name">Package Name</label>
                                    <p>{{ $package->package_name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="package_price">Price</label>
                                    <p>PKR{{ number_format($package->package_price, 2) }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="package_days">Days</label>
                                    <p>{{ $package->package_days }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="package_person">Total Person</label>
                                    <p>{{ $package->package_person }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="package_description">Package Short Description</label>
                                    <p>{{ $package->package_description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="package_long_description">Package Long Description</label>
                                    <p>{{ $package->package_long_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection