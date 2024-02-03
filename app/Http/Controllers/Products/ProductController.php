<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function create(Request $request)
    {
      
      if ($request->hasFile("img")) {
        $file = $request->file("img");
        $filename = time() .".". $file->getClientOriginalExtension();
        $file->storeAs('public/img', $filename);
      }else{
        $filename = '';
      }
      
      Product::create(
        [
            'img' => $filename,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]
    );
    
       return view('admin.product.index',['products'=>Product::all()]);
        
    }
    public function update(int $id,Request $request)
    {
          $product = Product::find($id) ;
      unlink(storage_path('app/public/img/'.$product->img));
     if ($request->hasFile('img')) {

      $file=$request->file('img');
      $filename =time() .".". $file->getClientOriginalExtension();
      
      $file->storeAs('public/img', $filename);
      
     }else{
      $filename = '';
     }
            
      $product->update([
            'img'=> $filename,
            'name' => $request->name,
            'descreption' => $request->description,
            'price' => $request->price,
            
            ]);
      
            
            return redirect()->route('adminProducts');
    }
    
    public function destroy(int $id)
    {
         $productDel = Product::find($id);
         $pathImgDell = storage_path('/app/public/img/'.$productDel->img);
         
           if (file_exists($pathImgDell)) {
            unlink($pathImgDell);
           }

        $productDel->destroy($id);
        
        return redirect()->route('adminProducts');
          
    }
   
}
