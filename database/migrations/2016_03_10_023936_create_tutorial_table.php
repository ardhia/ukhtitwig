<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial', function (Blueprint $table){
            $table->increments('No_Tutorial');
            $table->string('Username');
            $table->text('Isi_Tutorial');
            $table->text('Komentar_Tutorial');
            $table->integer('Banyak_Pengunjung');
            $table->integer('Banyak_like');

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
