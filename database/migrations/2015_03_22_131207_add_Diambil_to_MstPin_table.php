<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDiambilToMstPinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_pin', function(Blueprint $table)
		{
			$table->tinyInteger('diambil')->default(0)->after('tgl_pakai');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mst_pin', function(Blueprint $table)
		{
			$table->dropColumn('diambil');
		});
	}

}
