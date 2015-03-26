<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstPenggunaPinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_pengguna_pin', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mst_pendaftaran_id');
			$table->integer('mst_pin_id');
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
		Schema::drop('mst_pengguna_pin');
	}

}
