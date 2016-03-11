<?php

use Illuminate\Database\Seeder;

class HaditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hadits')->insert([
        	'Isi_Hadits' =>'Abdullah bin Amr radhiyallahuanhuma meriwayatkan sabda Rasulullah Shalallahualaihi wa sallam : "Sesungguhnya dunia itu adalah perhiasan dan sebaik-baik perhiasan dunia adalah wanita shalihah."',
        	'Sumber_HR' =>'HR. Muslim no. 1467',
        	'Jenis_Hadits' =>'Wanita',
        	]);
       
        DB::table('hadits')->insert([
        	'Isi_Hadits' =>'Rasulullah Shalallahualaihi wa Sallam bersabda bagi lelaki yang ingin menikah :"Wanita itu dinikahi karena empat perkara yaitu karena hartanya, karena keturunannya, karena kecantikannya, dan karena agamanya. Maka pilihlah olehmu wanita yang punya agama, engkau akan beruntung".',
        	'Sumber_HR' =>'HR. Al-Bukhari no. 5090 dan Muslim no. 1466',
        	'Jenis_Hadits' =>'Wanita',
        	]);

    }
}
