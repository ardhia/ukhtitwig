<?php

use Illuminate\Database\Seeder;

class KomentarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komentar')->insert([
        	'Tanggal'=> '',
        	'Nama_Pengunjung' => 'Siti',
        	'Isi_Komentar' => 'Artikelnya sangat bagus, saya suka',
        	]);
    }
}
