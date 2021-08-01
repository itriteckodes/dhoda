@extends('front.layout.index')
@section('body')
<style>
    td{
        border: 2px solid gray;
    }
    table{
        border: 2px solid gray;
    }  
</style>
<!-- HERO SECTION PART START -->
<div class="hero_section">
    <div class="png_img"><img class="w-100 img-fluid" src="img/leaf.png" alt="" /></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="herosection_content">
                    <h2 class="text-light">Checkout</h2>
                    <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HERO SECTION PART END -->

<!-- ORDER PART STRAT -->
@if (Session::has('cart'))
<div class="order_part">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="billing_content">
                    <div class=" text-uppercase">
                        <h2>billing details</h2>
                        <div class="billing_form">
                            <form action="{{route('order.store')}}" method="POST">
                                @csrf
                                <div class="form-row ">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="text" class="form-control " name="name"  placeholder="Name *" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="email" class="form-control border-radius-0" id="checkout_email" name="email"  placeholder="Email *" required/>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="number" class="form-control border-radius-0" id="checkout_phonenumber" name="phone"  placeholder="Phone Number *" required />
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="text" class="form-control border-radius-0" id="checkout_country" name="country"  placeholder="Country *" required />
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="text" class="form-control border-radius-0" id="checkout_state" name="district"  placeholder="State/Disctrict *" required/>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="text" class="form-control border-radius-0" id="checkout_address" name="city" placeholder="City *" required/>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="text" class="form-control border-radius-0" id="checkout_address" name="address"  placeholder="Address *" required/>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <input type="number" class="form-control border-radius-0" id="checkout_postalcode" name="postal_code"  placeholder="Zip/Postal Code" />
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                        <textarea class="form-control border-radius-0" id="checkout_billing_textarea" name="note" rows="5" placeholder="Note Of Order :"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                        <label for="transaaction id" class="text-dark transaction_id">Transaction ID</label>
                                        <input type="text" class="form-control border-radius-0" id="transaction_id" name="transaction_id"  placeholder="Enter Transaction ID" />
                                    </div>
                                    {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                        <table class="table ">
                                            Accounts Details
                                            <thead>
                                                <tr>
                                                    <th>Account Title</th>
                                                    <th>Account No.</th>
                                                    <th>Branch Code</th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Hamza Amin (Jazz Cash)</td>
                                                    <td>03124202369</td>
                                                    <td>----</td>
                                                </tr><tr>
                                                    <td>Hamza Amin (Easypaisa)</td>
                                                    <td>03124202369</td>
                                                    <td>----</td>
                                                </tr><tr>
                                                    <td>Hamza Amin (UBL)</td>
                                                    <td>275557072</td>
                                                    <td>0338</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> --}}
                                </div>
                                <div class="form-check mt-3 ">
                                    <input class="form-check-input" type="radio" name="payment_method" id="cash_delivery" value="cash_delivery" />
                                    <label class="form-check-label text-dark" for="credit_card">Cash On Delivery</label>
                                </div> 
                                {{-- <div class="form-check mt-3 ml-3">
                                    <span class="text-dark"><input class="form-check-input" type="radio" name="payment_method" id="easypaisa"  value="delivery" required/>Cash On Delivery</span> 
                                </div> --}}
                                <div class="form-check mt-3">
                                       <span> <input  type="radio" name="payment_method" class="form-check-input" id="jazz_cash" value="jazz_cash"  required/></span>
                                       <span><img src="{{asset('images/payment_method/jazz2.png')}}" alt="" style="height: 70px; width:100px; margin-left:10px"></span>
                                       {{-- <small style="margin-left: 30px; font-size:15px">Hamza Amin (Account No:03124202369)</small> --}}
                                       <ul class="text-dark ml-3 ">
                                        <li>Account Holder: Hamza Amin</li>
                                        <li class="mt-3">Account No: <span class="text-dark">03124202369</span> </li>
                                       </ul>
                                </div> 
                                    
                                <div class="form-check mt-3 ">
                                   <span><input class="form-check-input" type="radio" name="payment_method" id="easypaisa"  value="easypaisa" required/></span> 
                                   <span><img src="{{asset('images/payment_method/easypaisa.png')}}" alt="" style="height: 70px; width:100px; margin-left:10px;"></span>
                                   {{-- <p style="margin-left: 30px; font-size:15px">Hamza Amin (Account No:03124202369)</p> --}}
                                   <ul class="text-dark ">
                                       <li>Account Holder: Hamza Amin</li>
                                       <li class="mt-3">Account No: <span class="text-dark">03124202369</span> </li>
                                   </ul>
                                </div> 
                                <div class="form-check mt-3 ">
                                   <span><input class="form-check-input" type="radio" name="payment_method" id="ubl"  value="ubl" required/></span> 
                                   <span><img src="{{asset('images/payment_method/ubl2.png')}}" alt="" style="height: 70px; width:100px; margin-left:10px"></span>
                                   {{-- <small style="margin-left: 30px; font-size:15px">Hamza Amin(Account No: 275557072,Branch code: 0338)</small> --}}
                                   <ul class="text-dark ">
                                    <li>Account Holder: Hamza Amin</li>
                                    <li class="mt-3">Account No: <span class="text-dark">275557072</span> </li>
                                  </ul>
                                </div>
                                <div class="chechout_btn text-left mt-3">
                                    <button type="submit" class="btn border-radius-0 border-transparent">Order Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="order_content">
                    <div class="order_txt">
                        <h2 class="mt-5 text-center">Your Order</h2>
                    </div>
                    <div class="order_cardTotal pt-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="card_total text-uppercase" colspan="5">Cart total</th>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <th>name</th>
                                    <th>price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Helpers\Cart::products() as $product)
                                <tr>
                                    <td><img src="{{asset($product->image)}}" height="50px" width="50px">  </a></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->qty}}</td>
                                    <td>{{$product->price * $product->qty}}</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <th></th>
                                    <td colspan="3" class="text-right">Total:</td>
                                    <td class="text-right total_num">{{ Session::get('cart')['amount'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="chechout_btn text-right">
                        <a href="#" class="btn border-radius-0 border-transparent">Checkout</a>
                    </div>
                    <div class="payment_method pt-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="payment_head text-uppercase" colspan="2">Payment method</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="w-50">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment" id="credit_card" value="" checked />
                                            <label class="form-check-label" for="credit_card">Cash On Delivery</label>
                                        </div>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
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
                            <a class="button wc-backward" href="{{ route('product.index') }}">
                                Return to shop </a>
                        </p>
                        {{--  <h4 class="text-danger">Sorry No Product found</h4>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- ORDER PART END -->
        {{-- <!--Hero Section-->
        <div class="hero-section hero-background">
            <h1 class="page-title">Checkout</h1>
        </div>
        <!--Navigation section-->
        <div class="container">
            <nav class="biolife-nav">
                <ul>
                    <li class="nav-item"><a href="{{url('/')}}" class="permal-link">Home</a></li>
                    <li class="nav-item"><span class="current-page">Checkout</span></li>
                </ul>
            </nav>
        </div>
        @if (Session::has('cart'))
        <div class="page-contain checkout">
            <!-- Main content -->
            <div id="main-content" class="main-content">
                <div class="container sm-margin-top-37px">
                    <div class="row">
                        <!--checkout progress box-->
                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                            <div class="checkout-progress-wrap">
                                <ul class="steps">
                                    <li class="step 1st">
                                        <div class="checkout-act active">
                                            <h3 class="title-box"><span class="number">1</span>Customer</h3>
                                            <div class="box-content">
                                                <p class="txt-desc">Checking out as a <a class="pmlink" href="#">Guest?</a> You’ll be able to save your details to create an account with us later.</p>
                                                <div class="login-on-checkout">
                                                    <form action="{{route('order.store')}}" name="frm-login" class="form-group" method="POST">
                                                        <div class="row">
                                                            <p class="form-group ">
                                                                <label for="input_email">Full Name</label>
                                                                <input type="text" class="form-control"  name="name" id="input_email"  placeholder="Your name" required>
                                                            </p> 
                                                            <p class="form-group ">
                                                                <label for="input_email">Email Address</label>
                                                                <input type="email" class="form-control" name="email" id="input_email" value="" placeholder="Your email" required>
                                                            </p> 
                                                            <p class="form-group ">
                                                                <label for="input_email">Contact No.(<small class="text-danger">please enter 11 digit phone number</small>)</label>
                                                                <input type="text" class="form-control" pattern="[0-9]{1}[0-9]{10}"  name="phone" id="input_email"  placeholder="Your Contact Number" required>
                                                            </p> 
                                                            <p class="form-group ">
                                                                <label for="input_email">Country</label>
                                                                <input type="text" class="form-control"  name="country" id="input_email"  placeholder="Your Country Name" required>
                                                            </p>
                                                            <p class="form-group ">
                                                                <label for="input_email">City</label>
                                                                <input type="text" class="form-control"  name="city" id="input_email"  placeholder="Your City Name" required>
                                                            </p>
                                                            <p class="form-group ">
                                                                <label for="input_email">Permanent Address</label>
                                                                <input type="text" class="form-control"  name="address" id="input_email"  placeholder="Your Permanent Address" required>
                                                            </p> 
                                                            <p class="form-group ">
                                                                <button type="submit"  class="btn btn-primary ">Place Order</button>
                                                            </p>
                                                        </div>
                                                        <p class="msg">Already have an account? <a href="#" class="link-forward">Sign in now</a></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="step 2nd">
                                        <div class="checkout-act"><h3 class="title-box"><span class="number">2</span>Shipping</h3></div>
                                    </li>
                                    <li class="step 3rd">
                                        <div class="checkout-act"><h3 class="title-box"><span class="number">3</span>Billing</h3></div>
                                    </li>
                                    <li class="step 4th">
                                        <div class="checkout-act"><h3 class="title-box"><span class="number">4</span>Payment</h3></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        <!--Order Summary-->
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                            <div class="order-summary sm-margin-bottom-80px">
                                <div class="title-block">
                                    <h3 class="title">Order Summary</h3>
                                    <a href="#" class="link-forward">Edit cart</a>
                                </div>
                                <div class="cart-list-box short-type">
                                    <span class="number">{{count(App\Helpers\Cart::products())}} items</span>
                                    <ul class="cart-list">
                                        @foreach (App\Helpers\Cart::products() as $product)
                                        <li class="cart-elem">
                                            <div class="cart-item">
                                                <div class="product-thumb">
                                                    <a class="prd-thumb" href="#">
                                                        <figure><img src="{{asset($product->image)}}" width="113" height="113" alt="shop-cart" ></figure>
                                                    </a>
                                                </div> 
                                                <div class="info">
                                                    <span class="txt-quantity">{{$product->qty}}X</span>
                                                    <a href="#" class="pr-name">{{$product->name}}</a>
                                                </div>
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span class="currencySymbol">PKR </span>{{$product->price * $product->qty}}</span></ins>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                               
                                    </ul>
                                    <ul class="subtotal">
                                        <li>
                                            <div class="subtotal-line">
                                                <b class="stt-name">total:</b>
                                                <span class="stt-price">{{ Session::get('cart')['amount'] }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
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
                                    <a class="button wc-backward" href="{{ route('product.index') }}">
                                        Return to shop </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif --}}
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.form-check-input').on('click',function(){
                // alert('hiii');
                let value = $(this).val();
                if(value=='cash_delivery'){
                    $('#transaction_id').prop('required',false);
                    $('.transaction_id').html('Transaction ID');

                }else{
                    $('#transaction_id').prop('required',true);
                    $('.transaction_id').html('Transaction ID *');
                }
                // if($(this).is(':checked')) alert('checked'); else alert('unchecked'); 
            });
        });
    </script>
@endsection