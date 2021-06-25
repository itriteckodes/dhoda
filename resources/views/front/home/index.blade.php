@extends('front.layout.index')
@section('title')
<title> HOME - AMEEN DHODA HOUSE</title>
@endsection
@section('body')

<div class="full-banner">
    <div class="container">
        <div class="row banner-slider">
            <div class="col-md-12">
                <div class="banner-content">
                    <h1>100% <span>Pure</span></h1>
                    <h3>Fresh Sweets </h3>
                    <p class="text-light">Here we provide best quality and fresh sweets
                    </p>
                    <a href="{{route('product.index')}}" class="btn ">ALL PRoducts <i class="icofont-bubble-right"></i></a>
                </div>
            </div>

            <div class="col-md-12">
                <div class="banner-content">
                    <h1>100% <span>Pure</span></h1>
                    <h3>Fresh Sweet</h3>
                    <p class="text-light">Here we provide best quality and fresh sweets
                    </p>
                    <a href="{{route('product.index')}}" class="btn">ALL PRoducts <i class="icofont-bubble-right"></i></a>
                </div>
            </div>


            <div class="col-md-12">
                <div class="banner-content">
                    <h1>100% <span>Pure</span></h1>
                    <h3>Fresh Sweet</h3>
                    <p class="text-light">Here we provide best quality and fresh sweets
                    </p>
                    <a href="{{route('product.index')}}" class="btn">ALL PRoducts <i class="icofont-bubble-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER PART END -->

<!-- FEATURES PART START -->
<div class="container">
    <div class="row my-2">
        <div class="col-12 text-center">
            <img src="{{asset('front/img/logo.png')}}" height="" width="" style="max-width: 30%" alt="">
        </div>
    </div>
</div>
{{-- <div class="full-features">
    <div class="container">
        <div class="row slider">
            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="features-box text-center">
                    <div class="features-icon-border">
                        <div class="features-icon">
                            <i class="icofont icofont-wheat"></i>
                        </div>
                    </div>
                    <div class="features-text">
                        <h3>Healthy Food</h3>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="features-box text-center">
                    <div class="features-icon-border">
                        <div class="features-icon">
                            <i class="icofont icofont-truck-loaded"></i>
                        </div>
                    </div>
                    <div class="features-text">
                        <h3>Free Shipping</h3>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="features-box text-center">
                    <div class="features-icon-border">
                        <div class="features-icon">
                            <i class="icofont icofont-ui-chat"></i>
                        </div>
                    </div>
                    <div class="features-text">
                        <h3>24/07 Support</h3>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="features-box text-center">
                    <div class="features-icon-border">
                        <div class="features-icon">
                            <i class="icofont icofont-rooster"></i>
                        </div>
                    </div>
                    <div class="features-text">
                        <h3>From our farm</h3>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="features-box text-center">
                    <div class="features-icon-border">
                        <div class="features-icon">
                            <i class="icofont icofont-wheat"></i>
                        </div>
                    </div>
                    <div class="features-text">
                        <h3>Healthy Food</h3>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="features-box text-center">
                    <div class="features-icon-border">
                        <div class="features-icon">
                            <i class="icofont icofont-truck-loaded"></i>
                        </div>
                    </div>
                    <div class="features-text">
                        <h3>Free Shipping</h3>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="features-box text-center">
                    <div class="features-icon-border">
                        <div class="features-icon">
                            <i class="icofont icofont-ui-chat"></i>
                        </div>
                    </div>
                    <div class="features-text">
                        <h3>24/07 Support</h3>
                    </div>
                </div>
            </div> 

         <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="features-box text-center">
                    <div class="features-icon-border">
                        <div class="features-icon">
                            <i class="icofont icofont-rooster"></i>
                        </div>
                    </div>
                    <div class="features-text">
                        <h3>From our farm</h3>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div> --}}
<!-- FEATURES PART END -->

{{-- <!-- ABOUT US PART START -->
<div class="full-about" id="full-about">
    <div class="container">
        <div class="row">
            <div class="about-title">
                <h2>About us</h2>
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <h3>We Providing Services Since 1841 With Proud.</h3>
                    <div class="about-details">
                        <p>The readable content off a page when looking layout using Lorem Ipsum is that it has.</p>
                        <p>It is a long established fact that a reader will be distracted the readable content off a
                            page when looking at its layout using Lorem Ipsum is that it has.</p>
                    </div>

                    <div class="about-icon-text align-items-center">
                        <div class="abt-icon">
                            <i class="icofont-fruits"></i>
                        </div>
                        <div class="abt-text">
                            <h2>Fresh Look And <span>100% Organic</span> Farm Fresh Produce Right.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US PART END --> --}}

<!-- BEST SELLER PART START -->
<div class="full-bestSeller" id="product">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="section-title">Our Best Seller Product</h3>
                <p class="section-subtitle">We here at Ameen Dhodha House provide best and the most delicious sweets from all categories in their pure and original taste</p>
            </div>
        </div>

        <div class="row mt-5">
            @foreach(App\Models\Product::all()->take(12) as $product)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product">
                        <div class="product-img">
                            <img class="w-100" src="{{asset($product->image)}}" alt="">
                        </div>
                        <div class="product-content">
                            <div class="product-details position-bottom-left">
                                <h3 class="product-name"><a href="{{route('product.show',str_replace(' ', '_',$product->name))}}">{{$product->name}}</a></h3>
                                {{-- <span class="product-prev-price">$80 KG</span> --}}
                                <span class="product-price">PKR {{$product->price}}</span>
                            </div>
                            <div class="buttons">
                                <button class="btn custom-btn position-bottom-right add-to-cart-btn addcart-item" id="{{$product->id}}"> Add to cart</button>
                            </div>

                            <div class="icons position-center">
                                <a href="{{route('product.show',str_replace(' ', '_',$product->name))}}">
                                <div class="rounded-icon">
                                    <i class="icofont-eye"></i>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container text-center ">
                <a href="{{route('product.index')}}" class="btn">Show More <i class="icofont-bubble-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- BEST SELLER PART END -->

<!-- OFFER PART START -->
<div class="full-offer">
    <div class="bg-1"></div>
    <div class="bg-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="offer-content">
                    <h3 class="text-white">Daily Essentials</h3>
                    <h2>Sale 25% Off <br> All Sweet Products</h2>
                    <a href="{{route('product.index')}}" class="btn">Explore more <i class="icofont-bubble-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- OFFER PART END -->

<!-- PARTNERS PART START -->
<div class="full-partners">
    <div class="container">
        {{-- @if(count(App\Models\Gallery::all())>0) --}}
        <h3 class="section-title my-5 text-center">Ameen Dhodha House Gallery</h3>
        <div class="row partner-slider mt-3">
            @foreach (App\Models\Gallery::all() as $gallery)
            <div class="col-md-12 ">
                <div class="partner-img text-center py-3">
                    <img class="w-100 p-2 img-thumbnail shadow" src="{{ asset($gallery->image) }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
        {{-- @endif --}}
    </div>
</div>
<!-- PARTNERS PART END -->

<!-- TESTIMONIAL PART START -->
<div class="full-testimonial" id="full-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="section-title">Our Happy Customers</h3>
                <p class="section-subtitle">Here we deal with customers to make them happy with our services and quality of food. Customer satifaction is more important for us</p>
            </div>
        </div>

        <div class="form-row align-items-center mt-5">
            <div class="col-md-4">
                <div class="testimonial-img text-center">
                    <div class="img">
                        <img class="w-100" src="{{ asset('front/img/testimonial-1.png') }}" alt="">
                    </div>

                    <div class="img">
                        <img class="w-100" src="{{ asset('front/img/testimonial-2.png') }}" alt="">
                    </div>

                    <div class="img">
                        <img class="w-100" src="{{ asset('front/img/testimonial-3.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="testimonial-text">
                    <div class="testimonial-info">
                        <p>“ Nowadays, there are many shops nAmeeng Ameen Dhodha House in Khushab and claiming to be original one.
                             Everyone is making their own version of Dhodha using substandard ingredients.
                              People have complained about the healthy measures..</p>
                        <h3>Mr. Furqan</h3>
                        <h4>Customer</h4>
                    </div>

                    <div class="testimonial-info">
                        <p>“ Nowadays, there are many shops nAmeeng Ameen Dhodha House in Khushab and claiming to be original one.
                             Everyone is making their own version of Dhodha using substandard ingredients.
                             People have complained about the healthy measures.</p>
                        <h3>Mr. Hussain</h3>
                        <h4>Customer</h4>
                    </div>

                    <div class="testimonial-info">
                        <p>“ Nowadays, there are many shops nAmeeng Ameen Dhodha House in Khushab and claiming to be original one.
                             Everyone is making their own version of Dhodha using substandard ingredients.
                             People have complained about the healthy measures.</p>
                        <h3>Mr. Ali</h3>
                        <h4>Customer</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIAL PART END -->

<!-- CONTACT NOW PART END -->
<div class="contact-now">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="contact-quote">If you Need Best quality sweets!</h3>
                <a href="{{route('contact.index')}}" class="btn">Contact Now <i class="icofont-bubble-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT NOW PART END -->

<div class="full-latest-news">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="section-title">Latest Blog</h3>
                <p class="section-subtitle">The passage experienced a surge in popularity during the 1960s when again
                    during the 90s as desktop publishers</p>
            </div>
        </div>

        <div class="row mt-5">
            @foreach(App\Models\Blog::all()->take(4) as $blog)
                <div class="col-md-6 mb-4">
                    <div class="latest-news-grid">
                        <div class="news-img">
                            <img class="w-100" src="{{asset($blog->image)}}" alt="">
                        </div>

                        <div class="news-content">
                            <div class="date-react">
                                <span class="date">{{Carbon\Carbon::parse($blog->created_at)->format('d-M-Y')}}</span>
                                {{-- <span class="react"><i class="icofont-ui-love"></i> 56</span> --}}
                                <span class="react"><i class="icofont-speech-comments"></i>{{$blog->comments->count()}}</span>
                            </div>
                            <div class="news-title">
                                <a href="{{route('blog.show',str_replace(' ', '_',$blog->title))}}">
                                    <h4>{{$blog->title}}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

           
        </div>


    </div>
</div>

@endsection

@section('script')
    <script>
      $(document).ready(function(){
        $('.addcart-item').click(function(e){   
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url : "{{url('cart/add')}}",
                method : "POST",
                data : {id :id},
                success:function(response){
                    if(response.error){
                        toastr.warning('Item Out of Stock');  
                    } else {
                        toastr.success('Item Added to Cart');
                        $('#cartValue').html(response.qty);
                    }
                }
            });
        }); 
      });
    </script>
@endsection