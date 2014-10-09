<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyForColumnTransactionTypeId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inventory_logs', function(Blueprint $table)
		{
			$table->foreign('transaction_type_id')->references('id')->on('transaction_types');
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
			$table->dropForeign('inventory_logs_transaction_type_id_foreign');
		});
	}

}
