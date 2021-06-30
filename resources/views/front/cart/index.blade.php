@extends('front.layout.index')
@section('title')
    Cart - Amin Dhodha House
@endsection
@section('body')
    <!-- HERO SECTION PART START -->
    <div class="hero_section">
        <div class="png_img"><img class="img-fluid" src="img/leaf.png" alt="" /></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="herosection_content">
                        <h2 class="text-light">Cart Overview</h2>
                        <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION PART END -->
     <!-- CART OVERVIEW PART START -->
     @if (Session::has('cart'))
     <div class="cart_overview">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="cartoverview_title">
                                <th>IMAGES</th>
                                <th>PRODUCT</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>SUBTOTAL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Helpers\Cart::products() as $product)
                            <tr  class="p{{ $product->id }}">
                                <th scope="row">
                                    <div class="thamnail_img">
                                        <img class="img-fluid" width="150" height="113" src="{{asset($product->image)}}" alt="" />
                                    </div>
                                </th>
                                <td class="align-middle"><b><a href="{{route('product.show',str_replace(' ', '_',$product->name))}}">{{$product->name}}</a></b></td>
                                <td class="align-middle">PKR {{$product->price}}</td>

                                <td class="align-middle">
                                    <div class="cart d-flex">
                                        <div class="quantity d-flex">
                                            <div class="right_arrow">
                                                <button type="button" class="btn-down" productprice="{{ $product->price }}" productId="{{ $product->id }}"><i class="icofont-arrow-down"></i></button>
                                            </div>
                                            <div class="quantity_num" id="spec{{$product->id}}"> {{$product['qty']}}</div>
                                            <div class="left_arrow">
                                                <button type="button" class="btn-up" productprice="{{ $product->price }}" productId="{{ $product->id }}"><i class="icofont-arrow-up"></i></button>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle" id="prp{{$product->id}}">PKR {{$product->price * $product['qty']}}</td>
                                <td class="align-middle ion-close" productId="{{$product->id}}"><i class="icofont-close text-danger"></i></td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CART OVERVIEW PART END -->

    <!-- COUPON PART START -->
    <div class="coupon_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="serach_btn">
                        {{-- <form action="#">
                            <div class="search_ber">
                                <input type="text" class="form-control search_button" id="serach_button" name="serach_button" value="" placeholder="Apply Coupon" />
                                <div class="coupon_btn">
                                    <a href="#" class="border-radius-0">APPLY COUPON</a>
                                </div>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="order_cardTotal">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="card_total text-uppercase" colspan="2">Cart total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <th scope="row" class="subtotal">Subtotal:</th>
                                    <td class="text-right">$568</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="discount">Discount:</th>
                                    <td class="text-right">$80</td>
                                </tr> --}}
                                <tr>
                                    <th scope="row">Total:</th>
                                    <td class="text-right total_num"  id="total">{{Session::get('cart')['amount']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="chechout_btn text-right">
                        <a href="{{route('checkout')}}" class="btn border-radius-0 border-transparent">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COUPON PART END -->
    @else
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
        <div class="sr-error-page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="sr-error-info">
                            <div class="sr-error-img">
                                <img class="parallax"
                                    src="{{ asset('cart_error.jpg') }}"
                                    alt="Order Not Found"  />
                            </div>
                            <p class="return-to-shop">
                                <a class="button wc-backward btn btn-warning" href="{{ route('product.index') }}">
                                    Return to shop </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@section('script')
{{-- <script>
    $(document).ready(function(){
        $('.addcart-item').click(function(e){   
               e.preventDefault();
                let productId = $(this).attr('productId');  
                $.ajax({
                    url : "{{url('cart/add')}}",
                    method : "POST",
                    data : {id :productId},
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
</script> --}}
<script>
    let id,qty,price,total;
    $(document).ready(function(){

    $('.ion-close').click(function(e){
        e.preventDefault();
           id = $(this).attr('productId');
          $.ajax({
              url : "{{url('cart/remove')}}",
              type : "POST",
              data : {
                  id : id
              },
              success:function(response){
                  console.log(id);
                  removeFromView(id,response);
                  updateView(response);
              }
          });
      }); 
      
      $('.btn-up').click(function(){
         id = $(this).attr('productId');
         price = $(this).attr('productprice');
          $.ajax({
              url : "{{url('cart/increment')}}",
              type : "POST",
              data : {
                  id : id
              },
              success:function(response){
                 if(response.error){
                    toastr.error("Item out of Stock!");
                    qty=$('#spec'+id).html();
                    $('#spec'+id).html(qty);
                 } else {
                      $('#spec'+id).html(parseInt($('#spec'+id).html())+1);
                        qty=$('#spec'+id).html();
                      updateView(response);
                  } 
              }
          });
      });
      
      $('.btn-down').click(function(){
           id = $(this).attr('productId');
           price = $(this).attr('productprice');
          $.ajax({
              url : "{{url('cart/decrement')}}",
              type : "POST",
              data : {
                  id : id
              },
              success:function(response){
                   qty = parseInt($('#spec'+id).html())-1;
                  if(qty >=1) $('#spec'+id).html(qty);
                  else {
                      removeFromView(id,response);
                  }
                  updateView(response);
              }
          });
      });

      function updateView(response){
          total = parseInt(qty*price);
          $('#cartValue').html(response.cart.qty);
          $('#subtotal').html(response.cart.amount);
          $('#total').html(response.cart.amount);
          $('#prp'+id).html(total);
      }
       function removeFromView(id,response){
          $('.p'+id).remove();
           toastr.warning('Item removed from cart')
          if (response.cart == null) location.reload();
       }
  });
</script>
@endsection