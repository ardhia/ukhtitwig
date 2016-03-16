<?php

use Illuminate\Database\Seeder;

class TutorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutorial')->insert([
    		'Judul_Tutorial' => 'Tutorial Memakai Pashmina Yang Syar`i',
        	'Isi_Tutorial' => 'Assalamualaikum ukhti, kali ini Annisa mau memberikan sedikit tutorial tentang memakai pashmina yang syar`i dan tentunya nyaman sekaligus cantik hehe.',
    		]);
    }
}
