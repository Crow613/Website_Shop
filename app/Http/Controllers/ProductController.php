<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
      return view('product.index');
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

    }

    public function edit($id)
    {
       return view('product.edit');
    }

    public function update($id)
    {

    }

    public function show($id)
    {
      return view('product.show');
    }

    public function destroy($id)
    {

    }
}
