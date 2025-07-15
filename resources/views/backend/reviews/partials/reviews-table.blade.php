<div class="table-responsive">
    <table class="display table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $key => $review)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $review->name }}</td>
                <td>{{ $review->email }}</td>
                <td>
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-secondary' }}"></i>
                    @endfor
                </td>
                <td>{{ Str::limit($review->comment, 50) }}</td>
                <td>
                    @if($review->is_approved == 1)
                        <span class="badge bg-success">Approved</span>
                    @elseif($review->is_approved == 0)
                        <span class="badge bg-danger">Rejected</span>
                    @else
                        <span class="badge bg-warning">Pending</span>
                    @endif
                </td>
                <td>{{ $review->created_at->format('M d, Y') }}</td>
                <td>
                    @if($review->is_approved !== true)
                        <a href="{{ route('admin.reviews.approve', $review->id) }}" class="btn btn-success btn-sm">Approve</a>
                    @endif

                    @if($review->is_approved !== false)
                        <a href="{{ route('admin.reviews.reject', $review->id) }}" class="btn btn-warning btn-sm">Reject</a>
                    @endif

                    <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

