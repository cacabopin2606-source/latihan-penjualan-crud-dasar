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
            'name' => 'Iphone 18 Pro Max',
            'description' => 'Iphone 18 PM 2TB',
            'price' => 8000000,
            'stock' => 10,
        ]);
        Product::create([
            'name' => 'Macbook M6',
            'description' => 'Macbook M6 256GB',
            'price' => 50000000,
            'stock' => 50,
        ]);
    }
}
