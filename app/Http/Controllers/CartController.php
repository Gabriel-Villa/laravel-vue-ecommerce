<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart()
    {
        $user_id = auth()->user()->id;
        $carts = Cart::ByUser($user_id)->with('product')->get();
        return view('cart.index', compact('carts'));
    }

    public function qty_products()
    {
        $user_id = auth()->user()->id;
        $cantidad = Cart::ByUser($user_id)->sum('qty');
        return response()->json(['qty' => $cantidad], 202);
    }

    public function store(Request $request)
    {
        $product_id = $request->product_id;
        $user_id = auth()->user()->id;
        
        $product = Product::ById($product_id)->first();
        $cart = Cart::ByProduct($product_id)->ByUser($user_id)->first();
        
        if (!$cart) {
            Cart::create([
                'productId' => $product_id,
                'userId' => $user_id,
                'qty' => 1,
                'price' => $product->price
            ]);
        } else {
            $cart->qty += 1;
            $cart->price += $product->price;
            $cart->save();
        }
       
        return $this->qty_products();

    }
}
