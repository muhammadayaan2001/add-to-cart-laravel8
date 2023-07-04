<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Product One',
                'description' => 'Best selling product',
                'image' => asset('assets/images/ats.png'),
                'price' => 100
            ],
            [
                'name' => 'Product Two',
                'description' => 'Number one product',
                'image' => asset('assets/images/ats.png'),
                'price' => 500
            ],
            [
                'name' => 'Product Three',
                'description' => 'New Brand',
                'image' => asset('assets/images/ats.png'),
                'price' => 400
            ],
            [
                'name' => 'Product Four',
                'description' => 'Branded Shoe',
                'image' => asset('assets/images/ats.png'),
                'price' => 200
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
