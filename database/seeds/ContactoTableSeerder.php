<?php

use Illuminate\Database\Seeder;

class ContactoTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('contactos')->insert([
    		'id' 		=> 1,
            'mapa'		=> '-12.077700, -76.979684',
            'telefono'	=> '000000000000',
            'email'		=> 'web@rednecv.com',
            'direccion'	=> 'Av. Nueva direccion 124'
        ]);
    }

}