<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranOnlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_pendaftaran_online', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pin', 20);


			/* biodata */
			$table->string('nama');
			$table->string('tempat_lahir');
			$table->date('tgl_lahir');
			$table->string('alamat');
			$table->enum('jenis_kelamin', ['L', 'P']);
			$table->string('no_hp');
			$table->string('alamat_email');


			/* data akademik */
			$table->integer('thn_lulus');
			$table->string('no_ijazah');

 

			/*ref*/
			$table->integer('ref_sma_id');
			$table->integer('ref_prodi_id1');
			$table->integer('ref_prodi_id2');


			$table->tinyInteger('status')->default(0); //0=blm tervalidasi 


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
		Schema::drop('mst_pendaftaran_online');
	}

}
