@extends('admin.layout.index')

@section('title')
    Total Users 
@endsection

@section('content')

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>User Image</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Address</th>
                <th>User Orders</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\User::all() as $key => $user)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($user->image)}}" style="width:100px;height:auto;" ></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                @if($user->orders)
                <td>{{$user->orders->count()}}</td>
                @else 
                <td></td>
                @endif
                <td>
                    <form action="{{route('admin.user.destroy',$user->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
