<?php

namespace App\Http\Controllers;

use App\Models\Image;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
