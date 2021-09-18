<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryVariants extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="category_variants";
    protected $primaryKey="id";
    protected $guarded = [];

    // CATEGORY-VARİANTS TABLOSU **

    public function variant()
    {
        //CATEGORYVARİATNS- VARİANTS İLİŞKİKENDİRME
        return $this->hasOne(Variants::class, 'id', 'variant_id');
    }

   
}

