<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;



class AdminIndexController extends Controller
{
    public function showAdminIndex()
    {
        return view('fronts/admin.index');
    }




}
