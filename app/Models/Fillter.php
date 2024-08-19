<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fillter extends Model
{
    use HasFactory;

    protected $guarded=[];



    public function children()
    {
        return $this->hasMany(Fillter::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Fillter::class, 'parent_id');
    }

    public function product_fillter()
    {
        return $this->hasMany(Product_Fillter::class,'FillterID','id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_fillter');
    }
}
