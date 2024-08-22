<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;

class BrandsController extends Controller
{
    public function index_brand_admin()
    {
        $brands = Brands::with('images')->paginate(10);
        return view('/Admin/Brand/Brand-List', compact('brands'));
    }

    public function create_brand()
    {

    }

    public function store(StoreBrandsRequest $request)
    {
        try {
            $addBrand = Brands::create(['name'=> $request->name]);
            $addBrand ->save();
            return redirect()->route('admin.brands.list')->with('success', 'Thêm hãng sản xuất thành công');
        }
        catch(\Exception $e)
        {
            Log::error('Lỗi khi thêm hãng sản xuất: ' . $e->getMessage());
            return redirect()->route('admin.brands.list')->with('error', 'Thêm hãng sản xuất không thành công');
        }
    }

    public function show(Brands $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brands $brands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandsRequest $request, Brands $brands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brands $brands)
    {
        //
    }
}
