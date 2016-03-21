<?php

use Illuminate\Database\Seeder;

class SubscribeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribe')->insert([
        	'Email' => 'rinayulyani12@gmail.com',
        ]);
    }
}
