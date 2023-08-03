<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'imagePath' => asset('img/2.png'),
            'title' => 'Producto',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Models\Product([
            'imagePath' => asset('img/2.png'),
            'title' => 'Producto',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Models\Product([
            'imagePath' => asset('img/2.png'),
            'title' => 'Producto',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Models\Product([
            'imagePath' => asset('img/2.png'),
            'title' => 'Producto',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Models\Product([
            'imagePath' => asset('img/2.png'),
            'title' => 'Producto',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);

        $product->save();
    }
}
