<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::guard('user')->user()==null){
            $user_id = null;
        }else{
           $user_id = Auth::guard('user')->user()->id;
           $user = Auth::guard('user')->user();
           $user->e_wallet = $user->e_wallet-$request->amount;
           $user->update();
        }
        $order = Order::withTrashed()->find($request->order_id);
        if($order->amount<=$request->amount){
            Payment::create([
                'user_id' => $user_id,
                'order_id' => $order->id
            ]+$request->all());
            $order->restore();
            toastr()->success('Payment Successfull');
            return redirect('/');
        }else{
            toastr()->error('Sorry enter correct amount');
            $information = Information::find(1);
            return view('front.payment.index')->with('order',$order)->with('payment_method',$request->payment_method)->with('information',$information);
            // return redirect()->back();
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
