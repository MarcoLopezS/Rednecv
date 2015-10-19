<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Rednecv\Entities\GalleryPhoto;
use Faker\Factory as Faker;

class GalleryPhotosTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<=150; $i++)
        {
            $titulo = $faker->sentence($nbWords = 8);
            $slug_url = Str::slug($titulo);

            $fecha = $faker->date($format = 'Y-m-d', $max = 'now');
            $hora = $faker->time($format = 'H:i:s', $max = 'now');

            GalleryPhoto::create([
                'titulo'    => $titulo,
                'imagen' => $faker->randomElement($array = ['imagen-1.jpg','imagen-2.jpg','imagen-3.jpg','imagen-4.jpg','imagen-5.jpg']),
                'imagen_carpeta' => 'abril2015/',
                'gallery_id' => $faker->randomElement($array = ['1','2','3','4','5','6','7','8','9','10']),
                'publicar' => $faker->randomElement($array = ['0','1'])
            ]);
        }

    }

} 