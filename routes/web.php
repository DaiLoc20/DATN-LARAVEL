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


/*Thêm-Xoá-Sửa hãng sản xuất*/
Route::get('/Admin/Brand/BrandList', [BrandsController::class, 'index_brand_admin'])->name('admin.brands.list');
Route::get('/Admin/Brand/BrandPlus', [BrandsController::class, 'create_brand'])->name('admin.brands.plus');
Route::post('/Admin/Brand/BrandPlus', [BrandsController::class, 'store'])->name('admin.brands.store');

Route::get('/Admin/Brand/{brands}/BrandEdit', [BrandsController::class, 'edit_brand'])->name('admin.brands.edit');
Route::put('/Admin/Brand/{brands}/BrandEdit', [BrandsController::class, 'update'])->name('admin.brands.update');

Route::get('/Admin/Brand/{brands}/BrandDelete', [BrandsController::class, 'delete_brand'])->name('admin.brands.delete');
Route::delete('/Admin/Brand/{brands}/BrandDelete', [BrandsController::class, 'destroy'])->name('admin.brands.delete');
/*Thêm-Xoá-Sửa hãng sản xuất*/



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

