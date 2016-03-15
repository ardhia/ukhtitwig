<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dll', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Judul');
            $table->string('Photo');
            $table->integer('Harga');
            $table->text('Jenis_Barang');
            $table->text('Keterangan');

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
