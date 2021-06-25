<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from live.envalab.com/html/tazza/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 07:46:05 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	@yield('title')
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700;800&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
	<!-- icofont -->
	<link rel="stylesheet" href="{{ asset('front/css/icofont.min.css') }}" />
	<!-- Slick slider -->
	<link rel="stylesheet" href="{{ asset('front/css/slick.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/slick-theme.css') }}" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" />
	<!-- Style css-->
	<link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
	<!-- Responsive css-->
	<link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}" />
	<link rel="stylesheet" href="{{asset('toastr/toastr.min.css')}}">
</head>
<body>
	<!-- HEADER PART START -->
	<header id="full_nav" >
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand my-auto" href="{{url('/')}}" style="color: #F69743; font-family: 'Poppins', 'Sans-serif';font-size:14px">
						{{-- <img src="{{ asset('front/img/logo.png') }}" alt=""> --}}
						Ameen Dhodha House
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="icofont icofont-navigation-menu"></i>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mx-auto pl-5">
							<li class="nav-item active">
								<a class="nav-link" href="{{url('/')}}">Home</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="{{route('about.index')}}">About</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="{{route('product.index')}}">Product</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="{{route('blog.index')}}">Blog</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="{{route('contact.index')}}">Contact</a>
							</li>
							
							@if(Auth::guard('user')->user()!=null)
							<li><a href="{{ route('user.dashboard.index') }}" class="nav-link">Dashboard</a></li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('user.logout')}}">Logout</a>
							</li>
							@else
							<li class="nav-item">
								<a class="nav-link" href="{{route('auth.login')}}">Login/Register</a>
							</li>
							@endif
							@if(Auth::guard('admin')->user()!=null)
							<li><a href="{{ route('admin.dashboard.index') }}" class="nav-link">Dashboard</a></li>
							@endif

							{{-- <li class="nav-item dropdown">
								<span class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
									Pages
								</span>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="productdetails.html">Product Details</a>
									<a class="dropdown-item" href="blog.html">Blog</a>
									<a class="dropdown-item" href="blogdetails.html">Blog Details</a>
									<a class="dropdown-item" href="404-error.html">404-Error</a>
									<a class="dropdown-item" href="cartoverview.html">Cartoverview</a>
									<a class="dropdown-item" href="checkout.html">Checkout</a>
								</div>
							</li> --}}
						</ul>

						<div class="header-content">
							<div class="header_contact text-right">
								<span>Call Us!</span>
								<span class="phone_no"><a href="tel:{{$information->phone}}" class="text-white">{{$information->phone}}</a></span>
							</div>
							<div class="header_icon">
								<a href="{{route('cart')}}">
								<i class="icofont icofont-cart"></i>
								<span class="cart_no" id="cartValue">{{Session::has('cart')?App\Helpers\Cart::qty():0}}</span>
								</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>

    @yield('body')
	<!-- HEADER PART END -->



	<!-- FOOTER TOP PART START -->
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">
					<div class="footer_widget">
						<div class="footer_widget_title">
							<h2>Contact Us!</h2>
						</div>
						<ul class="footer_widget_content">
							<li><span>Phone: &nbsp;&nbsp;&nbsp;&nbsp;</span>{{$information->phone}}</li>
							<li><span>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>{{$information->email}}</li>
							<li><span>Address: &nbsp;</span> {{$information->address}}</li>
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

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">
					<div class="footer_widget">
						<div class="footer_widget_title">
							<h2>Customer support</h2>
						</div>
						<ul class="footer_widget_content">
							<li><i class="icofont-double-right"></i><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-double-right"></i><a href="{{route('contact.index')}}">Contact Us</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">
					<div class="footer_widget">
						<div class="footer_widget_title">
							<h2>quick links</h2>
						</div>
						<ul class="footer_widget_content">
							<li><i class="icofont-double-right"></i><a href="{{url('/')}}">Home</a></li>
							<li><i class="icofont-double-right"></i><a href="{{route('product.index')}}">Product</a></li>
							<li><i class="icofont-double-right"></i><a href="{{route('blog.index')}}">Blog</a></li>
							<li><i class="icofont-double-right"></i><a href="{{route('about.index')}}">About Us</a></li>
							<li><i class="icofont-double-right"></i><a href="{{route('contact.index')}}">Contact Us</a></li>
						</ul>
						{{-- <ul class="footer_widget_content">
							<li><i class="icofont-double-right"></i><a href="#">Terms & Conditions</a></li>
							<li><i class="icofont-double-right"></i><a href="{{route('contact.index')}}">Contact</a></li>
							<li><i class="icofont-double-right"></i><a href="#">Accessories</a></li>
							<li><i class="icofont-double-right"></i><a href="#">Term of use</a></li>
						</ul> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER TOP PART END -->

	<!-- FOOTER BOTTOM PART START -->
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-12">
					<div class="footer_txt text-center">
						<p><span>Ameen Dhodha House 2021 </span>  All Right Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER BOTTOM PART END -->

	<!-- jQuery -->
	<script src="{{ asset('front/js/jquery-3.2.1.min.js') }}"></script>
	<!-- Slick slider -->
	<script src="{{ asset('front/js/slick.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
	<!-- scripts -->
	<script src="{{ asset('front/js/scripts.js') }}"></script>
	<script>
		$(".banner-slider").slick({
			infinite: false,
			autoplay: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplaySpeed: 2000,
			arrows:false,
			dots: true,
		});

		$(".slider").slick({
			infinite: false,
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows:false,
			dots: true,

		  // the magic
		  responsive: [{
		  	breakpoint: 1500,
		  	settings: {
		  		slidesToShow: 4,
		  		infinite: true
		  	}

		  }, {

		  	breakpoint: 1201,
		  	settings: {
		  		slidesToShow: 3,
		  		dots: true
		  	}

		  }, {

		  	breakpoint: 991,
		  	settings: {
		  		slidesToShow: 2,
		  		dots: true
		  	}

		  }, {

		  	breakpoint: 600,
		  	settings: {
		  		slidesToShow: 1,
		  		dots: true
		  	}

		  }, {

		  	breakpoint: 300,
		  	settings: {
		  		slidesToShow: 1,
		  		dots: true
		  	},
		  }]
		});


		$(".partner-slider").slick({
		  // normal options...
		  infinite: false,
		  slidesToShow: 4,
		  slidesToScroll: 2,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  infinite: true,
		  arrows:true,

		  // the magic
		  responsive: [{

		  	breakpoint: 1500,
		  	settings: {
		  		slidesToShow: 4,
		  		infinite: true
		  	}

		  }, {

		  	breakpoint: 1201,
		  	settings: {
		  		slidesToShow: 4,
		  		dots: true
		  	}

		  }, {

		  	breakpoint: 991,
		  	settings: {
		  		slidesToShow: 2,
		  		dots: true,
		  		arrows:false,
		  	}

		  }, {
		  	breakpoint: 600,
		  	settings: {
		  		slidesToShow: 2,
		  		dots: true,
		  		arrows:false
		  	}

		  }]
		});



		$(".product-slider").slick({
		  // normal options...
		  infinite: false,
		  slidesToShow: 4,
		  slidesToScroll: 2,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  infinite: true,
		  arrows:true,

		  // the magic
		  responsive: [{

		  	breakpoint: 1024,
		  	settings: {
		  		slidesToShow: 3,
		  		infinite: true
		  	}

		  }, {

		  	breakpoint: 600,
		  	settings: {
		  		slidesToShow: 1,
		  		dots: true
		  	}

		  }, {

		  	breakpoint: 300,
		      settings: "unslick" // destroys slick

		  }]
		});

		//for testimonial
		$('.testimonial-img').slick({
			speed: 500,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 2000,
			slidesToShow: 1,
			slidesToScroll: 1,
			asNavFor: '.testimonial-text',
			centerMode: true,
			centerPadding: 0,
			responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerMode: true,
					focusOnSelect: true,
					centerPadding: 0,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerMode: true,
					focusOnSelect: true,
					centerPadding: 0,
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerMode: true,
					focusOnSelect: true,
					centerPadding: 0,
				}
			}
			]
		});



		$('.testimonial-text').slick({
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			infinite: true,
			arrows:true,
			centerPadding: 0,
			dots: false,
			speed: 1000,
			asNavFor: '.testimonial-img',
			prevArrow: '<i class="icofont-double-right"></i>',
			nextArrow: '<i class="icofont-double-left"></i>',

			responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
			]
		});
		
	</script>
	<script src="{{asset('toastr/toastr.min.js')}}"></script>
	@toastr_render
@yield('script')
	
</body>

<!-- Mirrored from live.envalab.com/html/tazza/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 07:48:25 GMT -->
</html>
