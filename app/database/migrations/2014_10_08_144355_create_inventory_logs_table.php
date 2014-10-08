<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventory_logs', function(Blueprint $table)
		{
            /*
             * No foreign keys in here yet. 
             */
			$table->increments('id');
            $table->integer('product_id')->unsigned(); //FK
            $table->integer('quantity')->unsigned()->default('0');
            $table->integer('transaction_type_id')->unsigned(); //FK
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
		Schema::drop('inventory_logs');
	}

}
