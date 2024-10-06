<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function products()
    {
        return $this->hasMany(Product::class,'BrandID', 'id');
    }
    public function images()
    {
       return $this->hasMany(Image::class, 'BrandID', 'id');
    }
}
