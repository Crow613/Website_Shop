<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function siteProduct()
    {
        $products = Product::all();
        return view("site.product.products",compact("products"));
    }
    public function siteProductShow(int $id)
    {
      $product = Product::find($id);
      return view("site.product.show",compact("product"));
    }
    public function siteProductSeek(Request $request)
    {
        $product = Product::whereIn('name', $request->name)->first();

        if(!$product){
            return false;
        }

        return redirect()->route('siteProductSearch',compact('product'));
    }
}
