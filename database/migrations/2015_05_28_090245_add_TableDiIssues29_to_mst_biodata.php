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
			$table->integer('ref_tinggal_id')->after('alamat');
			$table->enum('kewarganegaraan', ['wni', 'wna'])->after('alamat');
			$table->string('no_telepon', 20)->after('no_hp');
			$table->string('keterangan_sma')->after('ref_sma_id')->nullable();

			$table->date('tgl_lahir_ayah')->after('alamat_ortu');
			$table->date('tgl_lahir_ibu')->after('alamat_ortu');
			$table->integer('ref_pendidikan_id_ayah')->after('alamat_ortu');
			$table->integer('ref_pendidikan_id_ibu')->after('alamat_ortu');


			$table->dropColumn('ref_status_daftar_ulang_id');


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
			$table->integer('ref_status_daftar_ulang_id')->after('status');


			$table->dropColumn('rt');
			$table->dropColumn('rw');
			$table->dropColumn('kode_pos');
			$table->dropColumn('kewarganegaraan');
			$table->dropColumn('ref_tinggal_id');
			$table->dropColumn('no_telepon'); 
			$table->dropColumn('keterangan_sma'); 

			$table->dropColumn('tgl_lahir_ayah'); 
			$table->dropColumn('tgl_lahir_ibu'); 
			$table->dropColumn('ref_pendidikan_id_ayah'); 
			$table->dropColumn('ref_pendidikan_id_ibu'); 

			
		});
	}

}
