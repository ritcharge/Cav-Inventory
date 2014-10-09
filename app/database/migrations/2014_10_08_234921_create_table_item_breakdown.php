<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableItemBreakdown extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_breakdown', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('sales_id')->unsigned();    // FK
            $table->integer('product_id')->unsigned();  // FK
            $table->integer('quantity')->unsigned()->default(1);
            $table->integer('delivered_qty')->unsigned()->default(0);
            // About delivered_qty
            // For now, let's do it like this. If we get more time, I might just derive this value from
            // the delivery logs and drop this column.
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
		Schema::drop('item_breakdown');
	}

}
