<?php

use Illuminate\Database\Seeder;

class TasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tas')->insert([
       		'Judul' => 'tas kulit',
       		'Photo' => '',
       		'Harga' => '1000000',
       		'Jenis_Barang' => 'kulit',
       		'Keterangan_Barang' => 'terbuat dari kulit buaya',

       	]);
    }
}
