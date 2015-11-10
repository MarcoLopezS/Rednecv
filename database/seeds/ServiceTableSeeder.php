<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Rednecv\Entities\Service;
use Faker\Factory as Faker;

class ServiceTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<=8; $i++)
        {
            $titulo = $faker->sentence($nbWords = 4);
            $slug_url = Str::slug($titulo);

            Service::create([
                'titulo'    => $titulo,
                'slug_url'  => $slug_url,
                'contenido' => $faker->text($maxNbChars = 2000)
            ]);
        }

    }

} 