<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product_Fillter;

class Product_FillterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product_Fillter::create( ['ProductID'=>1,'FillterID'=>2]);
        Product_Fillter::create([ 'ProductID'=>1,'FillterID'=>52]);

    }
}
