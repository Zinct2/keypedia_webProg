<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function index($id)
    {
        $products = Product::where('id',$id)->first();
        return view('detail' ,compact('products'));
    }
}
