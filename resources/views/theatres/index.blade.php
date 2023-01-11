<x-layout>

<h1 class="mt-4">Theatres</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active">Theatres</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Theatre
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>

                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Capacity</th>
                    <th>Date created</th>
                    <th>Date Updated</th>
                    <th>Actions</th>


                </tr>
            </thead>

            <tbody>
                @unless(count($theatres) == 0)
                    @foreach ($theatres as $theatre)
                        <tr>

                            <td>{{$theatre->id}}</td>
                            <td>{{$theatre->name}}</td>
                            <td><img src="{{asset('storage/'. $theatre->image)  }}" alt="" width="100px" height="auto" ></td>
                            <td>{{$theatre->capacity}}</td>
                            <td>{{$theatre->created_at}}</td>
                            <td>{{$theatre->updated_at}}</td>
                            <td class="p-2">
                                <a href="/theatres/{{ $theatre->id}}/edit" class="btn btn-outline-info btn-sm ">
                                   <i class="fa fa-edit"></i>Edit
                               </a>
                               <form action="/theatres/{{$theatre->id}}" class="d-inline" method="POST">
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
                    <td colspan="6" class="text-center text-muted">No Theatre found</td>
                </tr>
                @endunless
            </tbody>
        </table>
    </div>

</div>
</x-layout>
