@extends('front.layout.index')
@section('title')
    <title>CONTACT US - Ameen Dhoda House</title>
    <meta name="description" content="">

    <!--Keywords -->
    <meta name="keywords"
        content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
    <meta name="author" content="GoldEyes" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')
<div class="hero_section">
    <div class="png_img"><img class="w-100 img-fluid" src="img/leaf.png" alt="" /></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="herosection_content">
                    <h2 class="text-light">Contact Us</h2>
                    <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HERO SECTION PART END -->

<!-- ORDER PART STRAT -->
<div class="order_part">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer_widget">
                  
                    <h2>Our Contact!</h2>
                    <br><br>
                    <ul class="footer_widget_content" >
                        <li><span>Phone: &nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: black">{{$information->phone}}</span></li>
                        <li><span>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: black">{{$information->email}}</span></li>
                        <li><span>Address: &nbsp;</span> <span style="color: black">{{$information->address}}</span></li>
                    </ul>

                    <div class="footer_social">
                        <ul class="footer_social_icons">
                            <li><a href="{{$information->pt}}"><i class="icofont-linkedin"></i></a></li>
								<li><a href="{{$information->fb}}"><i class="icofont-facebook"></i></a></li>
								<li><a href="{{$information->twitter}}"><i class="icofont-twitter"></i></a></li>
								<li><a href="{{$information->insta}}"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="billing_content">
                    <div class=" text-uppercase">
                        <h2>Contact Us Here</h2>
                        <div class="billing_form">
                            <form action="{{route('message.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row ">
                                    <div class="col-md-12  mt-3">
                                        <input type="text" class="form-control " name="name"  placeholder="Name*" required/>
                                    </div>
                                    <div class="col-md-12  mt-3">
                                        <input type="email" class="form-control border-radius-0" id="checkout_email" name="email"  placeholder="Email*" required/>
                                    </div>

                                    <div class="col-md-12  mt-3">
                                        <input type="text" class="form-control border-radius-0" id="checkout_phonenumber" name="subject"  placeholder="Enter subject" required/>
                                    </div>

                                    <div class="col-md-12  mt-3">
                                        <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Enter message" required></textarea>
                                    </div>
                                </div>
                                <div class="chechout_btn text-left mt-3">
                                    <button type="submit" class="btn border-radius-0 border-transparent">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- <!--Hero Section-->
<div class="hero-section hero-background" style="background-image:url('front/assets/images/hero_bg.jpg')!important;">
    <h1 class="page-title">Contact Us</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{route('home.index')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="current-page">Contact Us</span></li>
        </ul>
    </nav>
</div>
<div class="page-contain contact-us">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="wrap-map biolife-wrap-map" id="map-block">
            <iframe
                    width="1920"
                    height="591"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d422.5407762939713!2d72.66535161519937!3d32.08746818313113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392177a977dbe6df%3A0x985740dfe96e65ac!2sUrdu%20Bazaar%2C%202%20Block%2C%20Sargodha%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1623651641021!5m2!1sen!2s" 
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0">
            </iframe>
        </div>

        <div class="container">

            <div class="row">
                <!--Contact info-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                        <h4 class="box-title">Our Contact</h4>
                        <ul class="addr-info">
                            <li>
                                <div class="if-item">
                                    <b class="tie">Addess:</b>
                                    <p class="dsc">{{$information->address}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="if-item">
                                    <b class="tie">Phone:</b>
                                    <p class="dsc">{{$information->phone}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="if-item">
                                    <b class="tie">Email:</b>
                                    <p class="dsc">{{$information->email}}</p>
                                </div>
                            </li>
                        </ul>
                        <div class="biolife-social inline">
                            <ul class="socials">
                                <li><a href="{{$information->twitter}}" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{$information->facebook}}" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{$information->linkedin}}" title="linkedin" class="socail-btn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="{{$information->instagram}}" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Contact form-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form-container sm-margin-top-112px">
                        <form action="{{route('message.store')}}" method="post" name="frm-contact" >
                            @csrf
                            <p class="form-row">
                                <input type="text" name="name" value="" placeholder="Your Name" class="txt-input" required>
                            </p>
                            <p class="form-row">
                                <input type="email" name="email" value="" placeholder="Email Address" class="txt-input" required>
                            </p>
                            <p class="form-row">
                                <input type="text" name="subject" value="" placeholder="Subject" class="txt-input" required>
                            </p>
                            <p class="form-row">
                                <textarea name="message" id="mes-1" cols="30" rows="9" placeholder="Leave Message" required></textarea>
                            </p>
                            <p class="form-row">
                                <button class="btn btn-submit" type="submit">Send Message</button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> --}}
@endsection
