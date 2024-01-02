<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
      $product = new Product;

      $products = $product->all();

      return view('product.index', ['products' => $products]);

    }

    public function create()
    {
      return view('product.create');
    }

    public function store(Request $request)
    {

      $product = Product::create([
        'name'=> $request->name,
        'description' => $request->description,
        'price' => $request->price

      ]);

      if(!$product){

        return redirect()->route('products.create');

      }

      return redirect()->route('products.index');

    }

    public function edit(int $id)
    {

      $product = new Product;
      $product = $product->find($id);

       return view('product.edit', ['product'=>$product]);

    }

    public function update(int $id, Request $request)
    {

     $product = new Product;
     $product = $product->find($id);
      $updated = $product->update([
       'name' => $request->name,
       'description' => $request->description,
       'price' => $request->price
     ]);
          if(!$updated){

             return redirect()->route('products.edit',$id);
          }

          return redirect()->route('products.index');

    }

    public function show(int $id)
    {
      $product = new Product;
      $product = $product->find($id);

      return view('product.show',['product'=>$product]);

    }

    public function destroy(int $id)
    {

      $product = new Product;
      $deleted = $product->find($id)->delete();

      if(!$deleted) {

        return false;

      }

      return redirect()->route('products.index');

    }
}
