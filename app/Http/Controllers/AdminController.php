<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use App\Models\Variants;
use App\Models\CategoryVariants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function showAddProduct()
    {
        return view('fronts/admin.addproduct');
    }

    public function chooseVarriant()
    {
        return view('fronts/admin.choosevarriants');
    }
    public function AdminGetProductByCategory(Request $request)
    {
        $variantheaders = [];
        $category_id = $request->id; 


        $variantValues = Categories::where('id', $category_id)
            ->with('variants')->paginate(5);

        foreach ($variantValues as $variantValue) {
            foreach ($variantValue->variants as $data) {
                $variantheaders[] = $data->variant;
            }
        }
        return response()->json($variantheaders);
    }
    // KATEGORİYE VARİANT EKLEME //
    public function addVarriants(Request $request)
    {

        $categoryid= $request->category_id;
        $variantid = $request->variants;
        $count = count($variantid);     // SEÇİLEN VARİANT ADEDİ KADAR FOR DÖNDÜRÜCEM
            
        $control =  CategoryVariants::where('category_id',$categoryid)->first();            

        if($control == NULL) // EĞER BÖYLE BİR KATEGORİNİN HERHANGİ BİR VARİANTI YOK İSE EKLENİCEK //
       {
                
         for ($i = 0; $i < $count; $i++) {
              $productvariants = new CategoryVariants();
              $productvariants->category_id = $categoryid;
              $productvariants->variant_id = $variantid[$i];
              $productvariants->save();
             }
           return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti');
        }
     else{         
          CategoryVariants::where('category_id',$categoryid)->select('variant_id')->delete(); // HEPSİNİ SİLİP TEKRARDAN OLUŞTURUYORUM //

           for ($i = 0; $i < $count; $i++) {
                $productvariants = new CategoryVariants();
                $productvariants->category_id = $categoryid;
                $productvariants->variant_id = $variantid[$i];
                $productvariants->save();
            }
          return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti');
         }
    }

    public function getvariantsofcategory(Request $request)
    {
        $category_id = $request->id; // SEÇİLEN KATEGORİ ID SI

        // $existVarriants = ProductVariants::join('variants','product_variants.variant_id',"=",'variants.id')
        // ->where('category_id',$category_id)->select('value','variants.id')->distinct()->get();
        $variants = Variants::all();

        $category = Categories::where('id', $category_id)
            ->distinct()
            ->with('variants')
            ->first();

        $data = [$variants, $category];
        return response()->json($data);
    }

    public function createVariantPage()
    {
        $variants = Variants::paginate(15);

        return view('fronts/admin/create_variant')->with('variants', $variants);
    }

    public function createVariant(Request $request)
    {
        $newVariant = new Variants();
        $newVariant->value = $request->new_variant;
        $newVariant->save();

        return redirect()->back()->with('message', 'Yeni Özellik Başarıyla');
    }
    public function deleteVariant(Request $request)
    {   
      
        $variantId= $request->id;
        Variants::where('id',$variantId)->delete();

        return redirect()->back()->with('message', 'Özellik Başrıyla Silindi');

    }
}
