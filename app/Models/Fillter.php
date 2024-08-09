<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fillter extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function children()
    {
        return $this->hasMany(Fillter::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Fillter::class, 'parent_id');
    }
}
