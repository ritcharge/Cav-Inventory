<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSalesPaymentLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_payment_logs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('sales_id')->unsigned();
            $table->float('amount')->unsigned();
            $table->integer('receipt_number')->unsigned();
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
		Schema::drop('sales_payment_logs');
	}

}
