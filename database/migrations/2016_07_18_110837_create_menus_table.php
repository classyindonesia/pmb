<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->enum('is_internal', [1,0])->default(0);
            $table->string('link');
            $table->integer('parent_id');
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
        Schema::drop('mst_menu');
    }
}
