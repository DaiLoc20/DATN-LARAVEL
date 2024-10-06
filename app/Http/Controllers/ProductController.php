<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\CreateProductRequest;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_product_admin()
    {
        $products = Product::with(['category','brand','images'])
        ->paginate(10, ['*'], 'products_page');
        return view('/Admin/Product/Product-List', compact('products'));
    }

    /*Thêm sản phẩm  */
    public function create_product()
    {
        $products = Product::with(['categories','brands']);
        $categories = Category::whereNull('parent_id')->get();
        $brands= Brands::all();
        return view('/Admin/Product/Product-Plus',compact('products','categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_Product(StoreProductRequest $request)
    {
        try{

            $name = $request->input('name');
            $price = $request->input('price');
            $CategoryID = $request->input('CategoryID');
            $BrandID = $request->input('BrandID');

           $product = Product::create([
                'name' => $name,
                'price' => $price,
                'CategoryID' => $CategoryID,
                'BrandID' => $BrandID
            ]);
            $this->fixImage( $product, $request);
            $product->save();

            return redirect()->route('admin.product.plus')->with('success-store-product', 'Thêm sản phẩm  thành công !');
        }
        catch(\Exception $e){
            Log::error('Lỗi khi thêm sản phẩm : ' . $e->getMessage());
            return redirect()->route('admin.product.plus')->with('error-store-product', 'Thêm sản phẩm  không thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_product(Product $products)
    {
        $categories = Category::whereNull('parent_id')->get();
        $brands= Brands::all();
        return view('/Admin/Product/Product-Edit', compact('products','categories','brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_product(UpdateProductRequest $request, Product $products)
    {
        try{
            $validated = $request->validated();
            $products->update($validated);
            return redirect()->route('admin.products.edit',$products->id)->with('success-update-brand', 'Sửa sản phẩm thành công !');
        }catch(\Exception $e){
            Log::error('Lỗi khi sửa hãng sản xuất: ' . $e->getMessage());
            return redirect()->route('admin.products.edit',$products->id)->with('error-update-brand', 'Sửa sản phẩm không thành công');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $products)
    {
        try{
            $products->delete();
            return redirect()->route('admin.product.list',$products->id)->with('success-destroy-product', 'Sản phẩm đã được xóa thành công !');
        }catch(\Exception $e){
            return redirect()->route('admin.product.list',$products->id)->with('error-destroy-product', 'Có lỗi xảy ra khi xóa sản phẩm' . $e->getMessage());
        }
    }
}
