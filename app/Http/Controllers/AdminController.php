<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function AdminGetProductByCategory(Request $request)
    {
        $category_id = $request->id; /* SEÇİLEN KATEGORİNİN ID SINI ALIYORUM */


        /* KATEGORİ TABLOSU VE ÜRÜNLER TABLOSUNU BİRLEŞTİRİYORUM DAHA SONRA GELEN KATEGORİ ID SINE KARIŞIK GELEN ÜRÜNLERİ AJAX'A POST EDİYORUM*/
       $products = Products::join('categories','products.category_id',"=",'categories.id')
       ->where('products.category_id',$category_id)->select('products.name','products.id')->get();

          return response()->json($products);


    }
}
