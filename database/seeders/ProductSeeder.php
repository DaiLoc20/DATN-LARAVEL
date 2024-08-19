<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'PC Gaming STAR CHICKEN MINI | GT 1030, Intel',
            'price' => 6990000,
            'CategoryID' => 1
        ]);

    }
}
