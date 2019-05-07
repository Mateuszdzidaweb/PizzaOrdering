<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function getPizza()
    {
        $products = Product::all();
        return view('shop.pizza', ['products' => $products]);
    }

    public function getAddToCart(Request $request ,$id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
//        dd($request->session()->get('cart'));
        return redirect()->route('product.view');
    }

    public function getCart(){
//        Fetch the cart/ if the cart is not in the session
        if(!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
