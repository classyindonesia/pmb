<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstJawabanPollingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_jawaban_polling', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mst_pertanyaan_polling_id');
			$table->integer('mst_pilihan_polling_id');
			$table->integer('mst_user_id');
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
		Schema::drop('mst_jawaban_polling');
	}

}
