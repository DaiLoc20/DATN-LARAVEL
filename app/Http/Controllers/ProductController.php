<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Fillter;

class ProductController extends Controller
{
    public function index_product_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $search = $request->query('search', '');
        $query = Product::with( ['category', 'brand','images']);
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);

        if ($showNew) { $query->where('created_at', '>=', now()->subDay()); }
        if ($showEdited) { $query ->where('updated_at', '>=', now()->subDay())
                              ->where('created_at', '<', now()->subDay()); }
        if (!empty($search)) {
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $query->orderBy('name', $direction);
        $products = $query->paginate(8, ['*'], 'products_page');
        return view('/Admin/Product/Product-List', ['sort' => $sort,'products' => $products,'search' => $search,'showNew' => $showNew,'showEdited' => $showEdited]);
    }
        /* Hình Ảnh */
    protected function fixImage(Product $product, Request $request)
    {
        $filePaths = [];

        if ($request->hasFile('path')) {
            $files = is_array($request->file('path')) ? $request->file('path') : [$request->file('path')];
            foreach ($files as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('img/Product', $filename, 'public');
                $filePaths[] = $filePath;
            }
        }

        if (empty($filePaths)) {
            $filePaths[] = 'img/NoImage/NO-IMAGE.jpg';
        }

        // Xóa các hình ảnh cũ
        $oldImages = Image::where('ProductID', $product->id)->get();
        foreach ($oldImages as $oldImage) {
            Storage::disk('public')->delete(str_replace('img/Product/', '', $oldImage->path));
            $oldImage->delete();
        }

        // Lưu các hình ảnh mới
        foreach ($filePaths as $filePath) {
            Image::create([
                'ProductID' => $product->id,
                'path' => Storage::url($filePath),
            ]);
        }

        // Lấy và hiển thị thông tin về hình ảnh
        $images = $product->images;

        // Lấy hình ảnh đầu tiên
        $firstImage = $images->first();
        if ($firstImage) {
            echo "Hình ảnh đầu tiên: " . $firstImage->path . "\n";
        }

        // Lấy hình ảnh thứ 3 (nếu có)
        $thirdImage = $images->get(2); // index bắt đầu từ 0
        if ($thirdImage) {
            echo "Hình ảnh thứ 3: " . $thirdImage->path . "\n";
        }

        // Lặp qua tất cả hình ảnh
        foreach ($images as $image) {
            echo "Đường dẫn hình ảnh: " . $image->path . "\n";
        }

        return true;
    }
        /* Hình Ảnh */
    /* Thêm sản phẩm */

    /* Đường dẫn vào trang chức năng thêm */
    public function create_product()
    {
        $brands = Brands::all();
        $categories = Category::all();
        return view('/Admin/Product/Product-Plus', compact('brands', 'categories'));
    }
    /* Đường dẫn vào trang chức năng thêm */

    /* Form chức năng thêm sản phẩm */
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
    /* Form chức năng thêm sản phẩm */

    /* Thêm sản phẩm */

    /* Sửa sản phẩm */

    /* Đường dẫn vào trang chức năng sửa */
    public function edit_product($id)
    {
        $products = Product::findOrFail($id);
        $brands = Brands::all();
        $categories = Category::all();
        return view('/Admin/Product/Product-Edit', ['products'=>$products , 'brands'=>$brands , 'categories'=>$categories ]);
    }
    /* Đường dẫn vào trang chức năng sửa */

    /* Form chức năng sửa sản phẩm */
    public function update_product(UpdateProductRequest $request, Product $product)
    {
        try {

            $validatedData = $request->validatec();
            $product->update($validatedData);

            return redirect()->route('admin.product.edit',$product->id)->with('success-update-product', 'Cập nhật sản phẩm thành công!');
        } catch (\Exception $e) {
            Log::error('Lỗi khi cập nhật sản phẩm: ' . $e->getMessage());
            return redirect()->route('admin.product.edit', $product->id)->with('error-update-product', 'Cập nhật sản phẩm không thành công');
        }
    }
    /* Form chức năng sửa sản phẩm */

    /* Sửa sản phẩm */

}
