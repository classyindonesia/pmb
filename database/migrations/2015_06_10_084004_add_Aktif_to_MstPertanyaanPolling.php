<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAktifToMstPertanyaanPolling extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_pertanyaan_polling', function(Blueprint $table)
		{
			$table->enum('aktif', [1,0])->default(1)->after('pertanyaan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mst_pertanyaan_polling', function(Blueprint $table)
		{
			$table->dropColumn('aktif');
		});
	}

}
