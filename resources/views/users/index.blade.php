<x-layout>

<h1 class="mt-4">Registered Users</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active">Users</li>
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
                    <th>name </th>
                    <th>email </th>
                    <th>Phone</th>




                </tr>
            </thead>

            <tbody>
                @unless(count($users) == 0)
                    @foreach ($users as $user)
                        <tr>

                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone_no}}</td>
                           
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
