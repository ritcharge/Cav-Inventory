<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTableItemBreakdown extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('item_breakdown', function(Blueprint $table)
		{
			$table->foreign('sales_id')->references('id')->on('sales')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::table('item_breakdown', function(Blueprint $table)
		{
			$table->dropForeign('item_breakdown_sales_id_foreign');
			$table->dropForeign('item_breakdown_product_id_foreign');
		});
	}

}
