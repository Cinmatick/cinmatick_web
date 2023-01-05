@extends('layouts.app')
@section('content')

    <h1 class="mt-4">Movies</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>Image</th>
                        <th>Name</th>
                        <th>Cast</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Youtube Link</th>
                        <th>PG</th>
                        <th>Released date</th>

                    </tr>
                </thead>

                <tbody>
                    @unless(count($movies) == 0)
                        @foreach ($movies as $movie)
                            <tr>
                                <td><a href="/dashboard/{{$movie->id}}"><img src="{{asset('images/image1.jpg')}}" alt="" width="100px" height="auto" ></a></td>
                                {{-- src="{{asset('storage/'.$movie->image)}}" --}}
                                <td><a href="/dashboard/{{$movie->id}}">{{$movie->name}}</a></td>
                                <td>{{$movie->cast}}</td>
                                <td>{{$movie->description}}</td>
                                <td>{{$movie->status}}</td>
                                <td>{{$movie->video_url}}</td>
                                <td>{{$movie->pg}}</td>
                                <td>{{$movie->released_date}}</td>
                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="6" class="text-center text-muted">No Movies found</td>
                    </tr>
                    @endunless
                </tbody>
            </table>
        </div>

    </div>





@endsection
