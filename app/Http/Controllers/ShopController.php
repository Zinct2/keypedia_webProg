<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function category($id, Request $request)
    {
        $products = Product::where('name','LIKE','$'.$request->search.'%')
                    ->orWhere('category_id', 'LIKE', $id)
                    ->get();
        $categories = Category::findOrFail($id);
        return view('product-user', compact('categories','products'));
    }

    public function product($id)
    {

    }
}
