<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{





    public function showHome() // GİRİŞ ANASAYFASINI GÖSTERİYOR //
    {
        return view('fronts.home');

    }
}