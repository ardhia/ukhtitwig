<?php

use Illuminate\Database\Seeder;

class PakaianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('pakaian')->insert([
       		'Judul' => 'baju anak',
       		'Photo' => '',
       		'Harga' => '50000',
       		'Jenis_Barang' => 'katun',
       		'Keterangan_Barang' => 'nyaman untuk dipakai,banyak variasi warna pastel ^^',

       	]);
    }
}
