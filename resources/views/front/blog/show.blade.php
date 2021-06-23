@extends('front.layout.index')
@section('title')
<title>{{$blog->title}} - {{$blog->category->name}} -Ameen Dhodha House</title>
<meta name="description" content="{!! substr( $blog->description, 0, 230) !!}" />
<!--Keywords -->
<meta name="keywords" content=" @foreach ($blog->tags as $tag){{$tag->tag}},@endforeach"  />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{$blog->title}} | {{$blog->category->name}} | Ameen Dhodha House" />
	<meta property="og:description" content="{!! substr( $blog->description, 0, 230) !!}" />
	<meta property="og:url" content="{{Request::url()}}" />
	<meta property="og:site_name" content="GYNOBST.COM" />
	<meta property="article:publisher" content="https://facebook.com/Ameen Dhodha House" />
	<meta property="og:image" content="{{asset($blog->image)}}" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="{{$blog->title}} | {{$blog->category->name}} | Ameen Dhodha House" />
	<meta name="twitter:description" content="{!! substr( $blog->description, 0, 230) !!}" />
	<meta name="twitter:image" content="{{asset($blog->image)}}" />
@endsection
@section('body')
    <!-- HERO SECTION PART START -->
    <div class="hero_section">
        <div class="png_img"><img class="w-100 img-fluid" src="img/leaf.png" alt="" /></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="herosection_content">
                        <h2>Blog Details</h2>
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
                                    <form action="{{route('search.blog')}}" method="post">
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
                                        <h4><a href="blogdetails.html">Strawberries are low-growing herbaceous plants.</a></h4>
                                    </li>

                                    <li>
                                        <span>20 April 2020</span>
                                        <h4><a href="blogdetails.html">Strawberries are low-growing herbaceous plants.</a></h4>
                                    </li>

                                    <li>
                                        <span>20 April 2020</span>
                                        <h4><a href="blogdetails.html">Strawberries are low-growing herbaceous plants.</a></h4>
                                    </li>

                                    <li>
                                        <span>20 April 2020</span>
                                        <h4><a href="blogdetails.html">Strawberries are low-growing herbaceous plants.</a></h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="populer_tag">
                                <div class="sidebar">
                                    <h4 class="border-0">Populer Tag</h4>
                                </div>
                                <div class="populer_btn">
                                    <ul>
                                        @foreach ($blog->tags as $tag)
                                        <li>{{$tag->tag}}</li>
                                        @endforeach
                                        {{-- <li>Agency</li>
                                        <li>Business</li>
                                        <li>Organic Food</li>
                                        <li>Farmer</li>
                                        <li>Marketing</li>
                                        <li>Company</li>
                                        <li>Food</li>
                                        <li>Services</li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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

                                    <h4><a href="blogdetails.html">{{$blog->title}}</a></h4>
                                    <p>{!! substr( $blog->description, 0, 230) !!}</p>
                                </div>
                                <div class="blog_details">
                                    <div class="details_img mt-3 mb-3">
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
                                    </div>
                                    
                                    <div class="details_comment mt-4">
                                        <strong>Comment</strong>
                                        @foreach ($blog->comments as $comment)
                                        <div class="customer d-flex mt-3">
                                            <div class="customer_img mt-2"><img src="{{asset($comment->image)}}" class="w-100 img-fluid" alt=""  /></div>
                                            <div class="customer_info">
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
                                        <strong>Leave A Comments Here</strong>
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
                                                    <input type="text" class="form-control border-radius-0" id="phonenumber" name="phone" value="" placeholder="Phone:" required />
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
{{-- <div class="hero-section hero-background" style="background-image:url({{asset($blog->image)}})!important;">
    <h1 class="page-title">{{$blog->title}}</h1>
</div> --}}

<!--Navigation section-->
{{-- <div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{route('home.index')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><a href="{{route('blog.index')}}" class="permal-link">Blogs</a></li>
            <li class="nav-item"><span class="current-page">{{$blog->title}}</span></li>
        </ul>
    </nav>
</div>
<div class="page-contain blog-page left-sidebar">
    <div class="container">
        <div class="row">

            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

                <!--Single Post Contain-->
                <div class="single-post-contain">

                    <div class="post-head">
                        <div class="thumbnail">
                            <figure><img src="{{asset($blog->image)}}" width="870" height="635" alt=""></figure>
                        </div>
                        <h2 class="post-name">{{$blog->title}}</h2>
                        <p class="post-archive">
                            <b class="post-cat">{{$blog->category->name}}</b>
                            <span class="post-date"> / {{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}</span>
                            <span class="author">Posted By: Admin</span>
                        </p>
                    </div>

                    <div class="post-content">
                        <p>{!! $blog->description !!}</p>
                      
                    </div>

                    <div class="post-foot">

                        <div class="post-tags">
                            <span class="tag-title">Tags:</span>
                            <ul class="tags">
                                @foreach ($blog->tags as $tag)
                                <li><a href="#" class="tag-link">{{$tag->tag}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="auth-info">
                            <div class="ath">
                                <span class="count-item viewer"><i class="fa fa-eye" aria-hidden="true"></i>{{$blog->views}}</span>
                                <span class="count-item commented"><i class="fa fa-commenting" aria-hidden="true"></i>{{$blog->comments->count()}}</span>
                            </div>
                            <div class="socials-connection">
                                <span class="title">Share:</span>
                                <ul class="social-list">
                                    <li><a href="#" class="socail-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="socail-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="socail-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="socail-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="socail-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <!--Comment Block-->
                <div class="post-comments">
                    <h3 class="cmt-title">Comments<sup>(26)</sup></h3>

                    <div class="comment-form">
                        <form action="#" method="post" name="frm-post-comment">
                            <p class="form-row">
                                <textarea name="txt-comment" id="txt-comment-ath-3364" cols="30" rows="10" placeholder="Write your comment"></textarea>
                                <a href="#" class="current-author"><img src="assets/images/blogpost/viewer-avt.png" width="41" height="41" alt=""></a>
                            </p>
                            <p class="form-row last-btns">
                                <button type="submit" class="btn btn-sumit">post a comment</button>
                                <a href="#" class="btn btn-fn-1"><i class="fa fa-smile-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-fn-1"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-fn-1"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                            </p>
                        </form>
                    </div>

                    <div class="comment-list">

                        <ol class="post-comments lever-0">
                            <li class="comment-elem">
                                <div class="wrap-post-comment">

                                    <div class="cmt-inner">
                                        <div class="auth-info">
                                            <a href="#" class="author-contact"><img src="assets/images/blogpost/author-02.png" alt="" width="29" height="28">Christiano Bale</a>
                                            <span class="cmt-time">4 days ago</span>
                                        </div>
                                        <div class="cmt-content">
                                            <p>Nam sed eleifend dui, eu eleifend leo.Mauris ornare eros quis placerat mollis. Duis ornare euismod risus at dictum. Proin<br>
                                                at porttitor metus. Nunc luctus nisl suscipit, hendrerit ligula non.</p>
                                        </div>
                                        <div class="cmt-fooot">
                                            <a href="#" class="btn btn-response"><i class="fa fa-commenting" aria-hidden="true"></i>Comment</a>
                                            <a href="#" class="btn btn-like"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>9</a>
                                            <a href="#" class="btn btn-dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>1</a>
                                        </div>
                                    </div>

                                    <div class="comment-resposes">
                                        <ol class="post-comments lever-1">
                                            <li class="comment-elem">
                                                <div class="wrap-post-comment">
                                                    <div class="cmt-inner">
                                                        <div class="auth-info">
                                                            <a href="#" class="author-contact"><img src="assets/images/blogpost/author-03.png" alt="" width="29" height="28">Samuel Godi</a>
                                                            <span class="cmt-time">4 days ago</span>
                                                        </div>
                                                        <div class="cmt-content">
                                                            <p>Ut pellentesque gravida justo non rhoncus. Nunc ullamcorper tortor id aliquet luctus. Proin varius aliquam<br>
                                                                consequat.Curabitur a commodo diam, vitae pellentesque urna.</p>
                                                        </div>
                                                        <div class="cmt-fooot">
                                                            <a href="#" class="btn btn-response"><i class="fa fa-commenting" aria-hidden="true"></i>Comment</a>
                                                            <a href="#" class="btn btn-like"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>9</a>
                                                            <a href="#" class="btn btn-dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>1</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>

                                </div>
                            </li>
                        </ol>

                        <div class="biolife-panigations-block ">
                            <ul class="panigation-contain">
                                <li><span class="current-page">1</span></li>
                                <li><a href="#" class="link-page">2</a></li>
                                <li><a href="#" class="link-page">3</a></li>
                                <li><span class="sep">....</span></li>
                                <li><a href="#" class="link-page">20</a></li>
                                <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar blog-sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">

                <div class="biolife-mobile-panels">
                    <span class="biolife-current-panel-title">Sidebar</span>
                    <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                </div>

                <div class="sidebar-contain">

                    <!--Search Widget-->
                    <div class="widget search-widget">
                        <div class="wgt-content">
                            <form action="#" name="frm-search" method="get" class="frm-search">
                                <input type="text" name="s" value="" placeholder="SEACH..." class="input-text">
                                <button type="submit" name="ok"><i class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <!--Categories Widget-->
                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Categories</h4>
                        <div class="wgt-content">
                            <ul class="cat-list">

                                
                                @foreach (App\Models\Category::all()  as $category)
                                <li class="cat-list-item"><a href="{{route('category.show',str_replace(' ', '_',$category->name))}}" class="cat-link">{{{$category->name}}} ({{count($category->blogs)}})</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!--Posts Widget-->
                    <div class="widget posts-widget">
                        <h4 class="wgt-title">Recent post</h4>
                        <div class="wgt-content">
                            <ul class="posts">
                                <li>
                                    <div class="wgt-post-item">
                                        <div class="thumb">
                                            <a href="#"><img src="assets/images/blogpost/post-wgt-01.jpg" width="80" height="58" alt=""></a>
                                        </div>
                                        <div class="detail">
                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                            <p class="post-archive">22 Jan 2019<span class="comment">15 Comments</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wgt-post-item">
                                        <div class="thumb">
                                            <a href="#"><img src="assets/images/blogpost/post-wgt-02.jpg" width="80" height="58" alt=""></a>
                                        </div>
                                        <div class="detail">
                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                            <p class="post-archive">06 Apr 2019<span class="comment">06 Comments</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wgt-post-item">
                                        <div class="thumb">
                                            <a href="#"><img src="assets/images/blogpost/post-wgt-03.jpg" width="80" height="58" alt=""></a>
                                        </div>
                                        <div class="detail">
                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                            <p class="post-archive">12 May 2019<span class="comment">08 Comments</span></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Twitter Widget-->
                    <div class="widget twitter-widget">
                        <h4 class="wgt-title">Latest Tweets</h4>
                        <div class="wgt-content">
                            <ul class="content">
                                <li>
                                    <div class="wgt-twitter-item">
                                        <div class="author"><a href="#"><img src="assets/images/blogpost/author.png" width="38" height="38" alt="author"></a></div>
                                        <div class="detail">
                                            <h4 class="account-info">
                                                <a href="#" class="ath-name">Braum J. Teran</a>
                                                <a href="#" class="ath-taglink">@real BraumTeran</a>
                                            </h4>
                                            <p class="tweet-content">President XI told me he appreciates that the U.S.<br/><a href="#">http://company/googletzd</a>
                                            </p>
                                            <div class="tweet-count">
                                                <a class="btn responsed"><i class="fa fa-comment" aria-hidden="true"></i>2.9N</a>
                                                <a class="btn liked"><i class="fa fa-heart" aria-hidden="true"></i>10N</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wgt-twitter-item">
                                        <div class="author"><a href="#"><img src="assets/images/blogpost/author.png" width="38" height="38" alt="author"></a></div>
                                        <div class="detail">
                                            <h4 class="account-info">
                                                <a href="#" class="ath-name">Braum J. Teran</a>
                                                <a href="#" class="ath-taglink">@real BraumTeran</a>
                                            </h4>
                                            <p class="tweet-content">President XI told me he appreciates that the U.S.<br/><a href="#">http://company/googletzd</a>
                                            </p>
                                            <div class="tweet-count">
                                                <a class="btn responsed"><i class="fa fa-comment" aria-hidden="true"></i>2.9N</a>
                                                <a class="btn liked"><i class="fa fa-heart" aria-hidden="true"></i>10N</a>
                                            </div>
                                            <div class="viewall">
                                                <a href="#" class="view-all">view all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Comments Widget-->
                    <div class="widget comment-widget">
                        <h4 class="wgt-title">Recent Comments</h4>
                        <div class="wgt-content">
                            <ul class="comment-list">
                                <li>
                                    <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                </li>
                                <li>
                                    <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Best Organics</a></p>
                                </li>
                                <li>
                                    <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                </li>
                                <li>
                                    <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </aside>
        </div>
    </div>
</div> --}}

@endsection