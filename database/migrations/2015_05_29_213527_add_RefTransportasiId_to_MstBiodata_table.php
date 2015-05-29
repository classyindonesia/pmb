<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRefTransportasiIdToMstBiodataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_biodata', function(Blueprint $table)
		{
			$table->integer('ref_transportasi_id');
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
			$table->dropColumn('ref_transportasi_id');
		});
	}

}
