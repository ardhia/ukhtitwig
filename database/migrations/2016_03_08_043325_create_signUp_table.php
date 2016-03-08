<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signUp', function (Blueprint $table) {
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
        Schema::drop('signUp');
    }
}
