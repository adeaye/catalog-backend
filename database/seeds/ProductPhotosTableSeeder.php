<?php

use Illuminate\Database\Seeder;

use \Faker\Factory as FF;
class ProductPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $imageChoice = ['animals','cats','people','fashion'];

    	$faker = FF::create();
    	$array = [];

    	for ($i=1; $i <= 1800 ; $i++) 
    	{ 
    		$data = [
    			'product_id' => fmod($i, 600) == 0? 600 : fmod($i, 600),
    			'url' => $faker->imageUrl($width = 640, $height = 480, 'fashion'),
    			'created_at' => date("Y:m:d H:i:s"),
    			'updated_at' => date("Y:m:d H:i:s"),
    			'deleted_at' => null,
    		];
    		array_push($array, $data);
    	}
    	// create 180 modulo 3
    	DB::table('product_photos')->insert($array);
    }
}
