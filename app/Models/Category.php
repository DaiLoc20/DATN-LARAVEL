<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function products()
    {
        return $this->hasMany(Product::class,'CategoryID', 'id');
    }

    public function images()
   {
      return $this->hasMany(Image::class, 'CategoryID', 'id');
   }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
