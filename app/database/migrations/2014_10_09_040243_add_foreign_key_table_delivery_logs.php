<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTableDeliveryLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('delivery_logs', function(Blueprint $table)
		{
			$table->foreign('item_id')->references('id')->on('item_breakdown')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('delivery_logs', function(Blueprint $table)
		{
			$table->dropForeign('delivery_logs_item_id_foreign');
		});
	}

}
