<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDeliveryLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delivery_logs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('item_id')->unsigned(); // The id of the item from item breakdown. FK.
            $table->integer('quantity')->unsigned();    // The number of items delivered
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
		Schema::drop('delivery_logs');
	}

}
