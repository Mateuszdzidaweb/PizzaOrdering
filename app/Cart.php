<?php

namespace App;

class Cart
{
    public $items;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }else{
            $this->items = null;
        }
    }
//    Grouping items in the array
    public function add($item, $id){
        $storedItem = ['quantity' => 0, 'price' => $item->price, 'item' => $item];
//        Checking if items exist in the cart
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['quantity']++;
        $storedItem['price'] = $item->price * $storedItem['quantity'];
        $this->items[$id] = $storedItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
    }



//    public $toppingsSelected;
//    public $base;
//    public $totalPriceOwn = 0;
//
//    public function addTopping($toppingsSelected, $id){
//        $toppingsSelected = ['qty' => 0, 'price' => $toppingsSelected->price, '$toppingsSelected'=> $toppingsSelected];
//    }

}
