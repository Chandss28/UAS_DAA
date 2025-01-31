<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::insert([
            ['name'=> 'Adidas','price'=>1000000.00, 'category'=>'Sepatu'],
            ['name'=> 'Nike','price'=>999000.00, 'category'=>'Sepatu'],
            ['name'=> 'Levis','price'=>500000.00, 'category'=>'Celana'],
            ['name'=> 'Uniqlo','price'=>150000.00, 'category'=>'Baju'],
        ]);
    }
}
