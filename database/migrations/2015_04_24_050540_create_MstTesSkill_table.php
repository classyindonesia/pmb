<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstTesSkillTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_tes_skill', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mst_pendaftaran_id');
			$table->integer('ref_ruang_id');
			$table->integer('ref_tes_skill_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mst_tes_skill');
	}

}
