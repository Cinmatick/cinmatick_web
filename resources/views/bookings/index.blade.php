<x-layout>
    <h1 class="mt-4">Bookings</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Bookings</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Bookings
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Reference</th>
                        <th>Show id</th>
                        <th>User </th>
                        <th>Number of Seats</th>
                        <th>Date </th>



                    </tr>
                </thead>

                <tbody>
                    @unless(count($bookings) == 0)
                        @foreach ($bookings as $booking)
                            <tr>

                                <td>{{$booking->id}}</td>
                                <td>{{$booking->reference}}</td>
                                <td>{{$booking->show_id}}</td>
                                <td>{{$booking->user->name}}</td>
                                <td>{{$booking->number_of_seats}}</td>
                                <td>{{$booking->created_at}}</td>

                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="6" class="text-center text-muted">No Bookings found</td>
                    </tr>
                    @endunless
                </tbody>
            </table>
        </div>

    </div>
</x-layout>
