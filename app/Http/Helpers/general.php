<?php

use App\Models\Products;

function getProductNames()
{
    $products = Products::all();
    return $products;
}


?>