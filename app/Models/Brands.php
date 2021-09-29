<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="brands";
    protected $primaryKey="id";
    protected $guarded = [];

    // VARİANTS TABLOSU //


}

