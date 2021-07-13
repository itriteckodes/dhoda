@extends('front.layout.index')
@section('body')
<!-- HERO SECTION PART START -->
<div class="hero_section">
    <div class="png_img"><img class="w-100 img-fluid" src="img/leaf.png" alt="" /></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="herosection_content">
                    <h2 class="text-light">Payment</h2>
                    <a href="{{url('/')}}" class="btn border-radius-0 border-transparent">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HERO SECTION PART END -->

<!-- ORDER PART STRAT -->
<div class="order_part">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="order_content">
                    <div class="order_txt">
                        @if($payment_method=='jazz_cash')
                        <img src="{{asset('images/payment_method/jazz2.png')}}" alt="">
                        @endif
                        @if($payment_method=='easypaisa')
                        <img src="{{asset('images/payment_method/easypaisa.png')}}" alt="">
                        @endif
                        @if($payment_method=='ubl')
                        <img src="{{asset('images/payment_method/ubl.png')}}" alt="">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="billing_content">
                    <div class=" text-uppercase">
                        <h2>Deposit Amount</h2>
                        <div class="billing_form">
                            <form action="{{route('payment.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type='hidden' name='order_id' value='{{$order->id}}'/>
                                <input type='hidden' name='payment_method' value='{{$payment_method}}'/>
                                <div class="form-row ">
                                    <div class="col-md-12 mt-3">
                                        <label for="transaction_id">Transaction Id*</label>
                                        <input type="text" class="form-control " name="transaction_id"  placeholder="Enter transaction id*" required/>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="amount">Amount*</label>
                                        <input type="number" class="form-control border-radius-0" id="amount" name="amount"  placeholder="Enter amount*" required/>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label for="transaction screenshoot">Trasaction Screenshot*</label>
                                        <input type="file" class="form-control border-radius-0" id="image" name="image" required />
                                    </div>
                                </div>
                                <div class="chechout_btn text-left mt-3">
                                    <button type="submit" class="btn border-radius-0 border-transparent">Pay Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>

<!-- ORDER PART END -->
@endsection