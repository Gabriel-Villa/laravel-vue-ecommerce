<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    
    public function index()
    {
        $user_id = auth()->user()->id;
        $carts = Cart::ByUser($user_id)->with('product')->get();
        
        if($carts->isEmpty()){
            return redirect('/')->with('message', 'Por favor agrega productos al carrito');
        }
        
        return view('checkout.index', compact('carts'));

    }

}
