<?php

use Illuminate\Database\Seeder;

class SepatuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('sepatu')->insert([
       		'Judul' => 'sepatu sport',
       		'Photo' => '',
       		'Harga' => '200000',
       		'Jenis_Barang' => 'tahan banting:v',
       		'Keterangan_Barang' => 'dipergunakan hanya untuk dikaki saja',

       	]);
    }
}
