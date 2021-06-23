@extends('admin.layout.index')

@section('title')
    Manage Products 
@endsection

@section('content')

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Stock</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Product::all() as $key => $product)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($product->image)}}" style="width:100px;height:auto;"></td>
                <td>{{$product->name}}</td>
                @if($product->category)
                <td>{{$product->category->name}}</td>
                <td>{{$product->stock}}</td>
                @endif
                <td>
                    <a href="{{route('admin.product.edit',$product->id)}}">
                        <button type="button" class="btn btn-dark btn-sm">Edit</button>
                    </a> 
                </td>
                <td>
                    <div class="btn-group">
                        <form action="{{route('admin.product.destroy',$product->id)}}" method="POST">
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
