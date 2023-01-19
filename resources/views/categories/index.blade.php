<x-layout>

<h1 class="mt-4">Movie Category</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active">Category</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Category
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>

                    <th>Id</th>
                    <th>Name</th>
                    <th>image</th>
                    <th>Date created</th>
                    <th>Date Updated</th>
                    <th>Actions</th>


                </tr>
            </thead>

            <tbody>
                @unless(count($categories) == 0)
                    @foreach ($categories as $category)
                        <tr>

                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td><img src="{{asset('storage/'. $category->image)  }}" alt="" width="100px" height="auto" ></td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td class="p-2">
                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-outline-info btn-sm ">
                                   <i class="fa fa-edit"></i>Edit
                               </a>
                               <form action="{{route('categories.destroy', $category->id)}}" class="d-inline" method="POST">
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
                    <td colspan="6" class="text-center text-muted">No categories found</td>
                </tr>
                @endunless
            </tbody>
        </table>
    </div>

</div>
</x-layout>
