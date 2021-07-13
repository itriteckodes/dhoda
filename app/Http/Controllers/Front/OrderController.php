<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
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
        // dd($request);
                //  dd(Auth::guard('user')->user());
                if(Auth::guard('user')->user()==null){
                    $user_id = null;
                }else{
                   $user_id = Auth::guard('user')->user()->id;
                   $user = Auth::guard('user')->user();
                   $user->e_wallet = $user->e_wallet+$request->amount;
                   $user->update();
                }
        
                $amount = (Session::get('cart')['amount']);
                 $order = Order::create([
                     'user_id' => $user_id,
                     'order_code' => rand(100000, 999999),
                     'qty' =>Session::get('cart')['qty'],
                     'amount'=>$amount
                 ]+$request->all());
                 foreach(Cart::products() as $product){
                     OrderItem::create([
                         'product_id' => $product->id,
                         'order_id' => $order->id,
                         'qty' => $product['qty']
                     ]);
                     $productt = Product::find($product->id);
                     $productt->stock=$productt->stock-$product['qty'];
                     $productt->update();
                 }
                 Session::forget('cart');
                //   $order->email = 'siddiqueakbar560@gmail.com';
                    // $data = ['code' => $order->order_code];
                    // Mail::send('front.mail', $data, function ($message) use ($order){
                    //     $message->from('admin@mail.com','Admin');
                    //     $message->to($order->email, 'Fixer')
                    //     ->subject('Order tracking code');
                    // }); 
                // toastr()->success('Please check your email for code to track your order');
                        $information = Information::find(1);
                
                if($request->payment_method == 'jazz_cash'){
                    $order->delete();
                    return view('front.payment.index')->with('order',$order)->with('payment_method',$request->payment_method)->with('information',$information);
                }
                if($request->payment_method == 'easypaisa'){
                    $order->delete();
                    return view('front.payment.index')->with('order',$order)->with('payment_method',$request->payment_method)->with('information',$information);
                }
                if($request->payment_method == 'ubl'){
                    $order->delete();
                    return view('front.payment.index')->with('order',$order)->with('payment_method',$request->payment_method)->with('information',$information);
                }


                toastr()->success('Order Placed Successfully');
                return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function trackOrder(Request $request){
        $order = Order::where('order_code',$request->code)->first();
        if($order==null){
            toastr()->error('Sorry no order found');
            return redirect('/');
            
        }else{
            if($order->status=='pending'){
                toastr()->info('Yor order is not yet  approved by admin');
                return redirect('/');
            }
            if($order->status=='completed'){
                toastr()->success('Your order has been completed');
                return redirect('/');
            }
            
        }
    }
}
