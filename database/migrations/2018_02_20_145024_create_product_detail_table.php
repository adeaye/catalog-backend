<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id');
            $table->string('description');
            $table->string('color');
            $table->string('brand');
            $table->integer('stock');
            $table->integer('normal_price');
            $table->integer('discount_price')->nullable();
            $table->enum('size',['S','M','L']);
            $table->timestamp('created_at');//->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at');//->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_detail');
    }
}
