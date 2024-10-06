<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\FillterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product_FillterController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomeController;


/*Giao diện của Admin*/

Route::get('/Admin/Fillter/FillterList/FillterProduct', [Product_FillterController::class, 'index_product_fillter_admin'])->name('admin.product.fillter.list');
Route::get('/Admin/FillterProduct/FillterProductPlus', [Product_FillterController::class, 'create_product_fillter'])->name('admin.product.fillter.plus');
Route::post('/Admin/FillterProduct/FillterProductPlus', [Product_FillterController::class, 'store'])->name('admin.product.fillter.store');


Route::get('/Admin/Image/ImageList', [ImageController::class, 'index_image_admin']);

/*Sản Phẩm*/
Route::get('/Admin/Product/ProductList', [ProductController::class, 'index_product_admin'])->name('admin.product.list');
Route::get('/Admin/Product/ProductPlus',  [ProductController::class, 'create_Product'])->name('admin.product.plus');
Route::post('/Admin/Product/ProductPlus', [ProductController::class,'store_Product'])->name('admin.product.store');

Route::get('/Admin/Product/{id}/ProductEdit', [ProductController::class,'edit_product'])->name('admin.product.edit');
Route::put('/Admin/Product/{product}/ProductEdit', [ProductController::class, 'update_product'])->name('admin.product.update');

/*Sản Phẩm*/
/*Hình Ảnh*/
Route::get('/Admin/Image/ImageList', [ImageController::class, 'index_image_admin'])->name('admin.image.list');
Route::get('/Admin/Image/ImageBrandList', [ImageController::class, 'index_image_brand_admin'])->name('admin.image.brand.list');
Route::get('/Admin/Image/ImageCategoryList', [ImageController::class, 'index_image_category_admin'])->name('admin.image.category.list');
Route::get('/Admin/Image/ImageProductList', [ImageController::class, 'index_image_product_admin'])->name('admin.image.product.list');
Route::get('/Admin/Image/ImageUserList', [ImageController::class, 'index_image_user_admin'])->name('admin.image.user.list');
/*Hình Ảnh*/


/*Thêm-Xoá-Sửa hãng sản xuất*/
Route::get('/Admin/Brand/BrandList', [BrandsController::class, 'index_brand_admin'])->name('admin.brands.list');
Route::get('/Admin/Brand/BrandPlus', [BrandsController::class, 'create_brand'])->name('admin.brands.plus');
Route::post('/Admin/Brand/BrandPlus', [BrandsController::class, 'store'])->name('admin.brands.store');

Route::get('/Admin/Brand/{brands}/BrandEdit', [BrandsController::class, 'edit_brand'])->name('admin.brands.edit');
Route::put('/Admin/Brand/{brands}/BrandEdit', [BrandsController::class, 'update'])->name('admin.brands.update');

Route::get('/Admin/Brand/{brands}/BrandDelete', [BrandsController::class, 'delete_brand'])->name('admin.brands.delete');
Route::delete('/Admin/Brand/{brands}/BrandDelete', [BrandsController::class, 'destroy'])->name(name: 'admin.brands.delete');
/*Thêm-Xoá-Sửa hãng sản xuất*/

/*Thêm-Xoá-Sửa loại sản phẩm*/
Route::get('/Admin/Category/CategoryList', [CategoryController::class, 'index_category_admin'])->name('admin.category.list');
Route::get('/Admin/Category/CategoryPlus', [CategoryController::class, 'create_category'])->name('admin.category.plus');
Route::post('/Admin/Category/CategoryPlus', [CategoryController::class, 'store'])->name('admin.category.store');

Route::get('/Admin/Category/{id}/Edit', [CategoryController::class, 'edit_category'])->name('admin.category.edit');
Route::put('/Admin/Category/{category}/Edit', [CategoryController::class, 'update'])->name('admin.category.update');

Route::delete('/Admin/Category/{category}/Delete', [CategoryController::class, 'destroy'])->name(name: 'admin.category.destroy');
/*Thêm-Xoá-Sửa loại sản phẩm*/


/*Thêm-Xoá-Sửa bộ lọc*/
Route::get('/Admin/Fillter/FillterList', [FillterController::class, 'index_fillter_admin'])->name('admin.fillter.list');

Route::get('/Admin/Fillter/FillterPlus', [FillterController::class, 'create_fillter'])->name(name: 'admin.fillter.plus');
Route::post('/Admin/Fillter/FillterPlus', [FillterController::class, 'store'])->name(name: 'admin.fillter.store');

Route::get('/Admin/Fillter/{id}/Edit', [FillterController::class, 'edit_fillter'])->name('admin.fillter.edit');
Route::put('/Admin/Fillter/{fillter}/Edit', [FillterController::class, 'update'])->name('admin.fillter.update');

Route::delete('/Admin/Fillter/{fillter}/Delete', [FillterController::class, 'destroy'])->name('admin.fillter.destroy');

/*Thêm-Xoá-Sửa bộ lọc*/

/*Thêm-Xoá-Sửa Admin*/
Route::get('/Admin/User/UserList', [UserController::class, 'index_user_admin'])->name('admin.user.list');
Route::get('/Admin/User/UserPlus', [UserController::class, 'create_user'])->name('admin.user.plus');
Route::post('/Admin/User/UserPlus', [UserController::class, 'store'])->name('admin.user.store');

Route::get('/Admin/User/{id}/UserEdit', [UserController::class, 'edit_user'])->name('admin.user.edit');
Route::put('/Admin/User/{user}/UserEdit', [UserController::class, 'update'])->name('admin.user.update');

Route::delete('/Admin/User/{user}/Delete', [UserController::class, 'destroy'])->name('admin.user.destroy');
/*Thêm-Xoá-Sửa Admin*/




Route::get('/Layouts/Layout_Admin', [UserController::class, 'index_admin']);
/*Giao diện của Admin*/

/*Giao diện Trang Web*/
Route::get('/Home', action: [HomeController::class, 'home'])->name('home.view');
Route::get('/Home/ProductCategory/{category}', action: [HomeController::class, 'show_Product_Category'])->name('product.category.show');
/*Giao diện Trang Web*/


Route::get('/', function () {
    return redirect('/Layouts/Layout_Admin');
});

