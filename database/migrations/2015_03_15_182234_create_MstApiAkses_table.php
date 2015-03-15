<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstApiAksesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_api_akses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mst_user_id');
			$table->string('api_key');
			$table->tinyInteger('status')->default(1); //1=aktif, 0=tdk aktif
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
		Schema::drop('mst_api_akses');
	}

}
