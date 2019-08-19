<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use \Faker\Factory as FF;
class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$size = ['S','M','L'];
    	$discount = [NULL,rand(75000, 89000)];

    	$faker = FF::create();
    	$array = [];

    	for ($i=1; $i <= 600; $i++) {
    		$data = [
	            'product_id' => $i,
	            'description' => $faker->paragraph,
	            'color' => $faker->colorName,
	            'brand' => $faker->company,
	            'stock' => rand(1,10),
	            'normal_price' => rand(100000,150000),
	            'discount_price' => $discount[rand(0,1)],
	            'size' => $size[rand(0,2)],
	            'created_at' => date("Y:m:d H:i:s"),
	            'updated_at' => date("Y:m:d H:i:s"),
	            'deleted_at' => null,
	        ];
    		array_push($array, $data);
    	}

    	// modulo prod_id

        DB::table('product_detail')->insert($array);
    }
}
