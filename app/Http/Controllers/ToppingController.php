<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topping;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
use App\Cart;

class ToppingController extends Controller
{
    public function getCreateYourOnw()
    {

        $toppings = Topping::all();

        $small_toppings = DB::table('toppings')
            ->where('size', 'small')
            ->get(['name', 'price', 'id']);
//            dd($small_toppings);


        $medium_toppings = DB::table('toppings')
            ->where('size', 'medium')
            ->get();
//        dd($medium_toppings);

        $large_toppings = DB::table('toppings')
            ->where('size', 'large')
            ->get();

        return view('shop.create-your-own', [
            'small_toppings' => $small_toppings,
            'medium_toppings' => $medium_toppings,
            'large_toppings' => $large_toppings
        ]);
    }



    public function postAddToCart(Request $request){

        $this->validate($request,[
            'small_topping_price' => 'required',
            'base' => 'required'
        ]);

        $base = Input::get('base');

        $checked_arr = Input::post()['small_topping_price'];
        $count = count($checked_arr);
//        dd($count);

        foreach (Input::post()['small_topping_price'] as $small_topping_price ){
            $small_topping_price = 0.9;
           $total_price =  $count * $small_topping_price + $base;
            $product = $request->input('small_topping_price');

        }
//        var_dump($smal_topping_price);
        dd($product, $total_price);
//        print_r($request->input( 'small_topping_price'));




    }





}





//
//$small_topping = Topping::find($id);
//        $oldCart = Session::has('cart') ? Session::get('cart') : null;
//        $cart = new Cart($oldCart);
//        $cart->add($small_topping, $base, $total_price, $small_topping->id);
//        $oldCart = Session::has('cart') ? Session::get('cart') : null;
//        $cart = new Cart($oldCart);
//
//        $request->session()->put('cart', $cart);
////        dd($request->session()->get('cart'));
//        return redirect()->route('shop.create-your-own');