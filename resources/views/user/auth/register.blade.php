@extends('front.layout.index')
@section('title')
    <title>User Registration - Ameen Dhoda House</title>
    <meta name="description" content="">
    <!--Keywords -->
    <meta name="keywords"
        content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
    <meta name="author" content="GoldEyes" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')
<!-- HERO SECTION PART START -->
<div class="hero_section">
    <div class="png_img"><img class="w-100 img-fluid" src="img/leaf.png" alt="" /></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="herosection_content">
                    <h2>Register</h2>
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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="billing_content">
                    <div class=" text-uppercase">
                        <h2>Register Here</h2>
                        <div class="billing_form">
                            <form action="{{route('user.register')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row ">
                                    <div class="col-md-12  mt-3">
                                        <input type="text" class="form-control " name="name"  placeholder="Name*" required/>
                                    </div>
                                    <div class="col-md-12  mt-3">
                                        <input type="email" class="form-control border-radius-0" id="checkout_email" name="email"  placeholder="Email*" required/>
                                    </div>

                                    <div class="col-md-12  mt-3">
                                        <input type="password" class="form-control border-radius-0" id="checkout_phonenumber" name="password"  placeholder="Enter password" required/>
                                    </div>

                                    <div class="col-md-12  mt-3">
                                        <input type="number" class="form-control border-radius-0" id="checkout_country" name="phone"  placeholder="Enter phone" required />
                                    </div>

                                    {{-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="text" class="form-control border-radius-0" id="checkout_state" name="district"  placeholder="Address" />
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="text" class="form-control border-radius-0" id="checkout_address" name="city" placeholder="City:" />
                                    </div> --}}

                                    <div class="col-md-12  mt-3">
                                        <input type="text" class="form-control border-radius-0" id="checkout_address" name="address"  placeholder="Address:" required />
                                    </div>

                                    <div class="col-md-12  mt-3">
                                        <input type="file" class="form-control border-radius-0" id="checkout_postalcode" name="image" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="chechout_btn text-left mt-3">
                                    <button type="submit" class="btn border-radius-0 border-transparent">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection