<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('configurations')->insert([
    		'id' 			=> 1,
            'titulo'		=> 'Red de Neurociencias y Educación con Valores',
            'dominio'		=> 'http://red.dev/',
            'keywords'		=> 'administrador, cms',
            'description'	=> 'Red de Neurociencias y Educación con Valores',
            'twitter'		=> '',
            'facebook'		=> ''
        ]);
    }

}