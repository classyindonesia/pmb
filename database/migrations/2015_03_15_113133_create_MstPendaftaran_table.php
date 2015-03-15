<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstPendaftaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_pendaftaran', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->string('no_pendaftaran');

			/* biodata */
			$table->string('nama');
			$table->string('tempat_lahir');
			$table->date('tgl_lahir');
			$table->string('alamat');
			$table->enum('jenis_kelamin', ['L', 'P']);
			$table->string('no_hp');


			/* data akademik */
			$table->integer('thn_lulus');
			$table->string('no_ijazah');




			/*ref*/
			$table->integer('ref_sma_id');
			$table->integer('ref_prodi_id1');
			$table->integer('ref_prodi_id2');
			$table->integer('ref_gelombang_id');


			$table->tinyInteger('jenis_daftar'); //1=online, 0=offline




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
		Schema::drop('mst_pendaftaran');
	}

}
