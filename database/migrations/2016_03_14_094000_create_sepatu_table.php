<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepatuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepatu', function(Blueprint $table){
            $table->increments('No');
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