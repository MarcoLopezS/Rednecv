<?php

use Illuminate\Database\Seeder;
use Rednecv\Entities\Category;

class PostCategoryTableSeeder extends Seeder {

    public function run()
    {
        Category::create([
            'titulo' => 'Noticias',
            'slug_url' => 'noticias',
            'publicar' => 1
        ]);
    }

} 