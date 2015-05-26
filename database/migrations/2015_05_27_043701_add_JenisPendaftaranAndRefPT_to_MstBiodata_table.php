<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJenisPendaftaranAndRefPTToMstBiodataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_biodata', function(Blueprint $table)
		{
			$table->enum('jenis_pendaftaran', ['sma', 'transfer'])->default('sma')->after('status');
			$table->integer('ref_perguruan_tinggi_id')->nullable()->after('anak_ke');
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
			$table->dropColumn('jenis_pendaftaran');
			$table->dropColumn('ref_perguruan_tinggi_id');
		});
	}

}
