@extends('admin.layout.index')

@section('title')
    Manage Blog 
@endsection

@section('content')

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Blog Image</th>
                <th>Blog Title</th>
                <th>Blog Category</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Blog::all() as $key => $blog)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($blog->image)}}" style="width:100px;height:auto;"></td>
                <td>{{$blog->title}}</td>
                @if($blog->category)
                <td>{{$blog->category->name}}</td>
                @endif
                <td>
                    <a href="{{route('admin.blog.edit',$blog->id)}}">
                        <button type="button" class="btn btn-dark btn-sm">Edit</button>
                    </a> 
                </td>
                <td>
                    <div class="btn-group">
                        <form action="{{route('admin.blog.destroy',$blog->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-dark btn-sm">Delete</button>
                        </form>
                      
                      </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
