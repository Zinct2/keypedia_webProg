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
        return view('cart');
    }

    public function store(Request $request)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => 'item_id',
            'qty' => 1
        ]);
        return redirect('/cart');
    }
}