@extends('backend.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Destination</h3>
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
                        <h4 class="card-title">Destination Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.destinations.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="destination_name">Destination Name</label>
                                <input type="text" class="form-control @error('destination_name') is-invalid @enderror"
                                    id="destination_name" name="destination_name" placeholder="Enter Destination Name"
                                    value="{{ old('destination_name') }}">
                                @error('destination_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="destination_picture">Destination Picture (Max: 2MB)</label>
                                <input type="file" class="form-control @error('destination_picture') is-invalid @enderror"
                                    id="destination_picture" name="destination_picture">
                                @error('destination_picture')
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
                        <h4 class="card-title">Destination Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Destination Name</th>
                                        <th>Destination Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($destinations as $key => $destination)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $destination->destination_name }}</td>
                                            <td><img src="{{ asset($destination->destination_picture) }}"
                                                    alt="{{ $destination->destination_name }}" width="100"></td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm edit-btn"
                                                    data-id="{{ $destination->id }}"
                                                    data-name="{{ $destination->destination_name }}"
                                                    data-picture="{{ $destination->destination_picture }}"
                                                    data-route="{{ route('admin.destinations.update', $destination->id) }}"
                                                    data-bs-toggle="modal" data-bs-target="#editModal">
                                                    Edit
                                                </button>

                                                <form action="{{ route('admin.destinations.destroy', $destination->id) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this destination?')">Delete</button>
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

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Destination</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_destination_name">Destination Name</label>
                            <input type="text" class="form-control" id="edit_destination_name" name="destination_name"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="edit_destination_picture">Destination Picture</label>
                            <input type="file" class="form-control" id="edit_destination_picture"
                                name="destination_picture">
                            <div class="mt-2">
                                <small class="text-muted">Current image:</small>
                                <img id="current_image" src="" alt="Current Image" class="img-thumbnail mt-2"
                                    style="max-height: 100px;">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const picture = this.getAttribute('data-picture');
                const route = this.getAttribute('data-route');

                // Set form action
                document.getElementById('editForm').action = route;

                // Set input values
                document.getElementById('edit_destination_name').value = name;
                document.getElementById('current_image').src = "{{ asset('') }}" + picture;
            });
        });
    });
</script>
