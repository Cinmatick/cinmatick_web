<x-layout>

<h1 class="mt-4">Shows</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active">Shows</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Shows
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>

                    <th>Id</th>
                    <th>Movie </th>
                    <th>Theatre </th>
                    <th>Price</th>
                    <th>Time</th>
                    <th>Show Date</th>
                    <th>Available Seats</th>
                    <th>Created Date</th>
                    <th>Upadated Date</th>
                    <th>Actions</th>



                </tr>
            </thead>

            <tbody>
                @unless(count($shows) == 0)
                    @foreach ($shows as $show)
                        <tr>

                            <td>{{$show->id}}</td>
                            <td>{{$show->movie->name}}</td>
                            <td>{{$show->theatre->name}}</td>
                            <td>{{$show->price}}</td>
                            <td>{{$show->time}}</td>
                            <td>{{$show->date}}</td>
                            <td>{{$show->available_seats}}</td>
                            <td>{{$show->created_at}}</td>
                            <td>{{$show->updated_at}}</td>
                            <td class="p-2">
                                <a href="/shows/{{ $show->id}}/edit" class="btn btn-outline-info btn-sm ">
                                   <i class="fa fa-edit"></i>Edit
                               </a>
                               <form action="/shows/{{$show->id}}" class="d-inline" method="POST">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-outline-danger btn-sm">
                                       <i class="fa fa-trash"></i>Delete
                                   </button>
                               </form>
                            </td>

                        </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="6" class="text-center text-muted">No Shows found</td>
                </tr>
                @endunless
            </tbody>
        </table>
    </div>

</div>
</x-layout>
