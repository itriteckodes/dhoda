@extends('front.layout.index')
@section('title')
<title>Products Categories- Amin Dhoda House</title>
<meta name="description" content="">

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')

<div class="hero_section">
    <div class="png_img"><img class="img-fluid" src="img/leaf.png" alt="" /></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="herosection_content">
                    <h2 class="text-light">All Product Categories</h2>
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
                <h3 class="section-title">Best Product Categories</h3>
            </div>
        </div>

        <div class="row mt-5">
            @foreach ($product_categories as $category)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="product">
                    <div class="product-img">
                        <img class="w-100" src="{{asset($category->image)}}" alt="">
                    </div>
                    <div class="product-content">
                        <div class="product-details position-bottom-left">
                            <h3 class="product-name"><a href="{{route('category.show',str_replace(' ', '_',$category->name))}}">{{$category->name}}</a></h3>
                        </div>


                        <div class="icons position-center">
                            <div class="rounded-icon">
                               <a href="{{route('category.show',str_replace(' ', '_',$category->name))}}"><i class="icofont-eye"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $product_categories->links() }}
            

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
<!--Hero Section-->
{{-- <div class="hero-section hero-background" style="background-image:url({{asset('front/assets/images/hero_bg.jpg')}})!important;">
    <h1 class="page-title"> Products Categories</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{route('home.index')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="current-page"> Products Categories</span></li>
        </ul>
    </nav>
</div>
<div class="page-contain">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
            <div class="container">
                <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                    <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                        <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                            @foreach(App\Models\ProductCategory::all() as $category)
                            <li class="tab-element active">
                                <a href="{{route('product_category.show',str_replace(' ', '_',$category->name))}}"><span class="biolife-icon icon-blueberry"></span>{{$category->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection