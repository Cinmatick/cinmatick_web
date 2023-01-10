<x-layout>

    <h1 class="mt-4">Category </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Add category</li>
    </ol>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Category
            </h2>
        </header>
        <x-alerts />

        <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group mb-3 ">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                @error('name') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
               <input type="file" name="image" id="image" class="form-control">
               @error('image') <span style="font-size: 10px" class="text-danger">
                {{$message}}
                </span>
                @enderror
            </div>





            <button type="submit" class="btn btn-outline-primary w-100">Add Category</button>


        </form>
    </div>

    </x-layout>
