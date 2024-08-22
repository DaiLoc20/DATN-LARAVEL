<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\FillterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product_FillterController;
use App\Http\Controllers\ImageController;



/*Giao diện của Admin*/

Route::get('/Admin/Fillter/FillterList/FillterProduct', [Product_FillterController::class, 'index_product_fillter_admin']);
Route::get('/Admin/Image/ImageList', [ImageController::class, 'index_image_admin']);
Route::get('/Admin/Product/ProductList', [ProductController::class, 'index_product_admin']);
Route::get('/Admin/Fillter/FillterList', [FillterController::class, 'index_fillter_admin']);
Route::get('/Admin/Category/CategoryList', [CategoryController::class, 'index_category_admin']);


/*Thêm hãng sản xuất*/
Route::get('/Admin/Brand/BrandList', [BrandsController::class, 'index_brand_admin'])->name('admin.brands.list');
Route::post('/Admin/Brand/BrandList', [BrandsController::class, 'store'])->name('admin.brands.store');
/*Thêm hãng sản xuất*/



Route::get('/Admin/User/UserList', [UserController::class, 'index_user_admin']);
Route::get('/Layouts/Layout_Admin', [UserController::class, 'index_admin']);
/*Giao diện của Admin*/


/*Giao diện của User*/
Route::get('/Home', [UserController::class, 'index_user']);
Route::get('/Home/Login', [UserController::class, 'index_login_user']);
Route::post('/Home/Login', [UserController::class, 'login'])->name('login');
Route::post('/Home', [UserController::class, 'logout'])->name('logout');
Route::get('/User-Infor', [UserController::class, 'index_user_infor']);

/*Giao diện của User*/
Route::get('/', function () {
    return redirect('/Layouts/Layout_Admin');
});

