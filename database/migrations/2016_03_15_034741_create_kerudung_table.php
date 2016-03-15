<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKerudungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('kerudung', function (Blueprint $table){
            $table->increments('Id');
            $table->text('Judul');
            $table->string('Photo');
            $table->integer('Harga');
            $table->text('Jenis_Barang');
            $table->text('Keterangan_Barang');
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
