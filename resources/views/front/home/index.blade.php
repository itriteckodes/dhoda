@extends('front.layout.index')
@section('title')
<title> HOME PAGE - AMIN DHODA HOUSE</title>
@endsection
@section('body')

<div class="full-banner">
    <div class="container">
        <div class="row banner-slider">
            <div class="col-md-12">
                <div class="banner-content">
                    <h1>100% <span style="color: #b5651d">Pure</span></h1>
                    <h3 style="background-color: #b5651d">Fresh Sweets </h3>
                    <p class="text-light">Here we provide best quality and fresh sweets
                    </p>
                    <a href="{{route('product.index')}}" class="btn ">ALL PRoducts <i class="icofont-bubble-right"></i></a>
                </div>
            </div>

            <div class="col-md-12">
                <div class="banner-content">
                    <h1>100% <span style="color: #b5651d">Pure</span></h1>
                    <h3 style="background-color: #b5651d">Fresh Sweet</h3>
                    <p class="text-light">Here we provide best quality and fresh sweets
                    </p>
                    <a href="{{route('product.index')}}" class="btn">ALL PRoducts <i class="icofont-bubble-right"></i></a>
                </div>
            </div>


            <div class="col-md-12">
                <div class="banner-content">
                    <h1>100% <span style="color: #b5651d">Pure</span></h1>
                    <h3 style="background-color: #b5651d">Fresh Sweet</h3>
                    <p class="text-light">Here we provide best quality and fresh sweets
                    </p>
                    <a href="{{route('product.index')}}" class="btn" >ALL PRoducts <i class="icofont-bubble-right" ></i></a>
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
            <img src="{{asset('front/img/logo.png')}}"  style="max-width: 30%" alt="Amin dhodha house logo">
        </div>
    </div>
</div>
<!-- BEST SELLER PART START -->
<div class="full-bestSeller" id="product">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="section-title">Our Best Seller Product</h3>
                <p class="section-subtitle">We here at Amin Dhodha House provide best and the most delicious sweets from all categories in their pure and original taste</p>
            </div>
        </div>

        <div class="row mt-5">
            @foreach($products as $product)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="product">
                        <div class="product-img">
                            <img  src="{{asset($product->image)}}" alt=" {{$product->name}} image">
                        </div>
                        <div class="product-content mt-2">
                            <div class="product-details position-bottom-left">
                                <h3 class="product-name"><a href="{{route('product.show',str_replace(' ', '_',$product->name))}}">{{$product->name}}</a></h3>
                                {{-- <span class="product-prev-price">$80 KG</span> --}}
                                <span class="text-warning">
                                    @if ($product->avg==0)
                                    @for ($i = 0; $i < 5; $i++)
                                    <i class="icofont icofont-star"></i>
                                   @endfor
                                  5/5
                                    @else
                                    @for ($i = 0; $i < $product->avg; $i++)
                                    <i class="icofont icofont-star"></i>
                                @endfor
                                {{ $product->avg }}/5
                                    @endif
                                      
                                   </span> 
                                   @if ($product->stock==0)
                                   <small class="badge badge-danger" style="margin-left: 30px">Out of stock</small>
                                   @else
                                   <small class="badge badge-success" style="margin-left: 30px">Available</small>
                                   @endif  <br>
                                <span class="product-price">PKR {{$product->price}}</span>
                            </div>
                            <div class="buttons mt-5">
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
                    <h2>{{$information->banner_text}}</h2>
                    <a href="{{route('product.index')}}" class="btn">Explore more <i class="icofont-bubble-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- OFFER PART END -->

<!-- PARTNERS PART START -->
@if(count(App\Models\Gallery::all())>0)
<div class="full-partners">
    <div class="container">
        {{-- @if(count(App\Models\Gallery::all())>0) --}}
        <h3 class="section-title my-5 text-center">Amin Dhodha House Gallery</h3>
        <div class="row partner-slider mt-3">
            @foreach (App\Models\Gallery::all() as $gallery)
            <div class="col-md-12 ">
                <div class="partner-img text-center py-3">
                   <a href="{{ asset($gallery->image) }}"><img class="w-100 p-2 img-thumbnail shadow" src="{{ asset($gallery->image) }}" alt=""></a> 
                </div>
            </div>
            @endforeach
        </div>
        {{-- @endif --}}
    </div>
</div>
@endif
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
                        <img class="w-100" src="{{ asset('front/img/testimonial-1.png') }}" alt="Happy Customer Image">
                    </div>

                    <div class="img">
                        <img class="w-100" src="{{ asset('front/img/testimonial-2.png') }}" alt="Happy Customer Image">
                    </div>

                    <div class="img">
                        <img class="w-100" src="{{ asset('front/img/testimonial-3.png') }}" alt="Happy Customer Image">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="testimonial-text">
                    <div class="testimonial-info">
                        <p>??? Nowadays, there are many shops nAming Amin Dhodha House in Khushab and claiming to be original one.
                             Everyone is making their own version of Dhodha using substandard ingredients.
                              People have complained about the healthy measures..</p>
                        <h3>Mr. Furqan</h3>
                        <h4>Customer</h4>
                    </div>

                    <div class="testimonial-info">
                        <p>??? Nowadays, there are many shops nAming Amin Dhodha House in Khushab and claiming to be original one.
                             Everyone is making their own version of Dhodha using substandard ingredients.
                             People have complained about the healthy measures.</p>
                        <h3>Mr. Hussain</h3>
                        <h4>Customer</h4>
                    </div>

                    <div class="testimonial-info">
                        <p>??? Nowadays, there are many shops nAming Amin Dhodha House in Khushab and claiming to be original one.
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
{{-- <script>
    document.querySelector(".first").addEventListener('click', function(){
    Swal.fire("Order Placed Successfully");
    });
</script> --}}
    <script>
      $(document).ready(function(){
        var a = {!! json_encode(old('alert')) !!}
        if(a=='yes'){
            Swal.fire("Order Placed Successfully");
        }
        
        let stock=$(this).attr('stock');
            if(stock==0){
                Swal.fire("Product out of stock");
            }else{
                $('.addcart-item').click(function(e){   
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url : "{{url('cart/add')}}",
                method : "POST",
                data : {id :id},
                success:function(response){
                    if(response.error){
                        Swal.fire("Product out of stock");
                    } else {
                        Swal.fire("Product Added to Cart");
                        $('#cartValue').html(response.qty);
                    }
                }
            });
        }); 
            }
        
        
      });
    </script>
@endsection