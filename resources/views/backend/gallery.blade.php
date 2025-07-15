
@extends('backend.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Gallery</h3>
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
                        <h4 class="card-title">Gallery Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="destination_id">Destination Name</label>
                                <select class="form-control @error('destination_id') is-invalid @enderror" id="destination_id" name="destination_id">
                                    <option value="">Select Destination</option>
                                    @foreach($destinations as $destination)
                                        <option value="{{ $destination->id }}">{{ $destination->destination_name }}</option>
                                    @endforeach
                                </select>
                                @error('destination_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gallery_picture">Gallery Picture (Max: 2MB)</label>
                                <input type="file" class="form-control @error('gallery_picture') is-invalid @enderror" id="gallery_picture" name="gallery_picture">
                                @error('gallery_picture')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gallery Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Destination Name</th>
                                        <th>Gallery Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($galleries as $key => $gallery)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $gallery->destination->destination_name }}</td>
                                        <td><img src="{{ asset($gallery->gallery_picture) }}" alt="Gallery Picture" width="100"></td>
                                        <td>
                                            <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this gallery picture?')">Delete</button>
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
