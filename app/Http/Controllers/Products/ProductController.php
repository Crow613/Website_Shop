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
        $file->storeAs('public/img/product', $filename);
      }else{
        $filename = '';
      }
      
      Product::create(
        [
            'img' => $filename,
            'name' => $request->name,
            'description' => $request->description,
            'quantities'=>$request->quantities,
            'price' => $request->price,
        ]
    );
     
    return redirect()->route('adminProducts');
        
    }
    public function update(int $id,Request $request)
    {
          $product = Product::find($id) ;
      
     if ($request->hasFile('img')) {
      
      if(file_exists(storage_path('app/public/img/product/'.$product->img))) {
       unlink(storage_path('app/public/img/product/'.$product->img));
      }
      $file=$request->file('img');
      $filename =time() .".". $file->getClientOriginalExtension();
      
      $file->storeAs('public/img/product', $filename);
      $product->update(['img' => $filename,]);
     }
            
      $product->update([
            'name' => $request->name,
            'descreption' => $request->description,
            'price' => $request->price,
            
            ]);
      
            
            return redirect()->route('adminProducts');
    }
    
    public function destroy(int $id)
    {
         $productDel = Product::find($id);
         $pathImgDell = storage_path('/app/public/img/product/'.$productDel->img);
         
           if (file_exists($pathImgDell)) {
            unlink($pathImgDell);
           }

        $productDel->destroy($id);
        
        return redirect()->route('adminProducts');
          
    }
   
}
