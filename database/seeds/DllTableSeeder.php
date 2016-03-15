<?php

use Illuminate\Database\Seeder;

class DllTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dll')->insert([
        	'Judul' => 'I Phone 6',
        	'Photo' => '',
        	'Harga' => '1.000.000',
        	'Jenis_Barang' => 'Gadget',
        	'Keterangan' => 'I Phone 6 seri terbaru dari handphone keluaran Apple',
        	]);
    }
}
