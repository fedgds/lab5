<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [];
        for($i = 1; $i <= 10; $i++){
            $products[] = [
                'name' => 'Product '.$i,
                'price' => rand(100, 20000),
                'quantity' => rand(1, 20),
                'category_id' => rand(1, 10),
                'image' => null,
                'status' => 1,
            ];
        } 
       DB::table('products')->insert($products);
    }
}
