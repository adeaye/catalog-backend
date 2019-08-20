<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use \Faker\Factory as FF;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// create 60
    	$faker = FF::create();
    	$array = [];

    	for ($i=1; $i <= 600; $i++) {
    		$data = [
    			'name' => 'F '.$faker->name,
    			'category_id' => rand(1,5),
    			'created_at' => date("Y:m:d H:i:s"),
    			'updated_at' => date("Y:m:d H:i:s"),
    			'deleted_at' => null,
    		];
    		array_push($array, $data);
    	}

    	DB::table('product')->insert($array);
    }
}
