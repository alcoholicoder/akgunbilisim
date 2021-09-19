<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function showHome() // GİRİŞ ANASAYFASINI GÖSTERİYOR //
    {
        return view('fronts.home');

    }

    public function showAbout() // ABOUT SAYFASINI GÖSTERİYOR //
    {
        return view('fronts.about');
    }

    public function showProduct()
    {
        $products = Products::
        with('product_variants','categoryforall')   
        ->paginate(6);
        
        return view('fronts.products',compact('products'));
    }

    public function showProductById(Request $request)
    {
          $perma= $request->name;
          
          $product = Products::where('permalink',$perma)->with('product_variants')->first();

     //  dd($product);
   // dd($product->product_variants);
        return view('fronts.productdetail',compact('product'));
    }
}
