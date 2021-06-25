@extends('admin.layout.index')

@section('title')
{{$product->name}} Product
@endsection
@section('styles')
<script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">{{$product->name}} Product</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Enter Product Name</label>
                        <input type="text" name="name" placeholder="Enter Product Name" class="form-control" value="{{$product->name}}" required>
                        <input type="hidden" name="id" placeholder="Enter Blog Title" class="form-control" value="{{$product->id}}" required>
                    </div>   
                    <div class="form-group">
                        <label>Enter Product Price</label>
                        <input type="text" name="price" value="{{$product->price}}"  placeholder="Enter Product Price" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="number" name="stock" value="{{$product->stock}}"  placeholder="Enter Product Quantity" class="form-control" required>
                    </div>  
                    <div class="form-group">
                        <label>Enter Product Main Image</label>
                        <input name="image" multiple type="file" class="form-input-styled" data-fouc accept="image/*">
                    </div>                                         
                    <div class="form-group">
                        <label>Select Product Category</label>
                        <select name="category_id" class="form-control" id="" required>
                            <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                            @foreach (App\Models\ProductCategory::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>  
                    <div class="form-grou row">
                        <div class="form-group col-md-6">
                            <label>Related Image1 ( Optional )</label>
                            <input type="file" name="images[]" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Related Image2 ( Optional )</label>
                            <input type="file" name="images[]" class="form-control">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label>Related Image3 ( Optional )</label>
                        <input type="file" name="images[]" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea class="form-control summernote"  id="description" name="detail" required>{{$product->detail}}</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Updated 
                            <i class="icon-plus22 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->
    </div>
</div>

<div class="card">
    <h3 class="p-3">Product Related Images</h3>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product->images as $key => $image)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($image->image)}}" style="width:100px;height:auto;"></td>
                <td>
                    <div class="btn-group">
                        <form action="{{route('admin.productImage.destroy',$image->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
<script>
    //Add Input Fields
    $(document).ready(function() {
       
        var wrapper    = $(".options"); //Input fields wrapper
        var add_button = $(".add_fields"); //Add button class or ID
        var x = 1; //Initial input field is set to 1
     
     //When user click on add input button
     $(add_button).click(function(e){
            e.preventDefault();
   
              
            $(wrapper).append('
            <div id="remov" class="form-group row">
                <label class="col-sm-2 col-form-label">Tags</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="tag[]" placeholder="Enter Tags">
                    <button class="btn btn-danger remove_field">Remove</button>
                </div>
            </div>');
                
                
                 
        });
     
        //when user click on remove button
        $(wrapper).on("click",".remove_field", function(e){ 
            e.preventDefault();
            //alert('dcdcdcdc');
            $('#remov').remove(); //remove inout field
          
        })
    });
  
</script>
@endsection