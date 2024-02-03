<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View; 

class SiteController extends Controller
{
    public function index(): View
    {
        return view('site.index'); 
    }
    public function about() : View 
    {
      return view('site.about');
    }
    public function products() : View
    {
    
      return view('site.product.products',['products'=> Product::all()]);
    }
    public function productShow(int $id) : View
    {
       $product = Product::find($id);

      return view('site.product.show',compact('product'));
    }
    public function productsSearch(Request $request) : View
    {
      $products = Product::where('name','like','%'.$request->name.'%')->get();
       
        return view('site.product.search', compact('products'));

    }
    
}
