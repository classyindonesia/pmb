<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeteranganSmaToMstPendaftaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_pendaftaran', function(Blueprint $table)
		{
			$table->string('keterangan_sma')->after('ref_sma_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mst_pendaftaran', function(Blueprint $table)
		{
			$table->dropColumn('keterangan_sma');
		});
	}

}
