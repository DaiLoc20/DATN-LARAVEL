<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
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
        $search = $request->query('search', '');
        $query= Brands::with(relations: 'images')->orderBy('name', $direction);

        if (!empty($search)) {
            $query->where('name', 'LIKE', "%{$search}%");
        }

        if ($showNew) {
            $query->where('created_at', '>=', now()->subDay());
        } elseif ($showEdited) {
            $query->where('updated_at', '>=', now()->subDay())
                  ->where('updated_at', '!=', 'created_at');
        }
        $brands = $query->paginate(7, ['*'], 'brand_page')->appends(['sort' => $sort, 'search' => $search]);


        return view('/Admin/Brand/Brand-List', [
            'sort' => $sort,
            'brands' => $brands,
            'showNew' => $showNew,
            'showEdited' => $showEdited,
            'search' => $search
        ]);
    }

    public function create_brand() { return view('/Admin/Brand/Brand-Plus'); }
    public function edit_brand(Brands $brands)
    {
        $brands->load('images');
        return view('/Admin/Brand/Brand-Edit', compact('brands'));
    }
    /* Hình Ảnh */
    protected function fixImage(Brands $brands, Request $request)
    {
        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('/img/Brand/', $filename, 'public');
        }
        else {
            $filePath = '/img/NoImage/NO-IMAGE.jpg';
        }
        $oldImage = Image::where('BrandID', $brands->id)->first();
        if ($oldImage) {
            Storage::disk('public')->delete(str_replace('/img/Brand/', '', $oldImage->path));
            $oldImage->delete();
        }
        Image::create([
            'BrandID' => $brands->id,
            'path' => Storage::url($filePath),
        ]);
        return true;
    }
    /* Hình Ảnh */
    /* Thêm Brand */
    public function store(StoreBrandsRequest $request)
    {
        try{
            $brands = Brands::create(['name'=> $request->name]);
            $this->fixImage( $brands, $request);
            $brands ->save();
            return redirect()->route('admin.brands.plus')->with('success-store-brand', 'Thêm hãng sản xuất thành công !');
        }
        catch(\Exception $e){
            Log::error('Lỗi khi thêm hãng sản xuất: ' . $e->getMessage());
            return redirect()->route('admin.brands.plus')->with('error-store-brand', 'Thêm hãng sản xuất không thành công');
        }
    }
    /* Thêm Brand */
    /* Sửa Brand */
    public function update(UpdateBrandsRequest $request, Brands $brands)
    {
        try{

            $validated = $request->validated();
            $brands->name = $validated['name'];
            $this->fixImage($brands, $request);
            $brands->save();

            return redirect()->route('admin.brands.edit',$brands->id)->with('success-update-brand', 'Sửa hãng sản xuất thành công !');
        }catch(\Exception $e){
            Log::error('Lỗi khi sửa hãng sản xuất: ' . $e->getMessage());
            return redirect()->route('admin.brands.edit',$brands->id)->with('error-update-brand', 'Sửa hãng sản xuất không thành công');
        }
    }
    /* Sửa Brand */
    /* Xoá Brand */
    public function destroy(Brands $brands)
    {
        try{
            $brands->delete();
            return redirect()->route('admin.brands.list')->with('success-destroy-brand', 'Hãng sản xuất đã được xóa thành công !');
        }catch(\Exception $e){
            return redirect()->route('admin.brands.list')->with('error-destroy-brand', 'Có lỗi xảy ra khi xóa hãng sản xuất' . $e->getMessage());
        }
    }
    /* Xoá Brand */
}
