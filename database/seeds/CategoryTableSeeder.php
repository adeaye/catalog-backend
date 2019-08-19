<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
        [
            'name' => 'Celana',
            'created_at' => date("Y:m:d H:i:s"),
            'updated_at' => date("Y:m:d H:i:s"),
            'deleted_at' => null,
        ],
        [
            'name' => 'Baju',
            'created_at' => date("Y:m:d H:i:s"),
            'updated_at' => date("Y:m:d H:i:s"),
            'deleted_at' => null,
        ],
        [
            'name' => 'Rok',
            'created_at' => date("Y:m:d H:i:s"),
            'updated_at' => date("Y:m:d H:i:s"),
            'deleted_at' => null,
        ],
        [
            'name' => 'Sepatu',
            'created_at' => date("Y:m:d H:i:s"),
            'updated_at' => date("Y:m:d H:i:s"),
            'deleted_at' => null,
        ],
        [
            'name' => 'Jilbab',
            'created_at' => date("Y:m:d H:i:s"),
            'updated_at' => date("Y:m:d H:i:s"),
            'deleted_at' => null,
        ],
    ]);
    }
}
