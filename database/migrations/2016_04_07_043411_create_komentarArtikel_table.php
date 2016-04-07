<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_artikel', function(Blueprint $table){
            $table->increments('No');
            $table->string('nama');
            $table->text('isi_komentar');
            $table->integer('no_artikel')->unsigned();
            $table->foreign('no_artikel')->references('No')->on('artikel');
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
