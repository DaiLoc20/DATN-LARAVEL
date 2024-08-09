<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Hình ảnh của Loại Sản Phẩm
        Image::create(['CategoryID'=>1,'path'=>'/img/Category/CATEGORY-PC.jpg']);
        Image::create(['CategoryID'=>2,'path'=>'/img/Category/CATEGORY-LAPTOP.jpg']);
        Image::create(['CategoryID'=>3,'path'=>'/img/Category/CATEGORY-MHMT.jpg']);
        Image::create(['CategoryID'=>4,'path'=>'/img/Category/CATEGORY-HDD.jpg']);
        Image::create(['CategoryID'=>8,'path'=>'/img/Category/CATEGORY-LK.jpg']);
        Image::create(['CategoryID'=>16,'path'=>'/img/Category/CATEGORY-PK.jpg']);
        //Hình ảnh của Loại Sản Phẩm

        //Hình ảnh của Hãng
        Image::create(['BrandID'=>1,'path'=>'/img/Brand/BRAND-ASUS.jpg']);
        Image::create(['BrandID'=>2,'path'=>'/img/Brand/BRAND-ACER.jpg']);
        Image::create(['BrandID'=>3,'path'=>'/img/Brand/BRAND-DELL.jpg']);
        Image::create(['BrandID'=>4,'path'=>'/img/Brand/BRAND-HP.jpg']);
        Image::create(['BrandID'=>5,'path'=>'/img/Brand/BRAND-MSI.jpg']);
        Image::create(['BrandID'=>6,'path'=>'/img/Brand/BRAND-LENOVO.jpg']);
        Image::create(['BrandID'=>7,'path'=>'/img/Brand/BRAND-GIGABYTE.jpg']);
        Image::create(['BrandID'=>8,'path'=>'/img/Brand/BRAND-SAMSUNG.jpg']);
        Image::create(['BrandID'=>9,'path'=>'/img/Brand/BRAND-AOC.jpg']);
        Image::create(['BrandID'=>10,'path'=>'/img/Brand/BRAND-VSP.jpg']);
        //Hình ảnh của Hãng

    }

}
