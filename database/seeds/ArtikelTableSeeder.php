<?php

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
    	DB::table('Artikel')->insert ([
        	'Username' => 'Rina12',
        	'Isi_Artikel' => 'Manfaat sholat bagi kesehatan',
        	'Komentar_Artikel' => 'waaahh bermanfaat sekaliii :D',
        	'Banyak_Pengunjung' => '10000',
        	'Banyak_like' => '5000',
        	]);
    }
}
