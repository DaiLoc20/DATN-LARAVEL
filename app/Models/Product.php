<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $fillable = ['name', 'price', 'CategoryID', 'BrandID'];
    public function images()
    {
       return $this->hasMany(Image::class, 'ProductID', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'CategoryID', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class,'BrandID','id');
    }
    public function product_fillter()
    {
        return $this->hasMany(Product_Fillter::class,'ProductID','id');
    }

    public function fillters()
    {
        return $this->belongsToMany(Fillter::class, 'product_fillter');
    }



}
