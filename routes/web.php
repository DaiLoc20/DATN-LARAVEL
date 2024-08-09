<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\FillterController;
use App\Http\Controllers\ImageController;



/*Giao diện của Admin*/
Route::get('/Admin/Image/ImageList', [ImageController::class, 'index_image_admin']);
Route::get('/Admin/Fillter/FillterList', [FillterController::class, 'index_fillter_admin']);
Route::get('/Admin/Category/CategoryList', [CategoryController::class, 'index_category_admin']);
Route::get('/Admin/Brand/BrandList', [BrandsController::class, 'index_brand_admin']);
Route::get('/Admin/User/UserList', [UserController::class, 'index_user_admin']);
Route::get('/Layouts/Layout_Admin', [UserController::class, 'index_admin']);
/*Giao diện của Admin*/
Route::get('/', function () {
    return redirect('/Layouts/Layout_Admin');
});
