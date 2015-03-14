<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefGelombangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ref_gelombang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->integer('ref_thn_ajaran_id');
			$table->integer('biaya');
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
		Schema::drop('ref_gelombang');
	}

}
