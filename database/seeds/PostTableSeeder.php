<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Rednecv\Entities\Post;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<=100; $i++)
        {
            $titulo = $faker->sentence($nbWords = 8);
            $slug_url = Str::slug($titulo);

            $fecha = $faker->date($format = 'Y-m-d', $max = 'now');
            $hora = $faker->time($format = 'H:i:s', $max = 'now');

            Post::create([
                'titulo'    => $titulo,
                'slug_url'  => $slug_url,
                'descripcion' => $faker->text($maxNbChars = 200),
                'contenido' => $faker->text($maxNbChars = 1000),
                'imagen' => $faker->randomElement($array = ['imagen-1.jpg','imagen-2.jpg','imagen-3.jpg','imagen-4.jpg','imagen-5.jpg']),
                'imagen_carpeta' => 'abril2015/',
                'publicar' => $faker->randomElement($array = ['0','1']),
                'tags' => '-0,0,0-',
                'category_id' => 1,
                'post_order_id' => 1,
                'published_at' => $fecha." ".$hora
            ]);
        }

    }

} 