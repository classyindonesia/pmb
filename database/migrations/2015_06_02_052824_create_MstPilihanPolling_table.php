<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstPilihanPollingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_pilihan_polling', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mst_pertanyaan_polling_id');
			$table->string('pilihan');
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
		Schema::drop('mst_pilihan_polling');
	}

}
