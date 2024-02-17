<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.profile.index");
    } 
    public function update(Request $request)
    {
        return view("admin.profile.edit");
    }
    
    public function products(Product $products)
    {
       
        return view("admin.product.index", ["products"=> $products->all()]);
    }

    public function productCreatePage()
    {
       
        return view('admin.product.tools.create');
    }
    public function productShow(int $id)
    {
        $product = Product::find($id);
        return view('admin.product.show' , ['product'=> $product]);
    }
    public function productEdit(int $id)
    {
        $product = Product::find($id);
        return view('admin.product.tools.edit', ['product'=> $product]);
    }
    public function productSearch(Request $request)
    {
        $products = Product::where('name','like','%'.$request->name.'%')->get();
       
        return view('admin.product.search', compact('products'));

    }
    public function users()
    {
        return view('admin.users.users', ['users'=> User::all()]);
    }
    public function services()
    {
        return view('admin.services.chat');
    }
    


}
