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
        	'Judul_Tutorial' => 'Puding Susu Kental Manis',
        	'Isi_Tutorial' => 'Bahan Puding Susu Kental Manis
                                Susu kental manis 1 kaleng
                                Susu putih cair UHT 1 liter
                                Agar-agar putih 1 bungkus
                                Air putih 3 gelas
                                Gula putih 5 sdm
                                Esen rasa almond 1 sdt
                                Koktail secukupnya
                                Nata de coco secukupnya
                                Cara Membuat Puding Susu Kental Manis
                                Langkah awal, campur dan masak semua bahan diatas kecuali esen almond. Ingat, harus diaduk terus supaya susu atau gula tidak lengket di pancinya.
                                Jika sudah sudah mulai mendidih diangkat, tunggu selama 5 menit dan masukkan esen almondnya.
                                Sesudah rada dingin, masukkan kedalam cetakan kecil-kecil, terserah bentuknya apa, sesuaikan dengan selera.
                                Biarkan membeku dan beri nata de coco dan koktail diatasnya sebagai pemanis atau topping.',
        	]);
    }
}
