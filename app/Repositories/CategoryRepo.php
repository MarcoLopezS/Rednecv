<?php namespace Rednecv\Repositories;

use Illuminate\Http\Request;

use Rednecv\Entities\Category;

class CategoryRepo extends BaseRepo {

    public function getModel()
    {
        return new Category;
    }
}