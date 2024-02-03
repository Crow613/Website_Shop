<?php

namespace App\Http\Controllers;


use App\Models\Product;
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
    public function siteProductShow(int $id) : View
    {
       $product = Product::find($id);

      return view('site.product.show',compact('product'));
    }
    
}
