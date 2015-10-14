<?php namespace Rednecv\Repositories;

use Rednecv\Entities\PostOrder;

class PostOrderRepo extends BaseRepo{

    public function getModel()
    {
        return new PostOrder;
    }

}