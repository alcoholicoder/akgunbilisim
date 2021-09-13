<?php

use App\Models\Products;
use App\Models\Categories;
use App\Models\ProductVariants;


function getProductNames()
{
    $products = Products::all();
    return $products;
}
 function getCategoryNames()
{
    $categories = Categories::all();

    return $categories;
}
function getVariants()
{
    $variants = ProductVariants::all();

    return $variants;
}

?>