<?php

use Illuminate\Database\Seeder;

class KerudungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Kerudung')->insert([
        	'Judul' => 'Pashmina',
        	'Photo' => '',
        	'Harga' => '23000',
        	'Jenis_Barang' => 'kerudung',
        	'Keterangan_Barang' => 'Kerudung ini nyaman dipakai, dibuat dari kain katun pilihan dan tentunya modis',
        	]);
    }
}
