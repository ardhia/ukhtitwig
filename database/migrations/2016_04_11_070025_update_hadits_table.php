<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateHaditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2016_04_08_031350_update_tutorial_table.php
        Schema::table('tutorial', function ($table) {
            $table->string('konfirmasi');
            $table->string('user_name');
=======
        Schema::table('hadits', function ($table) {
            $table->string('judul');
>>>>>>> ced5837c5b04cd690ff7143be05572b7fafc0906:database/migrations/2016_04_11_070025_update_hadits_table.php
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
