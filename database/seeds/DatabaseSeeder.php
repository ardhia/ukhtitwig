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
        //$this->call(HaditsTableSeeder::class);
        //$this->call(KomentarTableSeeder::class);
        //$this->call(ArsipTableSeeder::class);
        $this->call(HaditsTableSeeder::class);
    }
}
