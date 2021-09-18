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
        $category_id = $request->id; /* SEÇİLEN KATEGORİNİN ID SINI ALIYORUM */
        // $category = Categories::where('id', $category_id)
        // ->distinct()
        // ->with('variants')        
        // ->first();

        // $variantValue=Variants::first('value') //Category_variants table
        // ->with('categoryVariants')->first();

        $variantValues=Categories::where('id', $category_id)
        ->with('variants')->paginate(5);

        foreach($variantValues as $variantValue)
        {
            foreach($variantValue->variants as $data)
            {
                $variantheaders[]= $data->variant;
            }  
        }
        return response()->json($variantheaders);


    }





    public function addVarriants(Request $request)
    {
       // dd($request);
        $categoryid=$request->category_id; // SEÇİLEN KATEGORİ ID SI
        
        $variantid=$request->variants; // SEÇİLEN VARİANTLARIN ID SI // (AMACIM SEÇİLEN KATEGORİYE SEÇİLEN VARİANTLARI GÖNDERMEK)
        $count = count($variantid); // SEÇİLEN VARİANT ADEDİ KADAR FOR DÖNDÜRÜCEM

        

        for($i = 0; $i < $count; $i++){

            $productvariants = new CategoryVariants();

            $productvariants->category_id = $categoryid;
            $productvariants->variant_id = $variantid[$i];
            $productvariants->save();
        }
        return redirect()->back()->with('message', 'Özellik Başarıyla Eklendi');
    }

    public function getvariantsofcategory(Request $request)
    {
        $category_id=$request->id; // SEÇİLEN KATEGORİ ID SI

       
        // $existVarriants = ProductVariants::join('variants','product_variants.variant_id',"=",'variants.id')
        // ->where('category_id',$category_id)->select('value','variants.id')->distinct()->get();
        $variants= Variants::all();
    
        $category = Categories::where('id', $category_id)
        ->distinct()
        ->with('variants')        
        ->first();

       // dd($category);
    
        $data = [$variants,$category];
        return response()->json($data);
    }
    public function createVariantPage()
    {
        $variants=Variants::all();
        
        return view('fronts/admin/create_variant')->with('variants',$variants);
    }

    public function createVariant(Request $request)
    {
       
        $newVariant = new Variants();
        $newVariant->value = $request->new_variant;
        $newVariant->save();

        $message = "test";
        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);

        return redirect()->back()->with('message', 'Yeni Özellik Başarıyla');
    }
}
