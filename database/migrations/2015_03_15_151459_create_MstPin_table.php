<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstPinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_pin', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pin');
			$table->tinyInteger('status')->default(0); //0=blm dipakai, 1=sudah dipakai
			$table->date('tgl_pakai')->nullable();
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
		Schema::drop('mst_pin');
	}

}
