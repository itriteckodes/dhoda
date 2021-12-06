@extends('front.layout.index')
@section('title')
<title>PRODUCTS - Ameen Dhoda House</title>
<meta name="description" content="">

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')
<!-- HERO SECTION PART START -->
<div class="hero_section">
    <div class="png_img"><img class="img-fluid" src="img/leaf.png" alt="" /></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="herosection_content">
                    <h2 class="text-light">All Products</h2>
                    <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HERO SECTION PART END -->
<div class="full-bestSeller" id="product">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="section-title">Our Best Seller Product</h3>
            </div>
        </div>

        <div class="row mt-5">
            @foreach ($products as $product)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="{{asset($product->image)}}" alt="">
                    </div>
                    <div class="product-content mt-2">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="{{route('product.show',str_replace(' ', '_',$product->name))}}">{{$product->name}}</a></h3>
                            {{-- <span class="product-prev-price"></span> --}}
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
                               
                            </span><br>
                            <span class="product-price">PKR {{$product->price}}</span><br>
                            
                        </div>
                        <div class="buttons">
                            <button class="btn custom-btn position-bottom-right addcart-item" id="{{$product->id}}"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                               <a href="{{route('product.show',str_replace(' ', '_',$product->name))}}"><i class="icofont-eye"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $products->links() }}
            

            {{-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="img/product-2.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="productdetails.html">Orange</a></h3>
                            <span class="product-prev-price">$80 KG</span>
                            <span class="product-price">$78 KG</span>
                        </div>
                        <div class="buttons">
                            <span class="sold-out-tag position-top-right">Sold out</span>
                            <button class="btn custom-btn position-bottom-right"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                                <i class="icofont-eye"></i>
                            </div>

                            <div class="rounded-icon">
                                <i class="icofont-heart-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="img/product-3.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="productdetails.html">Apple</a></h3>
                            <span class="product-prev-price">$80 KG</span>
                            <span class="product-price">$78 KG</span>
                        </div>
                        <div class="buttons">
                            <button class="btn custom-btn position-bottom-right"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                                <i class="icofont-eye"></i>
                            </div>

                            <div class="rounded-icon">
                                <i class="icofont-heart-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="img/product-4.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="productdetails.html">Dragon</a></h3>
                            <span class="product-prev-price">$80 KG</span>
                            <span class="product-price">$78 KG</span>
                        </div>
                        <div class="buttons">
                            <span class="sold-out-tag position-top-right">Sold out</span>
                            <button class="btn custom-btn position-bottom-right"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                                <i class="icofont-eye"></i>
                            </div>

                            <div class="rounded-icon">
                                <i class="icofont-heart-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="img/product-5.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="productdetails.html">Onion</a></h3>
                            <span class="product-prev-price">$80 KG</span>
                            <span class="product-price">$78 KG</span>
                        </div>
                        <div class="buttons">
                            <button class="btn custom-btn position-bottom-right"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                                <i class="icofont-eye"></i>
                            </div>

                            <div class="rounded-icon">
                                <i class="icofont-heart-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="img/product-6.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="productdetails.html">Masrom</a></h3>
                            <span class="product-prev-price">$80 KG</span>
                            <span class="product-price">$78 KG</span>
                        </div>
                        <div class="buttons">
                            <button class="btn custom-btn position-bottom-right"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                                <i class="icofont-eye"></i>
                            </div>

                            <div class="rounded-icon">
                                <i class="icofont-heart-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="img/product-7.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="productdetails.html">Carrot</a></h3>
                            <span class="product-prev-price">$80 KG</span>
                            <span class="product-price">$78 KG</span>
                        </div>
                        <div class="buttons">
                            <span class="sold-out-tag position-top-right">Sold out</span>
                            <button class="btn custom-btn position-bottom-right"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                                <i class="icofont-eye"></i>
                            </div>

                            <div class="rounded-icon">
                                <i class="icofont-heart-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="img/product-8.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="productdetails.html">Tomatoes</a></h3>
                            <span class="product-prev-price">$80 KG</span>
                            <span class="product-price">$78 KG</span>
                        </div>
                        <div class="buttons">
                            <button class="btn custom-btn position-bottom-right"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                                <i class="icofont-eye"></i>
                            </div>

                            <div class="rounded-icon">
                                <i class="icofont-heart-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

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