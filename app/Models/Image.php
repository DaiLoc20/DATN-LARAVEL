<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function products()
    {
        return $this->belongsTo(Product::class,'ProductID','id');
    }
    public function brands()
    {
        return $this->belongsTo(Brands::class, 'BrandID','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'CategoryID','id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'UserID','id');
    }


}
