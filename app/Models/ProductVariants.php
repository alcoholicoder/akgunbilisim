<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="product_variants";
    protected $primaryKey="id";
    protected $guarded = [];


    public function variant()
    {
        return $this->hasOne(Variants::class, 'id', 'variant_id');
    }

}


