<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;

class CategoriesController extends Controller
{
    public function category(Request $request)
    {
        $category = Categories::whereId($request->id)->with('products')->first();   
        return view('fronts.category', compact('category'));
    }


    public function getProductsByBrand(Request $request)
    {

       // dd($request);
          $brand_id=$request->id;  
          $category_id = $request->category_id;

          $products = Products::where('brand_id',$brand_id)->where('category_id',$category_id)->with('product_variants','brandnames')->get();
         // dd($products);

          return response()->json($products);
    }




}
