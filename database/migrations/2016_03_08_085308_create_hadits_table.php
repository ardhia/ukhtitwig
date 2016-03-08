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
        Schema:: create('Hadits', function (Blueprint $table) {
            $table->text('Isi_Hadits');
            $table->text('Sumber_HR');
            $table->text('Jenis_Hadits');
            $table->text('Komentar_Hadits');

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
