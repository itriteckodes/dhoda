@extends('front.layout.index')
@section('title')
<title>{{$blog->title}} - {{$blog->category->name}} -Ameen Dhodha House</title>
{{-- <meta name="description" content="{!! $blog->description !!}" /> --}}
<!--Keywords -->
<meta name="keywords" content=" @foreach ($blog->tags as $tag){{$tag->tag}},@endforeach"  />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{$blog->title}} | {{$blog->category->name}} | Ameen Dhodha House" />
	{{-- <meta property="og:description" content="{!! substr( $blog->description, 0, 230) !!}" /> --}}
	<meta property="og:url" content="{{Request::url()}}" />
	<meta property="og:site_name" content="GYNOBST.COM" />
	<meta property="article:publisher" content="https://facebook.com/Ameen Dhodha House" />
	<meta property="og:image" content="{{asset($blog->image)}}" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="{{$blog->title}} | {{$blog->category->name}} | Ameen Dhodha House" />
	{{-- <meta name="twitter:description" content="{!! substr( $blog->description, 0, 230) !!}" /> --}}
	<meta name="twitter:image" content="{{asset($blog->image)}}" />
@endsection
@section('body')
<style>
    ::placeholder {
    font-size:18px;
}
</style>
    <!-- HERO SECTION PART START -->
    <div class="hero_section">
        <div class="png_img"><img class="w-100 img-fluid" src="img/leaf.png" alt="" /></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="herosection_content">
                        <h2 class="text-light">Blog Details</h2>
                        <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HERO SECTION PART END -->

    <!-- BLOG DETAILS PART START -->
    <div class="blogdetails_part">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="allpost_content">
                                <div class="serach_btn">
                                    <form action="{{route('search.blog')}}" method="post" id="searcForm">
                                        <div class="search_ber">
                                            <input type="text" class="form-control search_button" id="serach_button" name="keyword"  placeholder="Type something and press enter to search" required />
                                            <i class="icofont-search-1 search"></i>
                                        </div>
                                        <span class="text-danger error">Please Enter Something</span>
                                    </form>
                                </div>
                                <div class="post_category">
                                    <div class="sidebar">
                                        <h4 class="border-0">Post Category</h4>
                                    </div>
                                    <ul class="list-group">
                                        @foreach (App\Models\Category::all()  as $category)
                                        <li class="list-group-item list_icon"> <a href="{{route('category.show',str_replace(' ', '_',$category->name))}}"><i class="icofont-arrow-right"></i>{{{$category->name}}} ({{count($category->blogs)}})</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="recent_post">
                                <div class="sidebar">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    @foreach (App\Models\Blog::orderBy('id', 'DESC')->take(5)->get() as $bloge)
                                    <li>
                                        <span>{{Carbon\Carbon::parse($bloge->created_at)->format('d M,Y')}}</span>
                                        <h4><a href="{{route('blog.show',str_replace(' ', '_',$bloge->title))}}">{{$bloge->title}}</a></h4>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="populer_tag">
                                <div class="sidebar">
                                    <h4 class="border-0">Related Tags</h4>
                                </div>
                                <div class="populer_btn">
                                    <ul>
                                        @foreach ($blog->tags as $tag)
                                        <li><a href="{{route('tag.show',$tag->id)}}" class="text-dark">{{$tag->tag}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="blog">
                                <div class="blog_img">
                                    <img src="{{asset($blog->image)}}" class="w-100 img-fluid" alt="jpgimg" />
                                </div>
                                <div class="blog_publish d-flex justify-content-between pt-4">
                                    <div class="date">
                                        <span><i class="icofont-ui-calendar"></i> {{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}</span>
                                    </div>
                                    <div class="fav_icon">
                                        <span><i class="icofont-speech-comments"></i> {{$blog->comments->count()}}</span>
                                    </div>
                                </div>
                                <div class="blog_title">

                                    <h4><a href="{{route('blog.show',str_replace(' ', '_',$blog->title))}}">{{$blog->title}}</a></h4>
                                    <p>{!! $blog->description !!}</p>
                                </div>
                                <div class="blog_details">
                                    {{-- <div class="details_img mt-3 mb-3">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <img src="img/blogdetails1.jpg" class="w-100 img-fluid" alt="" />
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <img src="img/blogdetails2.jpg" class="w-100 img-fluid" alt="" />
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <img src="img/blogdetails3.jpg" class="w-100 img-fluid" alt="" />
                                            </div>
                                        </div>
                                    </div> --}}
                                    
                                    <div class="details_comment mt-5">
                                        <strong>Comment</strong>
                                        @foreach ($blog->comments as $comment)
                                        <div class="row mt-3">
                                            <div class="col-md-2 mt-2"><img src="{{asset($comment->image)}}" alt="" style="height: 100px; width:100px;"/></div>
                                            <div class="col-md-9 ">
                                                <strong>{{$comment->name}} <br /></strong>
                                                <span>{{Carbon\Carbon::parse($comment->created_at)->format('d M,Y')}}</span>
                                                <p>
                                                    {{$comment->comment}}
                                                </p>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        {{-- <div class="customer d-flex mt-3">
                                            <div class="customer_img mt-2"><img src="img/customer1.jpg" class="w-100 img-fluid" alt="" /></div>

                                            <div class="customer_info">
                                                <strong>Belitaram Kusani<br /></strong>
                                                <span>20 April 2020</span>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doem eiusmoed tempor encidi dunt ut labore et dolorem magna aliqua. Ut enim ad minim veniam, quis nostru exercitation
                                                </p>
                                            </div>
                                            <div class="reply"><i class="icofont-reply"></i>Reply</div>
                                        </div> --}}
                                    </div>
                                    <div class="blog_form mt-4">
                                        <strong>Leave A Comment Here</strong>
                                        <form action="{{route('comment.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="blog_id" id="" value="{{$blog->id}}">
                                            <div class="form-row">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                                    <input type="text" class="form-control border-radius-0" id="name" name="name" value="" placeholder="Name:" required/>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                                    <input type="email" class="form-control border-radius-0" id="email" name="email" value="" placeholder="Email:"  />
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                                    <input type="number" class="form-control border-radius-0" id="phonenumber" name="phone" value="" placeholder="Phone:"  />
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                                    <input type="text" class="form-control border-radius-0" id="subject" name="subject" value="" placeholder="Subject:"  required/>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                                    <input type="file" class="form-control border-radius-0" id="image" name="image" required  />
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                                    <textarea class="form-control border-radius-0" id="message:" name="comment" rows="3" placeholder="Message:" required></textarea>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit"  class="btn border-radius-0 mt-4">Submit Comment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG DETAILS PART END -->
@endsection
@section('script')
    <script>
        $(document).ready(function(){
           $('.error').hide();
            $('.search').on('click',function(){
                let key = $('#serach_button').val();
                if(key==''){
                    $('.error').show();
                }else{
                    $('#searcForm').submit();
                    $('.error').hide();
                }
            });
        });
    </script>
@endsection