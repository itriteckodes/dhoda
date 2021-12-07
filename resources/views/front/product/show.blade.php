@extends('front.layout.index')
@section('title')
    <title>{{ $product->name }} - Amin Dhoda House</title>
    <meta name="description" content="{{ $product->description }}">

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
                                    <img class="w-100 smallImage im{{ $key + 1 }}"
                                        src="{{ asset($ProductImage->image) }}" alt="related image">
                                </a>
                            @endforeach
                        </div>
                        <div class="big_img">
                            <a href="{{ asset($product->image) }}"><img src="{{ asset($product->image) }}"
                                    class="w-100 img-fluid largeImage" alt="product image" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="producudetails_content">
                        <h3>{{ $product->name }}</h3>
                        <strong>PKR {{ $product->price }} </strong><br>
                        @for ($i = 0; $i < $avg; $i++)
                        <i class="icofont icofont-star"></i>
                        @endfor{{$avg}}/5
                        @if ($product->stock==0)
                        <small class="badge badge-danger" style="margin-left: 30px">Out of stock</small>
                        @else
                        <small class="badge badge-success" style="margin-left: 30px">Available</small>
                        @endif
                        
                        <p>{!! $product->detail !!}</p>
                        
                        <div class="add_to_cart d-flex">
                            <a href="#" class="btn border-transparent cart-add" id="{{ $product->id }}">Add to
                                cart</a>
                            <a href="#" class="btn border-transparent ml-5 checkout" id="{{ $product->id }}">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <hr style="border: 1px solid grey; width:100%">
                <div class="blog_details">

                    <div class="blog_form mt-4">
                        <strong>Give Review</strong>
                        <form action="{{route('review.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" id="" value="{{ $product->id }}">
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <input type="text" class="form-control border-radius-0" id="name" name="name" value=""
                                        placeholder="Name*:" required />
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <input type="text" class="form-control border-radius-0" id="city" name="city" value=""
                                        placeholder="City*:" required />
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <input type="email" class="form-control border-radius-0" id="email" name="email"
                                        value="" placeholder="Email:[optional]" />
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <select name="rating" id="" class="form-control border-radius-0" required>
                                        <option value="" selected disabled>Select Ratting*</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                    <textarea class="form-control border-radius-0" id="message:" name="message" rows="3"
                                        placeholder="Message*:" required></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn border-radius-0 mt-4">Submit Comment</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <div class="details_comment container  mt-5">
                <strong>Reviews({{count($product->reviews)}})</strong>
                @php
                    $reviews=App\Models\Review::where('product_id',$product->id)->paginate(20);
                @endphp
                @foreach ($reviews as $review)

                    <div class="card row col-md-7 col-sm-7 mt-3 ">
                        <div class="col-md-12 col-sm-12 text-dark">
                            <strong>{{ $review->name }} <br /></strong>
                            <p><b>City:</b> {{ $review->city }} <br /></p>
                            <span><b>Dated:</b> {{ Carbon\Carbon::parse($review->created_at)->format('d M,Y') }}</span><br>
                            <span class="text-warning"><b>Ratting:</b>
                                @for ($i = 0; $i < $review->rating; $i++)
                                    <i class="icofont icofont-star"></i>
                                @endfor
                                {{ $review->rating }}/5
                            </span>
                        </div>
                        <div class="col-md-12 col-sm-12 ">

                            <p>
                                <b>Message: </b> {{ $review->message }}
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class=" details_comment container mt-3">
                    {{ $reviews->links() }}
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
                            
                            Swal.fire("Product out of stock");
                        } else {
                            Swal.fire("Product Added To Cart"); 
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
                            Swal.fire("Product Added to Cart"); 
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
                            Swal.fire("Product Added to Cart"); 
                            $('#cartValue').html(response.qty);
                        }
                    }
                });
            });
            $('.smallImage').on('click', function(e) {
                e.preventDefault();
                let smallsrc = $(this).attr('src');
                let largesrc = $('.largeImage').attr('src');
                $('.largeImage').attr('src', smallsrc);
            });
            let dat = {!! json_encode($product->images) !!};
            let i = 0;
            console.log(dat);
            setInterval(function() {
                if (i > dat.length) {
                    i = 0;
                }
                $('.im' + i).click();
                i = i + 1;
            }, 3000);
        });
    </script>

@endsection
