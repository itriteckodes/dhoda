@extends('front.layout.index')
@section('title')
<title>About Us - Amin Dhoda House</title>
<meta name="description" content="amin dhodha house best dhodha and sweets">

<!--Keywords -->
<meta name="keywords" content="dhoda, sohan halwa, amindhodha, Amin dhodha house, patisa, chana burfi, moti chor, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="amindhodha" />
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
                    <h2 class="text-light">About Us</h2>
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
                    <h3>We are Providing Services Since 1935 With Proud.</h3>
                    <div class="about-details">
                        <p>{!! $information->about !!}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection