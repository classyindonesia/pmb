<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeteranganPerguruanTinggiToMstBiodataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_biodata', function(Blueprint $table)
		{
			$table->string('keterangan_perguruan_tinggi');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mst_biodata', function(Blueprint $table)
		{
			$table->dropColumn('keterangan_perguruan_tinggi');
		});
	}

}
