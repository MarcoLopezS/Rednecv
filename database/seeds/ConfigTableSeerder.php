<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('configurations')->insert([
    		'id' 			=> 1,
            'titulo'		=> 'Administrador de Contenido',
            'dominio'		=> 'http://cms.dev/',
            'keywords'		=> 'administrador, cms',
            'description'	=> 'Administrador de contenido en L5',
            'twitter'		=> 'marostsac',
            'facebook'		=> 'marostsac'
        ]);
    }

}