<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Cart::where('user_id','LIKE',Auth::user()->id)->get();
        return view('/cart', compact('carts'));
    }

    public function store(Request $request)
    {
        $cart = Cart::where('product_id', $request->item_id)
                    ->where('user_id', Auth::user()->id)
                    ->first();
        if($cart == null){
            Cart::create([
                        'user_id' => Auth::user()->id,
                        'product_id' => $request->item_id,
                        'qty' => $request->quantity,
                        'image' => $request->image
                    ]);
        }
        else{
            $cart->qty += $request->quantity;
            $cart->save();
        }


        // if($cart->product_id != $request->item_id){
        //     Cart::create([
        //         'user_id' => Auth::user()->id,
        //         'product_id' => $request->item_id,
        //         'qty' => $request->quantity,
        //         'image' => $request->image
        //     ]);
        // }
        // else{
        //     Cart::
        // }
        return redirect('/home');
    }
}