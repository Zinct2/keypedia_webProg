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
        
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->item_id,
            'qty' => 1,
            'image' => $request->image
        ]);
        return redirect('/home');
    }
}