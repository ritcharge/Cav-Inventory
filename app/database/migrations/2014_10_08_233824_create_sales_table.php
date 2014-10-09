<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales', function(Blueprint $table)
		{
			$table->increments('id'); // Sales number. PK
            $table->string('customer_name');
            $table->string('customer_contact');
            $table->integer('added_by')->unsigned()->nullable();    // The user who created this sales record. FK.
            // Tinanggal ko yung total amount kasi parang nadederive naman and data na iyon.
            $table->float('balance')->unsigned();
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
		Schema::drop('sales');
	}

}
