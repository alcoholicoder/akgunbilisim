<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\ProductVariants;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;


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
      $product->note = $request->note;
      $product->brand_id = $request->brand_id;
      $product->image = null;
      $product->save();

      $update = Products::where('id', $product->id)->update([
         "permalink" => Str::slug($request->product_name) . '-' . $product->id
      ]);

      $addedProductId = $product->id; // EKLENEN ÜRÜNÜN ID SINI ALIYORUM Kİ ÖZELLİKLERİNİDE KAYDEDEYİM //
      if($request->variant_id>0)
      {
         for ($i = 0; $i < count($request->variant_id); $i++) {
            $new = new ProductVariants();
            $new->product_id = $addedProductId;
            $new->variant_id = $request->variant_id[$i];
            $new->variant_name = $request->variant_name[$i];
            $new->save();
         }
      }  
      $this->imageUpload($request, $product->id);            
      return redirect()->back()->with('success', 'ÜRÜN KAYDEDİLDİ');
   }

   public function editProduct(Request $request)
   {
      $product = Products::where('id', $request->id)
         ->with('category', 'product_variants')
         ->first();
      return view('fronts/admin.editproduct', compact('product'));
   }
   public function listProductById (Request $request)
   {
      $brand_id=$request->id;
      
      $products = Products::where('brand_id',$brand_id)
        ->with('product_variants','brandnames')   
        ->paginate(6);         
        return response()->json($products);
   }

   
                  // RESİM EKLEME //
   public function imageUpload(Request $request, $product_id)
   {
      if($request->file('image'))
      {
         $file = $request->file('image');

         // Add to Public Path
         $filename = time().rand(11111,9999999).".jpg";
         $filepath = public_path("uploads/product_images/" . $product_id . '/');

         if ( !file_exists($filepath) ) {
            mkdir($filepath);
         }
         if ( !file_exists($filepath.'small/') ) {
            mkdir($filepath.'small/');
         }
         if ( !file_exists($filepath.'orginal/') ) {
            mkdir($filepath.'orginal/');
         }

         // Copy Image Different Size.
         $small = $filepath.'small/'.$filename;
         $orginal = $filepath.'orginal/'.$filename;
         // Save width 450
         $img = Image::make( $file->path() );
         $img->save($orginal);

         $img->resize(null, 270, function ($constraint) { $constraint->aspectRatio(); });
         //$img->insert(public_path("images/watermark-small.png"), 'center', 15, 15);
         $img->resizeCanvas(350, 270, 'center', false, 'ffffff');
         $img->save( $small );

         // update image
         $update = Products::whereId($product_id)->update([
            "image" => $filename
         ]);
      }
   }

}
