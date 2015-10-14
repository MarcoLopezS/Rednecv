<?php

use Illuminate\Database\Seeder;
use Rednecv\Entities\PostOrder;

class PostOrderTableSeeder extends Seeder {

    public function run()
    {
        PostOrder::create([
            'titulo'    => 'Primero',
            'orden'     => '1'
        ]);
    }

} 