@extends('front.layout.index')
@section('title')
<title>{{$Keyword}}</title>
@foreach (App\Models\Information::all()->take(1) as $information)     

<meta name="description" content="{!! $information->bdescription !!}" />
@endforeach<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('css')
<!-- Revolution Slider -->
<link rel="stylesheet" href="{{asset('front/css/revolutionslider/settings.css')}}" />
<!-- PARTICLES ADD-ON FILES -->
<link rel='stylesheet' href="{{asset('front/js/revolutionslider/revolution-addons/particles/css/revolution.addon.particles4bf4.css?ver=1.0.3')}}" type='text/css' media='all' />
<!-- Main Styles -->

@endsection

@section('body')
<!-- CONTENT -->
<!-- CONTENT -->

 <!-- HERO SECTION PART START -->
 <div class="hero_section">
    <div class="png_img"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="herosection_content">
                    <h2 class="text-light">Searched Blogs</h2>
                    <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- HERO SECTION PART END -->
<div class="blog_part">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="allpost_content">
                            <div class="serach_btn">
                                <form action="{{route('search.blog')}}" method="POST">
                                    <div class="search_ber">
                                        <input type="text" class="form-control search_button" id="serach_button" name="keyword" value="" placeholder="Type something and press enter to search" />
                                        <i class="icofont-search-1"></i>
                                    </div>
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
                                <li>
                                    <span>20 April 2020</span>
                                    <h4><a href="#">Strawberries are low-growing herbaceous plants.</a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                        <div class="blog">
                            <div class="blog_img">
                                <img src="{{asset('front/img/blog1.jpg')}}" class="w-100 img-fluid" alt="jpgimg" />
                            </div>
                            <div class="blog_publish d-flex justify-content-between pt-4">
                                <div class="date">
                                    <span><i class="icofont-ui-calendar"></i> {{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}</span>
                                </div>
                                <div class="fav_icon">
                                    {{-- <span><i class="icofont-ui-love"></i> 568</span> --}}
                                    <span><i class="icofont-speech-comments"></i> {{$blog->comments->count()}}</span>
                                </div>
                            </div>
                            <div class="blog_title text-uppercase">
                                <h4><a href="{{route('blog.show',str_replace(' ', '_',$blog->title))}}">{{$blog->title}}.</a></h4>
                                <p>{!! substr( $blog->description, 0, 230) !!}</p>
                                <a href="{{route('blog.show',str_replace(' ', '_',$blog->title))}}" class="underline">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
               
                    {{-- <div class="row mt-5 text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="pages_num">
                                    <ul>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a href="#"><i class="icofont-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection