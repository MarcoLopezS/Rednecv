<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
    	\DB::table('users')->insert([
    		'id' => 1,
            'email'     => 'marcolopez49@hotmail.com',
            'password'  => \Hash::make('admin'),
            'type'      => 'admin'
        ]);

        \DB::table('user_profiles')->insert([
        	'nombre'	=> 'Marco',
        	'apellidos' => 'Lopez',
        	'user_id'	=> 1
        ]);

    }

} 