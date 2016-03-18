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
        	'Isi_Tutorial' => 'Assallamualaikum Ukhti, apa kabarnya hari ini? Semoga kita dalam keadaan yang baik sehat wal`afiat Aaamiiinnn :). Kali ini saya akan memberitahu cara memakai pashmina yang syar`i dan tentunya cantik serta nyaman',
        	]);
    }
}
