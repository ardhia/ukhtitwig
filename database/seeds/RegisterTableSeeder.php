<?php

use Illuminate\Database\Seeder;

class RegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('register')->insert([
        	'nama_lengkap' => 'Ardhia Marliana',
        	'username' =>  'ardhia',
        	'tempat_lahir' =>  'Bandung',
			'tanggal_lahir' =>  date('1999/03/04'),
			'jenis_kelamin' =>  'Perempuan',
			'status' =>  'Lajang',
			'email' =>  'ardhia.marliana@gmail.com',
			'al_email' =>  'ardhia.marliana@yahoo.co.id',
			'password' =>  'abcd',
        	]);
    }
}
