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
        // $this->call(UserTableSeeder::class);
        //$this->call(SignUpTableSeeder::class);
        $this->call(ArtikelTableSeeder::class);
        //$this->call(TutorialTableSeeder::class);
        //$this->call(TokoTableSeeder::class);
        
    }
}
