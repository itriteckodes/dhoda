@extends('admin.layout.index')

@section('title')
{{$blog->title}} Blog
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
                <h5 class="card-title">{{$blog->title}} Blog</h5>
                <span>(Note: Fields with <span class="text-danger font-size-lg" style="font-size: 18px"> *</span> sign are required)</span>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('admin.blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Enter Blog Title<span class="text-danger font-size-lg" style="font-size: 18px"> *</span></label>
                        <input type="text" name="title" placeholder="Enter Blog Title" class="form-control" value="{{$blog->title}}" required>
                        <input type="hidden" name="id" placeholder="Enter Blog Title" class="form-control" value="{{$blog->id}}" required>
                    </div>   
                    <div class="form-group">
                        <label>Enter Blog Url Name<span class="text-danger font-size-lg" style="font-size: 18px"> *</span></label>
                        <input type="text" name="name" value="{{$blog->name}}" placeholder="Enter Blog Url Name" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label>Enter Blog Image</label>
                        <input name="image" multiple type="file" class="form-input-styled" data-fouc>
                    </div>                                         
                    <div class="form-group">
                        <label>Select Blog Category<span class="text-danger font-size-lg" style="font-size: 18px"> *</span></label>
                        <select name="category_id" class="form-control" id="" required>
                            <option value="{{$blog->category->id}}">{{$blog->category->name}}</option>
                            @foreach (App\Models\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>         
                    @foreach ($blog->tags as $tag)
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tags</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="tag[]" value="{{$tag->tag}}" placeholder="Enter Tags" required>
                          <input type="hidden" class="form-control" id="email" name="ids[]" value="{{$tag->id}}" placeholder="Enter Tags">
                        </div>
                        
                      </div>
                      @endforeach
                    <div class="form-group col-md-12">
                        <label>Description<span class="text-danger font-size-lg" style="font-size: 18px"> *</span></label>
                        <textarea class="form-control summernote"  id="description" name="description" required>{{$blog->description}}</textarea>
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