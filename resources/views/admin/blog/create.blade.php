@extends('admin.layout.index')

@section('title')
Create Blog
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
                
                <h5 class="card-title">Add New Blog</h5>
                <span>(Note: Fields with <span class="text-danger font-size-lg" style="font-size: 18px"> *</span> sign are required)</span>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group ">
                                <img id="preview_img" src="{{asset('images/blog/721606330121.jpg')}}" height="240" width="300" style="padding-bottom: 10px;" alt="">
                                <input type="file" value="{{old('image')}}"  name="image" id="profile_image" onchange="loadPreview(this);" class="form-input-styled"  required>
                                </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Enter Blog Title<span class="text-danger font-size-lg" style="font-size: 18px"> *</span></label>
                                <input type="text" name="title" value="{{old('title')}}"  placeholder="Enter Blog Title" class="form-control" required>
                                <input type="hidden" name="admin_id" value="{{Auth::user()->id}}" placeholder="Enter Blog Title" class="form-control" required>
                            </div>  
                            <div class="form-group">
                                <label>Enter Blog Url Name<span class="text-danger font-size-lg" style="font-size: 18px"> *</span></label>
                                <input type="text" name="name" placeholder="Enter Blog Url Name" class="form-control" required>
                            </div>                                       
                            <div class="form-group">
                                <label>Select Blog Category<span class="text-danger font-size-lg" style="font-size: 18px"> *</span></label>
                                <select name="category_id" class="form-control"   id="" required>
                                    <option value="">Select</option>
                                    @foreach (App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select> 
                            </div>         
                            <div class="form-group col-md-12">
                                <label>Tags</label>
                                <input type="text" class="form-control tokenfield-teal" name="tag[]"  >
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Description<span class="text-danger font-size-lg" style="font-size: 18px"> *</span></label>
                        <textarea class="form-control summernote" id="description" name="description" required>{{old('description')}} </textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary create-btn">Create 
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
   $(document).ready(function(){
        $('.create-btn').on('click',function(){
            let description = $('#description').val();
            if($description==''){
                
            }
        });
   });

</script>

@endsection