<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetColumnDescriptionUniqueTableProductTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_types', function(Blueprint $table)
		{
			$table->unique('description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_types', function(Blueprint $table)
		{
			$table->dropUnique('product_types_description_unique');
		});
	}

}
