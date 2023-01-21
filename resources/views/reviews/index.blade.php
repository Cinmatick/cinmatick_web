<x-layout>
    <h1 class="mt-4">Reviews</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Review</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Phone Number</th>
                        <th>Comment</th>
                        <th>Date</th>




                    </tr>
                </thead>

                <tbody>
                    @unless(count($reviews) == 0)
                        @foreach ($reviews as $review)
                            <tr>

                                <td>{{$review->id}}</td>
                                <td>{{$review->name}}</td>
                                <td>{{$review->email}}</td>
                                <td>{{$review->phone}}</td>
                                <td>{{$review->subject}}</td>
                                <td>{{$review->comment}}</td>
                                <td>{{$review->created_at}}</td>

                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="12" class="text-center text-muted">No Bookings found</td>
                    </tr>
                    @endunless
                </tbody>
            </table>
        </div>

    </div>
</x-layout>
