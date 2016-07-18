<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJmlDownloadToMstLampiranBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mst_lampiran_berita', function (Blueprint $table) {
            $table->integer('jml_download');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_lampiran_berita', function (Blueprint $table) {
            $table->dropColumn('jml_download');
        });
    }
}
