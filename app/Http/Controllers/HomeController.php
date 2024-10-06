<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreProductDetailsRequest;
use App\Http\Requests\UpdateProductDetailsRequest;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::with(['children', 'images', 'parent'])->get();
        return view('/Layouts/Home',['categories'=>$categories]);
    }
    public function show_Product_Category(Category $category)
    {
        $products = $category->products()->paginate(15);
        return view('/Layouts/ProductCategory', compact('category', 'products'));
    }
}
