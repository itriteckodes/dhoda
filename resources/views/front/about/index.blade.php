@extends('front.layout.index')
@section('title')
<title>About Us - Ameen Dhoda House</title>
<meta name="description" content="">

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')
 <!-- HERO SECTION PART START -->
 <div class="hero_section">
    <div class="png_img"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="herosection_content">
                    <h2>About Us</h2>
                    <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- HERO SECTION PART END -->
<div class="full-about" >
    <div class="container">
        <div class="row">
            <div class="about-title">
                <h2>About us</h2>
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <h3>We Providing Services Since 1935 With Proud.</h3>
                    <div class="about-details">
                        <p>{!! $information->about !!}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <!--Hero Section-->
<div class="hero-section hero-background" style="background-image:url('front/assets/images/hero_bg.jpg')!important;">
    <h1 class="page-title">About Us</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{route('home.index')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="current-page">About us</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain about-us">

    <!-- Main content -->
    <div id="main-content" class="main-content">

        <div class="welcome-us-block" >
            <div class="container">
                <h4 class="title">Welcome to Ameen Dhoda House!</h4>
                <div class="row">
                    <div class="col-md-6" style="margin-top:55px!important;">
                        <img src="{{asset('front/assets/images/about-us/bn011.png')}}" alt="" width="622" height="656">
                    </div>
                    <div class=" col-md-6">
                        <p class="text-info">{!! $information->about !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-choose-us-block">
            <div class="container">
                <h4 class="box-title">Why Choose us</h4>
                <b class="subtitle">Natural food is taken from the world's most modern farms with strict safety cycles</b>
                <div class="showcase">
                    <div class="sc-child sc-left-position">
                        <ul class="sc-list">
                            <li>
                                <div class="sc-element color-01">
                                    <span class="biolife-icon icon-fresh-drink"></span>
                                    <div class="txt-content">
                                        <span class="number">01</span>
                                        <b class="title">Always Fresh</b>
                                        <p class="desc">We always provide fresh and quality food</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sc-element color-02">
                                    <span class="biolife-icon icon-healthy-about"></span>
                                    <div class="txt-content">
                                        <span class="number">02</span>
                                        <b class="title">Overall Healthy</b>
                                        <p class="desc">We consider customer health as our main priority that's why here we provide fresh and healthy food</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sc-element color-03">
                                    <span class="biolife-icon icon-green-safety"></span>
                                    <div class="txt-content">
                                        <span class="number">03</span>
                                        <b class="title">Encironmental Safety</b>
                                        <p class="desc">All products are kept in the best condition to ensure always fresh</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sc-child sc-center-position" style="margin-top:80px">
                        <figure><img src="{{asset('front/assets/images/about-us/bn04.png')}}" alt="" width="622" height="656"></figure>
                    </div>
                    <div class="sc-child sc-right-position">
                        <ul class="sc-list">
                            <li>
                                <div class="sc-element color-04">
                                    <span class="biolife-icon icon-capacity-about"></span>
                                    <div class="txt-content">
                                        <span class="number">04</span>
                                        <b class="title">Online Booking</b>
                                        <p class="desc">We provide online food booking facility</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sc-element color-05">
                                    <span class="biolife-icon icon-arteries-about"></span>
                                    <div class="txt-content">
                                        <span class="number">05</span>
                                        <b class="title">Quality Standards</b>
                                        <p class="desc">Here we provide best quality food for our customers. We always try to maintain our quality standard </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sc-element color-06">
                                    <span class="biolife-icon icon-title"></span>
                                    <div class="txt-content">
                                        <span class="number">06</span>
                                        <b class="title">Average Rates</b>
                                        <p class="desc">Here we provide best quality sweets on average rates.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> --}}
@endsection