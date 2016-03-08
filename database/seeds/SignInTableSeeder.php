<?php

use Illuminate\Database\Seeder;

class SignInTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('signIn')->insert([
			'email' =>  'ardhia.marliana@gmail.com',
			'password' =>  'abcd',
        	]);
    }
}
