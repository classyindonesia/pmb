<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsValidToMstPendaftaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_pendaftaran', function(Blueprint $table)
		{
			$table->tinyInteger('is_valid')->default(0)->after('alamat_email');
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
			$table->dropColum('is_valid');
		});
	}

}
