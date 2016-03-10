<?php

use Illuminate\Database\Seeder;

class TokoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Toko')->insert([
        	'Nama_Barang' => 'Pakaian anak',
        	'Harga' => '50000',
        	'Jenis_Barang' => 'Pakaian',
        	'Ket_Barang' => 'bahan katun,untuk usia 1-5thn,nyaman untuk dipakai',
        	]);
    }
}
