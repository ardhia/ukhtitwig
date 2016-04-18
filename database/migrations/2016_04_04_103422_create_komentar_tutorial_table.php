<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarTutorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_tutorial', function(Blueprint $table){
            $table->increments('No');
            $table->string('nama');
            $table->text('isi_komentar');
            $table->integer('no_tutorial')->unsigned();
            $table->foreign('no_tutorial')->references('No')->on('tutorial');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        //
    }
}
