<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRefStatusDaftarUlangIdToMstPengumumanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_pengumuman', function(Blueprint $table)
		{
			$table->integer('ref_status_daftar_ulang_id')->after('ref_prodi_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mst_pengumuman', function(Blueprint $table)
		{
			$table->dropColumn('ref_status_daftar_ulang_id');
		});
	}

}
