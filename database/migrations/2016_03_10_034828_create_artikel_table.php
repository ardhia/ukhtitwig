<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table){
            $table->increments('No_Artikel');
            $table->string('Username');
            $table->text('Isi_Artikel');
            $table->text('Komentar_Artikel');
            $table->integer('Banyak_pengunjung');
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
