@extends('admin.layout.index')

@section('title')
Create Product
@endsection
@section('styles')
<script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/form_tags_input.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/forms/tags/tokenfield.min.js')}}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Product</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group ">
                                <img id="preview_img" src="{{asset('images/blog/721606330121.jpg')}}" height="240" width="320" style="padding-bottom: 10px;" alt="">
                                <input type="file" value="{{old('image')}}"  name="image" id="profile_image" onchange="loadPreview(this);" class="form-input-styled" >
                                </div>
                            </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Enter Product Name</label>
                                <input type="text" name="name" value="{{old('name')}}"  placeholder="Enter Product Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Enter Product Price</label>
                                <input type="text" name="price" value="{{old('price')}}"  placeholder="Enter Product Price" class="form-control" required>
                            </div>   
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input type="number" name="stock" value="{{old('stock')}}"  placeholder="Enter Product Quantity" class="form-control" required>
                            </div>                                  
                            <div class="form-group">
                                <label>Select Product Category</label>
                                <select name="category_id" class="form-control"   id="" required>
                                    <option value="">Select</option>
                                    @foreach (App\Models\ProductCategory::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select> 
                            </div>   
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea class="form-control summernote"  id="description" name="detail" required>{{old('description')}} </textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Create 
                            <i class="icon-plus22 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@endsection
@section('scripts')
<script>
    function loadPreview(input, id) {
      id = id || '#preview_img';
      if (input.files && input.files[0]) {
          var reader = new FileReader();
   
          reader.onload = function (e) {
              $(id)
                      .attr('src', e.target.result)
                      .width(auto)
                      .height(240);
          };

          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

@endsection