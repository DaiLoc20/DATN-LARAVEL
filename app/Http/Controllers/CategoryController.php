<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index_category_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);
        $search = $request->query('search', '');
        $query = Category::with(['children', 'images', 'parent']);

        if (!empty($search)) {
            $query->where('name', 'LIKE', "%{$search}%");
        }

        if ($showNew) { $query->where('created_at', '>=', now()->subDay()); }
        if ($showEdited) { $query ->where('updated_at', '>=', now()->subDay())
                              ->where('created_at', '<', now()->subDay()); }

        $query->orderBy('parent_id', $direction);
        $categories = $query->paginate(6, ['*'], 'category_page')->appends(['sort' => $sort, 'search' => $search]);


        return view('/Admin/Category/Category-List', ['sort' => $sort,'categories' => $categories,'showNew' => $showNew,'showEdited' => $showEdited ,'search'=>$search]);
    }

    public function create_category()
    {
        $categories = Category::whereNull('parent_id')->pluck('name', 'id');
        return view('/Admin/Category/Category-Plus', compact('categories'));
    }
    public function edit_category($id)
    {
        $category = Category::with('images')->findOrFail($id);

        $categories = Category::whereNull('parent_id')
                              ->where('id', '!=', $id)
                              ->orderBy('name')
                              ->get();
        $categories->load('images');
        return view('/Admin/Category/Category-Edit', compact('category', 'categories'));
    }
     /* Hình Ảnh */
     protected function fixImage(Category $category, Request $request)
     {
         if ($request->hasFile('path')) {
             $file = $request->file('path');
             $filename = time() . '_' . $file->getClientOriginalName();
             $filePath = $file->storeAs('/img/Category/', $filename, 'public');
         }
         else {
             $filePath = '/img/NoImage/NO-IMAGE.jpg';
         }
         $oldImage = Image::where('CategoryID', operator: $category->id)->first();
         if ($oldImage) {
             Storage::disk('public')->delete(str_replace('/img/Brand/', '', $oldImage->path));
             $oldImage->delete();
         }
         Image::create([
             'CategoryID' => $category->id,
             'path' => Storage::url($filePath),
         ]);
         return true;
     }
     /* Hình Ảnh */
    public function store(StoreCategoryRequest $request)
    {
        try{
            $categories = Category::create([ 'name'=> $request->name, 'parent_id'=> $request->parent_id ]);
            $this->fixImage( $categories, $request);
            $categories->save();
            return redirect()->route('admin.category.plus')->with('success-store-category', 'Thêm loại sản phẩm  thành công !');
        }
        catch(\Exception $e){
            Log::error('Lỗi khi thêm loại sản phẩm : ' . $e->getMessage());
            return redirect()->route('admin.category.plus')->with('error-store-category', 'Thêm loại sản phẩm  không thành công');
        }
    }
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try{
            $validated = $request->validated();
            $category->name = $validated['name'];
            $this->fixImage( $category, $request);
            $category->save();
            return redirect()->route('admin.category.edit',$category->id)->with('success-update-category', 'Sửa loại sản phẩm thành công !');
        }catch(\Exception $e){
            Log::error('Lỗi khi sửa loai sản phẩm : ' . $e->getMessage());
            return redirect()->route('admin.category.edit',$category->id)->with('error-update-category', 'Sửa loại sản phẩm không thành công');
        }
    }
    public function show(Category $category)
    {

    }
    public function destroy(Category $category)
    {
        try{
            if ($category->children()->exists())
            {
                return redirect()->route('admin.category.list')->with('error1-destroy-category', 'Không thể xóa loại sản phẩm có chứa loại sản phẩm children.');
            }
            $category->delete();
            return redirect()->route('admin.category.list',$category->id)->with('success-destroy-category', 'Xoá loại sản phẩm thành công !');
        }catch(\Exception $e){
            Log::error('Lỗi khi xoá loai sản phẩm : ' . $e->getMessage());
            return redirect()->route('admin.category.list',$category->id)->with('error-destroy-category', 'Xoá loại sản phẩm không thành công !');
        }
    }
}
