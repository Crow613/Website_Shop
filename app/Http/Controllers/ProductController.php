<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('site.product.index',compact('products'));
    }

    public function show(int $id)
    {
        $product = Product::find($id);
        return view('site.product.show',compact('product'));
    }
}
