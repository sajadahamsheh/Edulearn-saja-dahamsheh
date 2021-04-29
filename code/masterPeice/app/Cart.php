<?php

namespace App;

class Cart
{
    public $items = [];
    public $totalQty ;
    public $totalPrice;

    public function __Construct($cart = null) {
        if($cart) {
            
            $this->items = $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->totalPrice = $cart->totalPrice;
        } else {
            
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }

    public function add($course) {
        $item = [
            'course_name'    => $course->course_name,
            'course_price'   => $course->course_price,
            'qty'            => 0,
            'course_img'     => $course->course_img,
            'course_desc'    => $course->course_desc,
            'course_discount'=> $course->course_discount,
            'course_id'      => $course->id,
            
        ];

        if( !array_key_exists($course->id, $this->items)) {
            $this->items[$course->id] = $item ;
            $this->totalQty +=1;
            $this->totalPrice += $course->course_price; 
            
        } else {
            
            $this->totalQty +=1 ;
            $this->totalPrice += $course->course_price; 
        }
        
        $this->items[$course->id]['qty']  += 1 ;
        
    }
    public function remove($id) {
        // print_r($id);
        if( array_key_exists($id, $this->items)) {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['qty'] * $this->items[$id]['course_price'];
            unset($this->items[$id]);

        }

    }


}