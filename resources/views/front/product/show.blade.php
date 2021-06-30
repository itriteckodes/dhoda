@extends('front.layout.index')
@section('title')
    <title>{{ $product->name }} - Amin Dhoda House</title>
    <meta name="description" content="{{$product->description}}">

    <!--Keywords -->
    <meta name="keywords"
        content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
    <meta name="author" content="GoldEyes" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')
    <!--Hero Section-->
    <!-- HERO SECTION PART START -->
    <div class="hero_section">
        <div class="png_img"><img class="w-100 img-fluid" src="img/leaf.png" alt="" /></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="herosection_content">
                        <h2 class="text-light">Product Details</h2>
                        <a href="{{ url('/') }}" class="btn border-radius-0 border-transparent">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION PART END-->

    <!-- PRODUCT DETAILS PART START -->
    <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="product_img d-flex">
                        <div class="small_img">
                            <a href="#">
                            <img class="w-100 smallImage im0" src="{{ asset($product->image) }}" alt="relatedf image">
                            </a>
                            @foreach ($product->images as $key => $ProductImage)
                            <a href="#">
                             <img class="w-100 smallImage im{{$key+1}}" src="{{ asset($ProductImage->image) }}" alt="related image">
                            </a>
                             @endforeach
                        </div>
                        <div class="big_img">
                           <a href="{{ asset($product->image) }}"><img src="{{ asset($product->image) }}" class="w-100 img-fluid largeImage" alt="product image" /></a> 
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="producudetails_content">
                        <h3>{{ $product->name }}</h3>

                        <strong>PKR {{ $product->price }} </strong>
                        <p>{!! $product->detail !!}</p>
                        <div class="add_to_cart d-flex">
                            <a href="#" class="btn border-transparent cart-add" id="{{ $product->id }}">Add to
                                cart</a>
                            <a href="#" class="btn border-transparent ml-5 checkout" id="{{ $product->id }}">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS PART END -->
    <!-- BEST SELLER PART START -->
    <div class="full-bestSeller">
        <div class="container">
            <div class="row">
                <div class="col-12 text-left">
                    <h3 class="section-title">Related Products</h3>
                </div>
            </div>

            <div class="row mt-5 product-slider">
                @foreach (App\Models\Product::where('category_id', $product->category->id)->get() as $category_product)
                    @if ($category_product->id == $product->id)
                    @else
                        <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-12">
                            <div class="product">
                                <div class="product-img">
                                    <img class="w-100" src="{{ asset($category_product->image) }}" alt="">
                                </div>
                                <div class="product-content">
                                    <div class="product-details position-bottom-left">
                                        <h3 class="product-name"><a
                                                href="{{ route('product.show', str_replace(' ', '_', $category_product->name)) }}">{{ $category_product->name }}</a>
                                        </h3>
                                        <span class="product-price">{{ $category_product->price }}</span>
                                    </div>
                                    <div class="buttons">
                                        <button class="btn custom-btn position-bottom-right addcart-item"
                                            id="{{ $category_product->id }}"> Add to cart</button>
                                    </div>

                                    <div class="icons position-center">
                                        <div class="rounded-icon">
                                            <a
                                                href="{{ route('product.show', str_replace(' ', '_', $category_product->name)) }}"><i
                                                    class="icofont-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('body').on('click', '.cart-add', function(e) {
                e.preventDefault();
                let productId = $(this).attr('id');
                $.ajax({
                    url: "{{ url('cart/add') }}",
                    method: "POST",
                    data: {
                        id: productId,
                    },
                    success: function(response) {
                        if (response.error) {
                            toastr.warning('Item Out of Stock');
                        } else {
                            toastr.success('Item Added to Cart');
                            $('#cartValue').html(response.qty);
                        }
                    }
                });
            });

            $('body').on('click', '.checkout', function(e) {
                e.preventDefault();
                let productId = $(this).attr('id');
                $.ajax({
                    url: "{{ url('cart/add') }}",
                    method: "POST",
                    data: {
                        id: productId,
                    },
                    success: function(response) {
                        if (response.error) {
                            toastr.warning('Item Out of Stock');
                        } else {
                            toastr.success('Item Added to Cart');
                            $('#cartValue').html(response.qty);
                            window.location.href = "{{ route('checkout') }}";
                        }
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.addcart-item').click(function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ url('cart/add') }}",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        if (response.error) {
                            toastr.warning('Item Out of Stock');
                        } else {
                            toastr.success('Item Added to Cart');
                            $('#cartValue').html(response.qty);
                        }
                    }
                });
            });
            $('.smallImage').on('click',function(e){
                e.preventDefault();
                let smallsrc = $(this).attr('src');
                let largesrc = $('.largeImage').attr('src');
                $('.largeImage').attr('src',smallsrc);
            });
            let dat =  {!!json_encode($product->images) !!};
            let i=0;
          console.log(dat);
            setInterval(function() {
                if(i>dat.length){
                    i=0;
                }
             $('.im'+i).click();  
                i=i+1;
             }, 3000); 
        });
    </script>

@endsection
