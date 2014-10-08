<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('product_name')->unique();
            $table->float('selling_price')->unsigned()->default('0.00');
            $table->integer('quantity')->unsigned()->default('0');
            $table->integer('product_type_id')->unsigned()->nullable();
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('set null')->onUpdate('cascade');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null')->onUpdate('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
