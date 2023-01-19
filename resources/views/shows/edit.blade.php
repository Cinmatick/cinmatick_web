<x-layout>

    <h1 class="mt-4">Shows</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Shows</li>
    </ol>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Show
            </h2>
        </header>
        <x-alerts />

        <form action="/shows/{{$show->id}}" method="post" >
            @csrf
            @method('PUT')
            <div class="form-group mb-3 ">
                <label for="movie_id">Movie</label>
                <select name="movie_id" id="movie_id" class="form-select mb-3">
                    <option value="{{$show->movie_id}}">{{$show->movie->name}}</option>
                    @foreach ($movies as $movie)
                    <option value="{{$movie->id}}">{{$movie->name}}</option>
                    @endforeach
                </select>
                @error('movie_id') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>


            <div class="form-group mb-3 ">
                <label for="theatre_id">Theatre</label>
                <select name="theatre_id" id="theatre_id" class="form-select mb-3">
                    <option value="{{$show->theatre_id}}">{{$show->theatre->name}}</option>
                    @foreach ($theatres as $theatre)
                    <option value="{{$theatre->id}}">{{$theatre->name}}</option>
                    @endforeach
                </select>

                @error('theatre_id') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>
            <div class=" form-group form-check form-switch">
                <input class="form-check-input" type="checkbox" id="status" name="status"    >
                <label class="form-check-label" for="status">Status</label>
                @error('status') <span style="font-size: 10px" class="text-danger">
                    {{$message}}
                    </span>
                    @enderror
            </div>
            <div class="form-group mb-3 ">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="{{$show->price}}">
                @error('price') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group mb-3 ">
                <label for="time">Show time</label>
                <input type="time" name="time" id="time" class="form-control" value="{{$show->time}}">
                @error('time') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group mb-3 ">
                <label for="date">Show date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{$show->date}}">
                @error('date') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>



            <button type="submit" class="btn btn-outline-primary w-100">Update Shows</button>


        </form>
    </div>

</x-layout>
