<x-layout>

    <h1 class="mt-4">Theatres</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Theatres</li>
    </ol>

    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Theatre
            </h2>
        </header>
        <x-alerts />

        <form action="/theatres/{{$theatre->id}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group mb-3 ">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$theatre->name}}">
                @error('name') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>


            <div class="form-group mb-3 ">
                <label for="capacity">Capacity</label>
                <input type="text" name="capacity" id="capacity" class="form-control" value="{{$theatre->capacity}}">
                @error('capacity') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
               <input type="file" name="image" id="image" class="form-control">
               <img src="{{asset('storage/'. $theatre->image)}}" class="img-thumbnail" alt="" width="100px" height="auto" >
               @error('image') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>


            <button type="submit" class="btn btn-outline-primary w-100">Update Theatre</button>


        </form>
    </div>

    </x-layout>
