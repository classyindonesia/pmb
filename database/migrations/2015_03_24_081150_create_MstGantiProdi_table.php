<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstGantiProdiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_ganti_prodi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integet('mst_pendaftaran_id');
			$table->integer('ref_prodi_id');
			$table->enum('prodi_pilihan', ['1', '2']);
			$table->tinyInteger('status')->default(0); //1=disetujui, 2=ditolak, 0=menunggu
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
		Schema::drop('mst_ganti_prodi');
	}

}
