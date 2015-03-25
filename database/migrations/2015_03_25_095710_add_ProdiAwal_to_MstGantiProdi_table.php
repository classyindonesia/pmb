<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProdiAwalToMstGantiProdiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_ganti_prodi', function(Blueprint $table)
		{
			$table->integer('ref_prodi_id_awal');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mst_ganti_prodi', function(Blueprint $table)
		{
			$table->dropColumn('ref_prodi_id_awal');
		});
	}

}
