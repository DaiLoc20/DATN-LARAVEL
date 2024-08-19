<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Fillter extends Model
{
    use HasFactory;

    protected $table = 'product_fillter';
    public $timestamps = false;

    protected $fillable = ['ProductID', 'FillterID'];

    public function products()
    {
        return $this->belongsTo(Product::class,'ProductID','id');
    }

    public function fillters()
    {
        return $this->belongsTo(Fillter::class,'FillterID','id');
    }





}
