@extends('front.layout.index')
@section('title')
<title>BLOG CATEGORIES | GYNOBST</title>
<meta name="description" content="">
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection

@section('body')
<section class="breadcrumb-section">
  <div class="breadcrumb-shape">
      <img src="{{asset('front/assets/images/round-shape-2.png')}}" alt="shape" class="hero-round-shape-2 item-moveTwo">
      <img src="{{asset('front/assets/images/plus-sign.png')}}" alt="shape" class="hero-plus-sign item-rotate">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h2 class="text-light">BLOG CATEGORIES</h2>
              <div class="breadcrumb-link margin-top-10">
                  <span><a href="{{url('/')}}">Home</a> / Blog Categories</span>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="category-section">
  <div class="container">
      <div class="row">
          @foreach(App\Models\Category::all()->take(6) as $category)
          <div class="col-lg-3 col-md-6">
              <a href="{{route('category.show',str_replace(' ', '_',$category->name))}}">
                <div class="single-category-item">
             
                  <div class="category-title margin-bottom-10">
                      <h4>{{$category->name}}</h4>
                  </div>
                  <span>{{$category->blogs->count()}} Blog(s)</span>
              </div></a>
          </div>
          @endforeach
      </div>
  </div>
</section>
@endsection