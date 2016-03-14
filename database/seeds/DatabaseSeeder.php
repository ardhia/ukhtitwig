<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(TutorialTableSeeder::class);
        //$this->call(KerudungTableSeeder::class);
        $this->call(DllTableSeeder::class);
    }

}
