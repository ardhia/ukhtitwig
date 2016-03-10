<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama_lengkap');
            $table->string('username');
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('jenis_kelamin');
            $table->string('status');
            $table->string('email');
            $table->string('al_email');
            $table->string('password');
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
