@extends('front.layout.index')
@section('title')
<title>{{$category->name}} Products- Amin Dhoda House</title>
<meta name="description" content="">

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')
<!--Hero Section-->
<div class="hero-section hero-background" style="background-image:url({{asset('front/assets/images/hero_bg.jpg')}})!important;">
    <h1 class="page-title">{{$category->name}} Products</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{route('home.index')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><a href="{{route('product_category.index')}}" class="permal-link">Product Categories</a></li>
            <li class="nav-item"><span class="current-page">{{$category->name}} Products</span></li>
        </ul>
    </nav>
</div>
<div class="page-contain category-page no-sidebar">
    <div class="container">
        <div class="row">

            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="product-category grid-style">

                    <div class="row">
                        <ul class="products-list">
                            @foreach($products as $product)
                            <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="contain-product layout-default">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="{{asset($product->image)}}" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">{{$product->category->name}}</b>
                                        <h4 class="product-title"><a href="{{route('product.show',str_replace(' ', '_',$product->name))}}" class="pr-name">{{$product->name}}</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">PKR</span>{{$product->price}}</span></ins>
                                        </div>
                                        <div class="shipping-info">
                                            <p class="shipping-day">3-Day Shipping</p>
                                            <p class="for-today">Pree Pickup Today</p>
                                        </div>
                                        <div class="slide-down-box">
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="biolife-panigations-block">
                        <ul class="panigation-contain">
                            <li>{{$products->links()}}</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection