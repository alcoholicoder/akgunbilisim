<?php

use App\Models\Products;
use App\Models\Categories;
use App\Models\Variants;


function getProductNames()
{
    $products = Products::all();
    return $products;
}
 function getCategoryNames()
{
    $categories = Categories::orderby('category_name')->get();

    return $categories;
}
function getVariants()
{
    $variants = Variants::all();
    
    return $variants;
}

?>