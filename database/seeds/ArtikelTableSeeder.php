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
        DB::table('artikel')->insert ([
        	'Judul_Artikel' => 'Manfaat',
        	'Isi_Artikel' => 'Manfaat sholat bagi kesehatan dan jangan lupa shalat. yuu shalat anak anak haha',
        	]);
    }
}
