<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_image_admin()
    {
        $categoryImages = Image::whereNotNull('CategoryID')
        ->with('category' )
        ->paginate(6, ['*'], 'category_page');
        $brandImages = Image::whereNotNull('BrandID')
        ->with('brands')
        ->paginate(6, ['*'], 'brand_page');
        $userImages = Image::whereNotNull('UserID')
        ->with('users')
        ->paginate(10, ['*'], 'user_page');
        return view('/Admin/Image/Image-List',compact('categoryImages','brandImages','userImages'));
    }

    public function index_image_brand_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);
        $search = $request->query('search', '');

        $query = Image::whereNotNull('BrandID')
            ->join('brands', 'images.BrandID', '=', 'brands.id')
            ->select('images.*', 'brands.name as brand_name')
            ->orderBy('brands.name', $direction);

        if ($showNew) {
            $query->where('images.created_at', '>=', now()->subDay());
        }

        if ($showEdited) {
            $query->where('images.updated_at', '>=', now()->subDay())
                  ->where('images.created_at', '<', now()->subDay());
        }

        if (!empty($search)) {
            $query->where('brands.name', 'LIKE', "%{$search}%");
        }

        $brandImages = $query->paginate(8);
        return view('/Admin/Image/Image-Brand-List', ['sort' => $sort,'brandImages' => $brandImages,'search' => $search,'showNew' => $showNew,'showEdited' => $showEdited]);
    }
    public function index_image_category_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);
        $search = $request->query('search', '');

        $query = Image::whereNotNull('CategoryID')
            ->join('categories',  'images.CategoryID',  '=',  'categories.id')
            ->select('images.*', 'categories.name as categories_name')
            ->orderBy('categories.name', $direction);

        if ($showNew) { $query->where('images.created_at', '>=', now()->subDay()); }
        if ($showEdited) { $query->where('images.updated_at', '>=', now()->subDay())
                                 ->where('images.created_at', '<', now()->subDay()); }
        if (!empty($search)) { $query->where('categories.name', 'LIKE', "%{$search}%");}

        $categoryImages = $query->paginate(8);
        return view('/Admin/Image/Image-Category-List',['sort' => $sort,'categoryImages' => $categoryImages,'search' => $search,'showNew' => $showNew,'showEdited' => $showEdited]);
    }
    public function index_image_user_admin (Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);
        $search = $request->query('search', '');

        $query = Image::whereNotNull('UserID')
        ->join('users', 'images.UserID', '=', 'users.id')
        ->orderBy('users.last_name', $direction)
        ->orderBy('users.first_name', $direction);

        if ($showNew) {$query->where('images.created_at', '>=', now()->subDay());}

        if ($showEdited) { $query->where('images.updated_at', '>=', now()->subDay())
                                 ->where('images.created_at', '<', now()->subDay()); }

         if (!empty($search)) { $query->where(function($q) use ($search) {
                                $q->where('users.last_name', 'LIKE', "%{$search}%")
                                  ->orWhere('users.first_name', 'LIKE', "%{$search}%");}); }
        $userImages = $query->paginate(6);
        return view('Admin.Image.Image-User-List', compact('userImages', 'sort', 'search', 'showNew', 'showEdited'));
    }

    public function index_image_product_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);
        $search = $request->query('search', '');

        $query = Image::whereNotNull('ProductID')
            ->join( 'products', 'images.ProductID',  '=', 'products.id')
            ->select('images.*', 'products.name as product_name')
            ->orderBy('products.name',$direction );

        if ($showNew) {
            $query->where('images.created_at', '>=', now()->subDay());
        }

        if ($showEdited) {
            $query->where('images.updated_at', '>=', now()->subDay())
                  ->where('images.created_at', '<', now()->subDay());
        }

        if (!empty($search)) {
            $query->where( 'products.name', 'LIKE', "%{$search}%");
        }

        $productImages = $query->paginate(8, ['*'], 'product_page')->appends(['sort' => $sort, 'search' => $search]);

        return view('/Admin/Image/Image-Product-List', ['sort' => $sort,'productImages' => $productImages,'search' => $search,'showNew' => $showNew,'showEdited' => $showEdited]);
    }
}
