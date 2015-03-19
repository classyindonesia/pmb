<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerkasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_berkas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mst_pendaftaran_id');
			$table->integer('ref_jenis_berkas_id');
			$table->string('nama_file_asli');
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
		Schema::drop('mst_berkas');
	}

}
