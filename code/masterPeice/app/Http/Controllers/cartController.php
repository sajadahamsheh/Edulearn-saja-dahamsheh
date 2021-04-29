<?php

namespace App\Http\Controllers;

use App\Order;
use App\order_courses;
use Illuminate\Http\Request;
use App\Courses ;
use App\Cart ;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;

class cartController extends Controller
{
    public function addToCart(Courses $course ) {
        $vars=Order ::where('user_id', Auth::id())->get();
        $saja=array();
        foreach ($vars as $var){
            $orders = order_courses::where('order_id',$var->id)->get();    
            array_push($saja,$orders);
            
        }
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        
       
        dd($saja);

        if (isset ($cart->items[$course['id']])&&($saja[$course['id']]) ) {
            return back()->with('fail', 'course is already in the cart');
            
        }else{
            $cart->add($course);
            session()->put('cart', $cart);
            return back()->with('success', 'course was added Successfully');
        }
        // dd($cart->items['id']);
    }


    public function showCart() {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        return view('cart.show', compact('cart'));
    }


  



    public function Checkout()
    {
        if(Auth()){
        $totalQty   = 0 ;
        $order = new Order();
        $order -> total_price = (Session::get('cart')->totalPrice) ;
        // dd( $order -> total_price);
        $order -> user_id = Auth()->user()->id ;
        $order -> save();
        
        $cart=Session::get('cart');
        
        foreach($cart->items as $item){
            
            // dd($order->id);

            $orderProduct = new order_courses();
            $orderProduct -> order_details = $item['course_name'] ;
            $orderProduct -> course_id = $item['course_id'] ;
            $orderProduct -> order_id = $order -> id ;
            $orderProduct -> single_price = ($item['course_price'] - ($item['course_discount'] * $item['course_price']) /100 ) ;
            $orderProduct -> save();
        }

        Session::forget('cart');
        return redirect('shopping-cart') ;

        }else{
            return redirect('login') ;
        }
    }
    public function destroy(Courses $course)
        {
            
        $cart = new Cart( session()->get('cart'));
        $cart->remove($course->id);

        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Product was removed');

        }
    }



