<?php

use Illuminate\Database\Seeder;

class MakananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('makanan')->insert([
       		'Judul' => 'seblak',
       		'Photo' => '',
       		'Harga' => '7000',
       		'Jenis_Barang' => 'makanan',
       		'Keterangan_Barang' => 'seblak mengandung senyawa yang dapat bermanfaat mengenyangkan perut :v',

       	]);
    }
}
