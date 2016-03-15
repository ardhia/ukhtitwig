<?php

use Illuminate\Database\Seeder;

class AksesorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('aksesoris')->insert([
       		'Judul' => 'bros',
       		'Photo' => '',
       		'Harga' => '10000',
       		'Jenis_Barang' => 'flanel',
       		'Keterangan_Barang' => 'tersedia berbagai variasi model dan warna',

       	]);
    }
}
