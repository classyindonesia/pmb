<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableDiIssues29ToMstBiodata extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mst_biodata', function(Blueprint $table)
		{
			$table->string('rt', 10)->after('alamat');
			$table->string('rw', 10)->after('alamat');
			$table->string('kode_pos', 10)->after('alamat');
			$table->enum('kewarganegaraan', ['wni', 'wna']);
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
			$table->dropColumn('rt');
			$table->dropColumn('rw');
			$table->dropColumn('kode_pos');
			$table->dropColumn('kewarganegaraan');

		});
	}

}
