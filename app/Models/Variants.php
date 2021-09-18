<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variants extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="variants";
    protected $primaryKey="id";
    protected $guarded = [];

    // VARİANTS TABLOSU //

    public function categoryVariants()
    {
         return $this->hasMany(CategoryVariants::class,'variant_id','id');
    }

}

