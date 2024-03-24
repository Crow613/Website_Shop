<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Shopping;
use Illuminate\Http\Request;



class ShoppingController extends Controller
{

  public function create(int $id,Product $product,Request $request, Shopping $shopping)
  {
    $params = $product->find($id);

    Shopping::create([
      "productId" => $id,
      "productName"=>$params->name,
      "productQuantity" => $request->quantity,
      "productPrice"=>$params->price,
    ]);

    return redirect()->route("siteProducts");
  }

  public function shop(Shopping $shopping, Product $product )
  {
    $test = $shopping->get();
    dd($test);

    for ($i=0; $i <= array($test) ;$i++ ) {

        $id= $test[$i]->id;
        $products=$product->all();

     if ($i == 3) {

         printf($products);
     }

    die('err');



  }
        return view('user.shop.shop',['product'=>$products]);
  }

}
