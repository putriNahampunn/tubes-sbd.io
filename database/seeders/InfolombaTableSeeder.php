<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InfoLombaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('infolombas')->truncate();

        \DB::table('infolombas')->insert([
            [
                'author_id' => 1,
                'gambar' => 'gambar_infolomba/sXMjfsARN0eqSfKPi3fMmKm5KbB8bSobMBAijoqh.webp',
                'judul_lomba' => 'Persiapan untuk Musim Hujan',
                'deskripsi_lomba' => 'Baik gerimis mengundang untuk ngemil atau hujan deras yang bikin pengen terus narik selimut, minumnya sama-sama harus yang hangat!

                Nah itu mengapa, Mamah selalu siapkan wedangan untuk anak-anak Mamah yang pada doyan ngemil ini. Satu-satu yah Mamah ajarin, jadi kalau lagi jauh pada bisa bikin sendiri-sendiri. Walau rasanya ngga seenak punya Mamah, hihi sengaja Mamah ngga kasih satu rempah paling rahasia, biar kangen terus sama Mamah.',
                'excerpt' => 'Baik gerimis mengundang untuk ngemil atau hujan deras yang bikin pengen terus narik selimut, minumnya sama-sama harus yang hangat!'

            ],
            
        ]);
    }
}
