<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\ProductVariants;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
   // ADMİN ÜRÜN LİSTESİ BÖLÜMÜ //
   public function productList()
   {
      // ÜRÜNLERİN KATEGORİSİNİ KATEGORİ TABLOSUNDAN ALMAK İÇİN JOİNLİYORUM //
      $productInfos = Products::with('category')->orderBy('created_at', 'DESC')->paginate(10);
      return view('fronts/admin.productlist', compact('productInfos'));
   }
   // ÜRÜN LİSTESİNDEN KOLAY GÜNCELLEME //
   public function basicUpdate(Request $request)
   {
      $productId = $request->id;
      $productName = $request->product_name;
      $productCategoryId = $request->product_category_id;
      $productSellingPrice = $request->product_selling_price;
      $productStok = $request->product_stok;

      Products::where('id', $productId)->update([
         'product_name' =>  $productName,
         "permalink" => Str::slug($productName) . '-' . $productId,
         'selling_price' => $productSellingPrice,
         'category_id' => $productCategoryId,
         'stok' =>  $productStok
      ]);
      return redirect()->back()->with('success', 'Değişiklik Başarıyla Kaydedildi');
   }


   public function deleteProduct(Request $request)
   {
     // dd($request);
     Products::where('id',$request->id)->delete();
     return redirect()->back()->with('success', 'Ürün Başarıyla Silindi');
   }
   // ÜRÜN EKLEME , ÜRÜN KAYDETME
   public function addProduct(Request $request)
   {
      $product = new Products();
      $product->product_name = $request->product_name;
      $product->category_id = $request->category_id;
      $product->stok = $request->product_stok;
      $product->selling_price = $request->product_price;
      $product->save();

      $update = Products::where('id', $product->id)->update([
         "permalink" => Str::slug($request->product_name) . '-' . $product->id
      ]);

      $addedProductId = $product->id; // EKLENEN ÜRÜNÜN ID SINI ALIYORUM Kİ ÖZELLİKLERİNİDE KAYDEDEYİM //

      for ($i = 0; $i < count($request->variant_id); $i++) {
         $new = new ProductVariants();
         $new->product_id = $addedProductId;
         $new->variant_id = $request->variant_id[$i];
         $new->variant_name = $request->variant_name[$i];
         $new->save();
      }
      return redirect()->back()->with('success', 'ÜRÜN KAYDEDİLDİ');
   }

   public function editProduct(Request $request)
   {
      $product = Products::where('id', $request->id)
         ->with('category', 'product_variants')
         ->first();

      return view('fronts/admin.editproduct', compact('product'));
   }
}
