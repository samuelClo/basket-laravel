
<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 10; $i++){
            $product = new Product;

            $product->name = $faker->realText(20);
            $product->description = $faker->realText(50);
            $product->price = rand(0.2, 40);
            $product->colors = $faker->hexcolor;
            $product->size = rand(20, 40);
            $product->quantity = rand(1, 10);
            $product->picture_path = $faker->imageUrl($width = 640, $height = 480) ;

            $product->save();
        }
    }
}
