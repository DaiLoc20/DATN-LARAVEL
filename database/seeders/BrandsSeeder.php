<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Brands::create(['name'=>'ASUS']);
      Brands::create(['name'=>'ACER']);
      Brands::create(['name'=>'DELL']);
      Brands::create(['name'=>'HP']);
      Brands::create(['name'=>'MSI']);
      Brands::create(['name'=>'LENOVO']);
      Brands::create(['name'=>'GIGABYTE']);
      Brands::create(['name'=>'SAMSUNG']);
      Brands::create(['name'=>'AOC']);
      Brands::create(['name'=>'VSP']);
      Brands::create(['name'=>'KINGMAX']);
      Brands::create(['name'=>'KINGSTON']);
      Brands::create(['name'=>'KINGFAST']);
      Brands::create(['name'=>'KINGMASTER']);
      Brands::create(['name'=>'INTEL']);
      Brands::create(['name'=>'ADATA']);
      Brands::create(['name'=>'CORSAIR']);
      Brands::create(['name'=>'COLORFUL']);
      Brands::create(['name'=>'COOLMOON']);
      Brands::create(['name'=>'LianLiStrimer']);
      Brands::create(['name'=>'VGA NVIDIA']);
      Brands::create(['name'=>'VGA ADM']);
      Brands::create(['name'=>'VGA']);
      Brands::create(['name'=>'VIEWSONIC']);
      Brands::create(['name'=>'E-Dra']);
      Brands::create(['name'=>'VSP']);
      Brands::create(['name'=>'AMD']);
      Brands::create(['name'=>'WESTERN']);
      Brands::create(['name'=>'ASROCK']);
      Brands::create(['name'=>'TENDA']);
      Brands::create(['name'=>'XIGMATEK']);
      Brands::create(['name'=>'REDMOON']);
      Brands::create(['name'=>'COOLER MASTER']);
      Brands::create(['name'=>'Dare-U']);
      Brands::create(['name'=>'Rapoo']);
      Brands::create(['name'=>'Akko']);
      Brands::create(['name'=>'Logitech']);
      Brands::create(['name'=>'Fuhlen']);
      Brands::create(['name'=>'Razer']);
    }
}
