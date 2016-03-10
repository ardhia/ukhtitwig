<?php

use Illuminate\Database\Seeder;

class TutorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tutorial')->insert([
        	'Username' => 'Rina12',
        	'Isi_Tutorial' => 'Tutorial hijab syar`i',
        	'Komentar_Tutorial' => 'wwahhh baguuss sekaliii :p',
        	'Banyak_pengunjung' => '10000',
        	'Banyak_like' => '5000',
        	]);
    }
}
