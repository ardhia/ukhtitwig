<?php

use Illuminate\Database\Seeder;

class KomentarTutorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komentar_tutorial')->insert([
        	'nama'=> 'indah',
        	'isi_komentar' => 'Artikelnya sangat bagus, saya suka',
        	]);
    }
}
