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
                <label for="movie_id">Movie id</label>
                <input type="text" name="movie_id" id="movie_id" class="form-control" value="{{$show->movie_id}}">
                @error('movie_id') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>


            <div class="form-group mb-3 ">
                <label for="theatre_id">Theatre id</label>
                <input type="text" name="theatre_id" id="theatre_id" class="form-control" value="{{$show->theatre_id}}">
                @error('theatre_id') <span style="font-size: 10px" class="text-danger">
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
                <input type="text" name="time" id="time" class="form-control" value="{{$show->time}}">
                @error('time') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group mb-3 ">
                <label for="date">Show date</label>
                <input type="text" name="date" id="date" class="form-control" value="{{$show->date}}">
                @error('date') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group mb-3 ">
                <label for="available_seats">Available Seats</label>
                <input type="text" name="available_seats" id="available_seats" class="form-control" value="{{$show->available_seats}}">
                @error('available_seats') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>


            <button type="submit" class="btn btn-outline-primary w-100">Update Shows</button>


        </form>
    </div>

</x-layout>
