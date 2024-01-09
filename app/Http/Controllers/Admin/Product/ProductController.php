<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): View
    {
        $product = new Product;

        $products = $product->all();

        return view('admin.product.index', ['products' => $products]);
    }

    public function create(): View
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        if (!$product) {
            return redirect()->route('products.create');
        }

        return redirect()->route('products.index');
    }

    public function edit(int $id): View
    {
        $product = new Product;

        $product = $product->find($id);

        return view('admin.product.edit', ['product' => $product]);
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

        if (!$updated){
            return redirect()->route('products.edit',$id);
        }

        return redirect()->route('products.index');

    }

    public function show(int $id): View
    {
        $product = new Product;
        $product = $product->find($id);

        return view('admin.product.show',['product' => $product]);
    }

    public function destroy(int $id)
    {
        $product = new Product;

        $deleted = $product->find($id)->delete();

        if (!$deleted) {
            return false;
        }

        return redirect()->route('products.index');
    }

    public function seek(Request $request)
    {
        
        $product = Product::whereName($request->name)->first();
          
            $products =[

                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],

            ];

        if($products){

            return view('/admin/search',['products'=>$products]);

        }   
    }
}
