<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Rednecv\Entities\Slider;
use Faker\Factory as Faker;

class SliderTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<=5; $i++)
        {
            $titulo = $faker->sentence($nbWords = 8);
            $slug_url = Str::slug($titulo);

            $fecha = $faker->date($format = 'Y-m-d', $max = 'now');
            $hora = $faker->time($format = 'H:i:s', $max = 'now');

            Slider::create([
                'titulo'    => $titulo,
                'slug_url'  => $slug_url,
                'descripcion' => $faker->text($maxNbChars = 200),
                'imagen' => $faker->randomElement($array = ['imagen-10.jpg','imagen-11.jpg','imagen-12.jpg','imagen-13.jpg']),
                'imagen_carpeta' => 'abril2015/'
            ]);
        }

    }

} 