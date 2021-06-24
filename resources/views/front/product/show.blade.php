@extends('front.layout.index')
@section('title')
<title>{{$product->name}} - Ameen Dhoda House</title>
<meta name="description" content="">

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
                    <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
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
                    <div class="big_img">
                        <img src="{{asset($product->image)}}" class="w-100 img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="producudetails_content">
                    <h3>{{$product->name}}</h3>

                    <strong>PKR {{$product->price}} </strong>
                    <p>{!! $product->detail !!}</p>
                    <div class="add_to_cart d-flex">
                        {{-- <div class="quantity d-flex">
                                <div class="right_arrow">
                                    <button type="button" class="btn-down" productprice="{{ $product->price }}"
                        productId="{{ $product->id }}"><i class="icofont-arrow-down"></i></button>
                    </div>
                    <div class="quantity_num" id="productQty">1</div>
                    <div class="left_arrow">
                        <button type="button" class="btn-up" productprice="{{ $product->price }}"
                            productId="{{ $product->id }}"><i class="icofont-arrow-up"></i></button>
                    </div>
                </div> --}}
                <a href="cartoverview.html" class="btn border-transparent ml-5 cart-add" id="{{$product->id}}">Add to
                    cart</a>
                <a href="cartoverview.html" class="btn border-transparent ml-5 checkout" id="{{$product->id}}">Checkout
                    Now</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- PRODUCT DETAILS PART END -->

{{-- <!-- PRODUCT TABBER START -->
    <div class="product_tabber">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav_custom" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link-custom active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">DESCRIPTION</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link-custom" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">INFORMATION</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link-custom" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">REVIEW</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <p>
                                Fresh strawberries are very high in water, so their total carb content is very low fewer than 8 grams of carbs per 3.5 ounces (100 grams). The net digestible carb content is fewer than 6 grams in the same
                                serving size. Most of these berries’ carbs come from simple sugars such as glucose, fructose, and sucrose but they contan a decent amount of fiber. Strawberries have a glycemic index (GI) score of 40, which
                                is relatively low (4). This means that strawberries should not lead to big spikes in blood sugar levels and are considered safe for people with diabetes.
                            </p>
                            <p>
                                Fresh strawberries are very high in water, so their total carb content is very low fewer than 8 grams of carbs per 3.5 ounces (100 grams). The net digestible carb content is fewer than 6 grams in the same
                                serving size. Most of these berries’ carbs come from simple sugars such as glucose, fructose, and sucrose but they contan a decent amount of fiber. Strawberries have a glycemic index (GI) score of 40, which
                                is relatively low (4). This means that strawberries should not lead to big spikes in blood sugar levels and are considered safe for people with diabetes.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <p>
                                Fresh strawberries are very high in water, so their total carb content is very low fewer than 8 grams of carbs per 3.5 ounces (100 grams). The net digestible carb content is fewer than 6 grams in the same
                                serving size. Most of these berries’ carbs come from simple sugars such as glucose, fructose, and sucrose but they contan a decent amount of fiber. Strawberries have a glycemic index (GI) score of 40, which
                                is relatively low (4). This means that strawberries should not lead to big spikes in blood sugar levels and are considered safe for people with diabetes.
                            </p>
                            <p>
                                Fresh strawberries are very high in water, so their total carb content is very low fewer than 8 grams of carbs per 3.5 ounces (100 grams). The net digestible carb content is fewer than 6 grams in the same
                                serving size. Most of these berries’ carbs come from simple sugars such as glucose, fructose, and sucrose but they contan a decent amount of fiber. Strawberries have a glycemic index (GI) score of 40, which
                                is relatively low (4). This means that strawberries should not lead to big spikes in blood sugar levels and are considered safe for people with diabetes.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <p>
                                Fresh strawberries are very high in water, so their total carb content is very low fewer than 8 grams of carbs per 3.5 ounces (100 grams). The net digestible carb content is fewer than 6 grams in the same
                                serving size. Most of these berries’ carbs come from simple sugars such as glucose, fructose, and sucrose but they contan a decent amount of fiber. Strawberries have a glycemic index (GI) score of 40, which
                                is relatively low (4). This means that strawberries should not lead to big spikes in blood sugar levels and are considered safe for people with diabetes.
                            </p>
                            <p>
                                Fresh strawberries are very high in water, so their total carb content is very low fewer than 8 grams of carbs per 3.5 ounces (100 grams). The net digestible carb content is fewer than 6 grams in the same
                                serving size. Most of these berries’ carbs come from simple sugars such as glucose, fructose, and sucrose but they contan a decent amount of fiber. Strawberries have a glycemic index (GI) score of 40, which
                                is relatively low (4). This means that strawberries should not lead to big spikes in blood sugar levels and are considered safe for people with diabetes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TABBER END --> --}}
<!-- BEST SELLER PART START -->
<div class="full-bestSeller">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
                <h3 class="section-title">Related Products</h3>
            </div>
        </div>

        <div class="row mt-5 product-slider">
            @foreach(App\Models\Product::where('category_id',$product->category->id)->get() as $category_product)
            @if($category_product->id == $product->id)
            @else
            {{-- <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset($category_product->image)}}" alt="">
                        <a href="{{route('product.show',str_replace(' ', '_',$category_product->name))}}" class="h4">
                            {{$category_product->name}}
                        </a>
                        <div>
                            <span>{{$category_product->price}}</span>
                            <a href="" class="btn btn-success" id="{{$category_product->id}}">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 mb-12">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="{{asset($category_product->image)}}" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a
                                    href="{{route('product.show',str_replace(' ', '_',$category_product->name))}}">{{$category_product->name}}</a>
                            </h3>
                            <span class="product-price">{{$category_product->price}}</span>
                        </div>
                        <div class="buttons">
                            <button class="btn custom-btn position-bottom-right addcart-item"
                                id="{{$category_product->id}}"> Add to cart</button>
                        </div>

                        <div class="icons position-center">
                            <div class="rounded-icon">
                                <a href="{{route('product.show',str_replace(' ', '_',$category_product->name))}}"><i
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
    $(document).ready(function(){
           $('body').on('click', '.cart-add', function(e){
               e.preventDefault();
                let productId = $(this).attr('id');  
                $.ajax({
                    url : "{{url('cart/add')}}",
                    method : "POST",
                    data : {
                            id :productId,
                        },
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
           
           $('body').on('click', '.checkout', function(e){
               e.preventDefault();
                let productId = $(this).attr('id');  
                $.ajax({
                    url : "{{url('cart/add')}}",
                    method : "POST",
                    data : {
                            id :productId,
                        },
                    success:function(response){
                        if(response.error){
                            toastr.warning('Item Out of Stock');
                        } else {
                            toastr.success('Item Added to Cart');
                            $('#cartValue').html(response.qty); 
                            window.location.href = "{{ route('checkout')}}"; 
                        }
                    }
                });
           });
    });
</script>

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