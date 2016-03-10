<?php

use Illuminate\Database\Seeder;

class ArsipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arsip')->insert([
        	'Tanggal'=>'2016-03-10',
        	'Username'=>'Annisa12051996',
        	'Judul'=>'Tutorial Memakai Pashmina Yang Syar`i',
        	]);
    }
}
