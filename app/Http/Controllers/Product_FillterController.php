<?php

namespace App\Http\Controllers;

use App\Models\Product_Fillter;
use App\Models\Product;
use App\Models\Fillter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreFillterProductRequest;
use App\Http\Requests\UpdateImageRequest;

class Product_FillterController extends Controller
{

    public function index_product_fillter_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);
        $search = $request->query('search', '');
        $query = Product_Fillter::with(['products', 'fillters']);


        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->whereHas('products', function ($subQ) use ($search) {
                    $subQ->where('name', 'LIKE', "%{$search}%");  })
                         ->orWhereHas('fillters', function ($subQ) use ($search) {
                    $subQ->where('name', 'LIKE', "%{$search}%");  });  }); }

        if ($showNew)
            { $query->where('created_at', '>=', now()->subDay()); }
        elseif ($showEdited)
            {  $query->where('updated_at', '>=', now()->subDay())
                    ->whereColumn('updated_at', '!=', 'created_at'); }

        $product_fillters = $query->paginate(7, ['*'], 'Product_Fillter_page')
                                  ->appends(['sort' => $sort, 'search' => $search]);
        return view('/Admin/Fillter/Fillter-Product', [
            'sort' => $sort,
            'product_fillters' => $product_fillters,
            'showNew' => $showNew,
            'showEdited' => $showEdited,
            'search' => $search
        ]);
    }

    public function create_product_fillter()
    {
        $products = Product::all();
        $fillters = Fillter::all();
        return view('Admin/Fillter/Fillter-Product-Plus' ,['products' => $products,'fillters' => $fillters]);
    }

    public function store(StoreFillterProductRequest $request)
    {
        try{
            $productId = $request->input('ProductID');
            $fillterIds = $request->input('FillterID');

            if (!$productId || !$fillterIds) {
                throw new \Exception('Dữ liệu không hợp lệ');
            }

            foreach ($fillterIds as $fillterId) {
                Product_Fillter::create([
                    'ProductID' => $productId,
                    'FillterID' => $fillterId
                ]);
            }
            return redirect()->route('admin.product.fillter.plus')->with('success-store-product', 'Thêm sản phẩm  thành công !');
        }
        catch(\Exception $e){
            Log::error('Lỗi khi thêm sản phẩm : ' . $e->getMessage());
            return redirect()->route('admin.product.fillter.plus')->with('error-store-product', 'Thêm sản phẩm  không thành công');
        }
    }

}
