@extends('backend.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="d-flex justify-content-between align-items-center pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Packages</h3>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="{{ route('admin.packages.create') }}" class="btn btn-primary">Add New Package</a>
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Packages List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Destination</th>
                                        <th>Package Name</th>
                                        <th>Single Price</th>
                                        <th>Couple Price</th>
                                        <th>Days</th>
                                        {{-- <th>Person</th> --}}
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($packages as $key => $package)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $package->destination->destination_name }}</td>
                                        <td>{{ $package->package_name }}</td>
                                        <td>PKR {{ number_format($package->single_package_price, 2) }}</td>
                                        <td>PKR {{ number_format($package->couple_package_price, 2) }}</td>
                                        <td>{{ $package->package_days }} Days</td>
                                        {{-- <td>{{ $package->package_person }} Person</td> --}}
                                        <td><img src="{{ asset($package->package_picture) }}" alt="{{ $package->package_name }}" width="100"></td>
                                        <td>
                                            <a href="{{ route('admin.packages.show', $package->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this package?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
