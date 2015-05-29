<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRefProdiIdPtToMstBiodataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_biodata', function(Blueprint $table)
		{
			$table->integer('ref_prodi_id_pt');
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
			$table->dropColumn('ref_prodi_id_pt');
		});
	}

}
