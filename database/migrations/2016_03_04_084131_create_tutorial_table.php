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
        Schema::create('tutorial',function (Blueprint $table) {
            $table->string('Isi_Tutorial', 10000);
            $table->string('Komentar_Tutorial', 1000);
            $table->integer('Banyaknya_Pengunjung');
            $table->integer('Banyaknya_like');
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
