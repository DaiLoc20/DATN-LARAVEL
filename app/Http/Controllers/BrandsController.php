<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;

class BrandsController extends Controller
{
    public function index_brand_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);

        $query= Brands::with('images')->orderBy('name', $direction);

        if ($showNew) {
            $query->where('created_at', '>=', now()->subDays(1));
        } elseif ($showEdited) {
            $query->where('updated_at', '>', 'created_at')
                  ->where('updated_at', '>=', now()->subDay());
        }
        $brands = $query->paginate(8);

        return view('/Admin/Brand/Brand-List', compact('sort','showNew','showEdited','brands'));
    }
    public function create_brand() { return view('/Admin/Brand/Brand-Plus'); }
    public function edit_brand(Brands $brands) { return view('/Admin/Brand/Brand-Edit', compact('brands')); }
    public function store(StoreBrandsRequest $request)
    {
        try{
            $addBrand = Brands::create(['name'=> $request->name]);
            $addBrand ->save();
            return redirect()->route('admin.brands.plus')->with('success-store-brand', 'Thêm hãng sản xuất thành công !');
        }
        catch(\Exception $e){
            Log::error('Lỗi khi thêm hãng sản xuất: ' . $e->getMessage());
            return redirect()->route('admin.brands.plus')->with('error-store-brand', 'Thêm hãng sản xuất không thành công');
        }
    }
    public function update(UpdateBrandsRequest $request, Brands $brands)
    {
        try{
            $validated = $request->validated();
            $brands->update($validated);
            return redirect()->route('admin.brands.edit',$brands->id)->with('success-update-brand', 'Sửa hãng sản xuất thành công !');
        }catch(\Exception $e){
            Log::error('Lỗi khi sửa hãng sản xuất: ' . $e->getMessage());
            return redirect()->route('admin.brands.edit',$brands->id)->with('error-update-brand', 'Sửa hãng sản xuất không thành công');
        }
    }
    public function destroy(Brands $brands)
    {
        try{
            $brands->delete();
            return redirect()->route('admin.brands.list')->with('success-destroy-brand', 'Hãng sản xuất đã được xóa thành công !');
        }catch(\Exception $e){
            return redirect()->route('admin.brands.list')->with('error-destroy-brand', 'Có lỗi xảy ra khi xóa hãng sản xuất' . $e->getMessage());
        }
    }
}
