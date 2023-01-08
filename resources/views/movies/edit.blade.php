<x-layout>

<h1 class="mt-4">Movie</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active">Movie</li>
</ol>
<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit: <p>{{$movie->name}}</p>
        </h2>
    </header>
    <x-alerts />
    {{-- {{route('movies.store')}} --}}
    <form action="/movies/{{$movie->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3 ">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$movie->name}}">
            @error('name') <span style="font-size: 10px" class="text-danger">
            {{$message}}
            </span>
            @enderror
        </div>
        <div class="form-group mb-3 ">
            <label for="video_url">Youtube link</label>
            <input type="text" name="video_url" id="video_url" class="form-control" value="{{$movie->video_url}}">
            @error('video_url') <span style="font-size: 10px" class="text-danger">
            {{$message}}
            </span>
            @enderror
        </div>
        <div class="form-group mb-3 ">
            <label for="cast">Cast</label>
            <input type="text" name="cast" id="cast" class="form-control" value="{{$movie->cast}}">
            @error('cast') <span style="font-size: 10px" class="text-danger">
            {{$message}}
            </span>
            @enderror
        </div>
        <div class=" form-group form-check form-switch">
            <input class="form-check-input" type="checkbox" id="status" name="status" value="{{$movie->status}}"   >
            <label class="form-check-label" for="status">Status</label>
            @error('status') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
        </div>
        <div class="form-group mb-3 ">
            <label for="released_date">Realeased Date</label>
            <input type="text" name="released_date" id="released_date" class="form-control" value="{{$movie->released_date}}">
            @error('released_date') <span style="font-size: 10px" class="text-danger">
            {{$message}}
            </span>
            @enderror
        </div>


        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$movie->description}}</textarea>
            @error('description') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
        </div>
        <div class="form-group mb-3 ">
            <label for="pg">PG Level</label>
            <input type="text" name="pg" id="pg" class="form-control" value="{{$movie->pg}}">
            @error('pg') <span style="font-size: 10px" class="text-danger">
            {{$message}}
            </span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="image">Image</label>
           <input type="file" name="image" id="image" class="form-control">
           <img src="{{asset('storage/'. $movie->image)}}" class="img-thumbnail" alt="" width="100px" height="auto" >
           @error('image') <span style="font-size: 10px" class="text-danger">
            {{$message}}
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-outline-primary w-100">Update</button>


    </form>
</div>

</x-layout>
