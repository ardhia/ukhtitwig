<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '0',
            'name' => 'Admin Ukhti',
            'username' => 'ukhti_19',
			'email' =>  'ukhti19f16@gmail.com',
			'password' =>  'uWsars19.',
            'admin' => '1',
        	]);
    }
}
