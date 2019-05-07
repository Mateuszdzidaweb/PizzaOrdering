<?php

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


        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Original',
            'size' => 'Small',
            'description' => 'Cheese, tomato sauce',
            'price' => 8
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Original',
            'size' => 'Medium',
            'description' => 'Cheese, tomato sauce',
            'price' => 9
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Original',
            'size' => 'Large',
            'description' => 'Cheese, tomato sauce',
            'price' => 11
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Gimme the Meat',
            'size' => 'Small',
            'description' => 'Pepperoni, ham, chicken, minced beef, sausage, bacon',
            'price' => 11
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Gimme the Meat',
            'size' => 'Medium',
            'description' => 'Pepperoni, ham, chicken, minced beef, sausage, bacon',
            'price' => 14.50
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Gimme the Meat',
            'size' => 'Large',
            'description' => 'Pepperoni, ham, chicken, minced beef, sausage, bacon',
            'price' => 16.50
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Veggie Delight',
            'size' => 'Small',
            'description' => 'Onions, green pepers, musherooms, sweetcorn',
            'price' => 10
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Veggie Delight',
            'size' => 'Medium',
            'description' => 'Onions, green pepers, musherooms, sweetcorn',
            'price' => 13
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Veggie Delight',
            'size' => 'Large',
            'description' => 'Onions, green pepers, musherooms, sweetcorn',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Make Mine Hot',
            'size' => 'Small',
            'description' => 'Chicken, onions, green peppers, jalapeno peppers',
            'price' => 11
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Make Mine Hot',
            'size' => 'Medium',
            'description' => 'Chicken, onions, green peppers, jalapeno peppers',
            'price' => 13
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://dzida.mateusz-dzida.com/peperoni.png',
            'type' => 'Make Mine Hot',
            'size' => 'Large',
            'description' => 'Chicken, onions, green peppers, jalapeno peppers',
            'price' => 15
        ]);
        $product->save();

    }
}
