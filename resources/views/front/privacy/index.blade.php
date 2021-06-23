@extends('front.layout.index')
@section('title')
<title>PRIVACY POLICY - Ameen Dhoda House</title>
<meta name="description" content="">

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')
<div class="hero-section hero-background" style="background-image:url('front/assets/images/hero_bg.jpg')!important;">
    <h1 class="page-title">Privacy Policy</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{route('home.index')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="current-page">Privacy Policy</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain about-us">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container text-center" >
            <h4 class="title">Privacy Policy of Ameen Dhoda House!</h4>
            <div class="text-wraper">
                <p class="text-info">{!! $information->privacy !!}</p>
            </div>
        </div>
    </div>

</div>
@endsection