<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="products";
    protected $primaryKey="id";
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }

    public function categoryforall()
    {
        return $this->hasMany(Categories::class, 'id', 'category_id');
    }

    
    public function product_variants()
    {
        return $this->hasMany(ProductVariants::class, 'product_id', 'id')->with('variant');
    }    

    public function categoryName()
    {
        return $this->category->category_name ?? '-';
    }
    public function price()
    {
        return $this->selling_price . ' TL';
    }
    public function brandnames()
    {
        return $this->hasOne(Brands::class, 'id','brand_id');
    }
}
