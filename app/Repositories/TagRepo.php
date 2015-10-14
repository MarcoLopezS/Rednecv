<?php namespace Rednecv\Repositories;

use Rednecv\Entities\Tag;

class TagRepo extends BaseRepo {

    public function getModel()
    {
        return new Tag;
    }
}