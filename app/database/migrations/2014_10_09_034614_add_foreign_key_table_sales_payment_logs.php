<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTableSalesPaymentLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sales_payment_logs', function(Blueprint $table)
		{
			$table->foreign('sales_id')->references('id')->on('sales')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sales_payment_logs', function(Blueprint $table)
		{
			$table->dropForeign('sales_payment_logs_sales_id_foreign');
		});
	}

}
