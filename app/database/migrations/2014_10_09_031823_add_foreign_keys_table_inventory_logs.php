<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysTableInventoryLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inventory_logs', function(Blueprint $table)
		{
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inventory_logs', function(Blueprint $table)
		{
			$table->dropForeign('inventory_logs_product_id_foreign');
		});
	}

}
