<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

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
        });

        Schema::create('signIn', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->string('al_email');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
