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
        //$this->call(DllTableSeeder::class);
        //$this->call(ArtikelTableSeeder::class); 
        //$this->call(TutorialTableSeeder::class);
        $this->call(HaditsTableSeeder::class);

    	//$this->call(MakananTableSeeder::class);
    	//$this->call(PakaianTableSeeder::class);
    	//$this->call(AksesorisTableSeeder::class);
    	//$this->call(SepatuTableSeeder::class);
    	//$this->call(TasTableSeeder::class);
        //$this->call(SubscribeTableSeeder::class);




    }

}
