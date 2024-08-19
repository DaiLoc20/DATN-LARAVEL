<?php

namespace App\Http\Controllers;

use App\Models\Product_Fillter;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class Product_FillterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_product_fillter_admin()
    {
        $product_fillters = Product_Fillter::with(['products', 'fillters'])
        ->paginate(10, ['*'], 'Product_Fillter_page');
        return view('/Admin/Fillter/Fillter-Product', compact('product_fillters'));
    }

}
