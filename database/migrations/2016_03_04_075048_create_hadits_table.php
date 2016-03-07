<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Hadits', function (Blueprint $table) {
            $table->string('Isi_Hadits', 5000);
            $table->string('Sumber_HR', 1000);
            $table->string('Jenis_Hadits', 1000);
            $table->string('Komentar_Hadits', 1000);
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
