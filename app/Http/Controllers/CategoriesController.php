<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category(Request $request)
    {
        $category = Categories::whereId($request->id)->with('products')->first();
        return view('fronts.category', compact('category'));
    }
}
