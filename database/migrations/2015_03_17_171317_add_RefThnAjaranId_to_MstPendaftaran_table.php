<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRefThnAjaranIdToMstPendaftaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_pendaftaran', function(Blueprint $table)
		{
			$table->integer('ref_thn_ajaran_id')->after('jenis_daftar');
			$table->integer('alamat_email')->after('ref_thn_ajaran_id');
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
			$table->dropColumn('ref_thn_ajaran_id');
			$table->dropColumn('alamat_email');
		});
	}

}
