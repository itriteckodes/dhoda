<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Api;
use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart(){
        $information = Information::find(1);
        return view('front.cart.index')->with('information',$information);
     }
     public function add(Request $request){
        //  return Api::setResponse('message','hiii');
         if(Cart::add($request->id,$request->qty ?? 1)){
             return Api::setResponse('qty',Cart::qty());
         } else {
             return Api::setError('Item out of stock!');
         }
     }
     
     public function remove(Request $request){
         Cart::remove($request->id);
         return Api::setResponse('cart', Session::get('cart'));
     }
     
     public function increment(Request $request){
         if(Cart::increase($request->id)){
             return Api::setResponse('cart',Session::get('cart'));
         } else {
             return Api::setError('Item out of stock!');
         }
     }
     
     public function decrement(Request $request){
         Cart::decrease($request->id);
         return Api::setResponse('cart',Session::get('cart'));
     }
 
     public function clear(){
         Session::forget('cart');
         return redirect()->back();
     }
     
}
