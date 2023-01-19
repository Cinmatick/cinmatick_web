<x-layout>

    <h1 class="mt-4">Categories</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Categories</li>
    </ol>

    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Category
            </h2>
        </header>
        <x-alerts />

        <form action="{{route('categories.update', $category->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group mb-3 ">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                @error('name') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
               <input type="file" name="image" id="image" class="form-control">
               <img src="{{asset('storage/'. $category->image)}}" class="img-thumbnail" alt="" width="100px" height="auto" >
               @error('image') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>





            <button type="submit" class="btn btn-outline-primary w-100">Update Category</button>


        </form>
    </div>

    </x-layout>
