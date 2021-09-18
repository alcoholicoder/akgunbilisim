<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\ProductVariants;
USE Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   // ADMİN ÜRÜN LİSTESİ BÖLÜMÜ //
   public function productList()
   {
      // ÜRÜNLERİN KATEGORİSİNİ KATEGORİ TABLOSUNDAN ALMAK İÇİN JOİNLİYORUM //
      $productInfos = Products::with('category')->paginate(10);
      return view('fronts/admin.productlist', compact('productInfos'));
   }
   // ÜRÜN LİSTESİNDEN KOLAY GÜNCELLEME //
   public function updateProduct(Request $request)
   {
      $productId = $request->id;
      $productName = $request->product_name;
      $productCategoryId = $request->product_category_id;
      $productSellingPrice = $request->product_selling_price;
      $productStok = $request->product_stok;

       Products::where('id',$productId)->update([         
        'product_name' =>  $productName,
        'selling_price' => $productSellingPrice,
        'category_id' => $productCategoryId,
        'stok' =>  $productStok
       ]);
       return redirect()->back()->with('success', 'Değişiklik Başarıyla Kaydedildi');

   }
   // ÜRÜN EKLEME , ÜRÜN KAYDETME
   public function addProduct(Request $request)
   {
      Products::insert([
         'product_name' => $request->product_name,
         'category_id'=> $request->category_id,
         'stok' => $request->product_stok,
         'selling_price'=> $request->product_price
       ]);
       $addedProductId =DB::getPdo()->lastInsertId(); // EKLENEN ÜRÜNÜN ID SINI ALIYORUM Kİ ÖZELLİKLERİNİDE KAYDEDEYİM //

   for($i=0 ; $i<count($request->variant_id) ; $i++){
       ProductVariants::insert([
            'product_id' => $addedProductId, 
            'variant_id' => $request->variant_id[$i], 
            'variant_name' => $request->variant_name[$i]    
       ]);
      }
     return redirect()->back()->with('success', 'ÜRÜN KAYDEDİLDİ');
   }



}
