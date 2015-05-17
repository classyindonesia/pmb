<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstBiodataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_biodata', function(Blueprint $table)
		{
			$table->increments('id');

			// alamat
			$table->string('alamat_email',100);
			$table->string('alamat_fb',100);
			$table->string('alamat_twitter',100);


			//data pribadi
			$table->integer('mst_pendaftaran_id');
			$table->string('nama');
			$table->integer('ref_agama_id');
			$table->string('tempat_lahir');
			$table->date('tgl_lahir');
			$table->string('alamat');
			$table->integer('ref_kota_id');
			$table->enum('jenis_kelamin', ['L', 'P']);

			//sekolah
			$table->integer('ref_sma_id');
			$table->string('tahun_lulus');
			$table->string('no_ijazah');
			$table->integer('alamat_sekolah');


			//kontak pribadi
			$table->string('no_hp', 30);


			// identitas
			$table->integer('ref_identitas_id');
			$table->string('no_identitas');

			//kampus(camaba)
			/*
			* -tgl pendaftaran, langsung ambil dr tabel mst_pendaftaran
			* -prodi : ambil dr tabel mst_pengumuman:ref_prodi_id
			*/
			$table->integer('ref_status_daftar_ulang_id');
			$table->integer('ref_ukuran_almamater_id');




			//status ortu & wali
			$table->string('nama_ortu_ayah');
			$table->string('nama_ortu_ibu');
			$table->integer('ref_penghasilan_ortu_id_ayah');
			$table->integer('ref_penghasilan_ortu_id_ibu');
			$table->integer('ref_pekerjaan_ortu_id_ayah');
			$table->integer('ref_pekerjaan_ortu_id_ibu');
			$table->enum('ket_ortu_ayah', ['hidup', 'meninggal']);
			$table->enum('ket_ortu_ibu', ['hidup', 'meninggal']);
			$table->string('alamat_ortu');
			$table->integer('ref_kota_id_ortu');
			$table->string('no_hp_ortu', 30);
			$table->integer('jml_saudara');
			$table->integer('anak_ke');


			//other
			$table->enum('status', [0,1])->default(0); //0=bs edit,1=tdk bs edit



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
		Schema::drop('mst_biodata');
	}

}
