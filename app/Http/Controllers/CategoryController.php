<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\CategoryVariants;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategories()
    {
        $categories = Categories::paginate(15);        
        return view('fronts.admin.create_category')->with('categories',$categories);
    }
    public function createCategory(Request $request)
    {
        $checkValue = Categories::where('category_name',$request->new_category)->first();

        if($checkValue == NULL)
        {
            $newCategory = new Categories();
            $newCategory->category_name = $request->new_category;
            $newCategory->save();

            return redirect()->back()->with('message', 'Yeni Kategori Başrıyla Oluşturuldu');
        }
        return redirect()->back()->with('message', 'Böyle Bir Kategori Zaten Var.');     
    }

    public function deleteCategory(Request $request)
    {
   
        $categoryId = $request->id;
        Categories::where('id',$categoryId)->delete();
        return redirect()->back()->with('message', 'Kategori Başarıyla Silindi');    
    }
}
