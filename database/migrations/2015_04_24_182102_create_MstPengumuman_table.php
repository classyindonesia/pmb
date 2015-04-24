<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstPengumumanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_pengumuman', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mst_pendaftaran_id');
			$table->integer('ref_prodi_id');
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
		Schema::drop('mst_pengumuman');
	}

}
