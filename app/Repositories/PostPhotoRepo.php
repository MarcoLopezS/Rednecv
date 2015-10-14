<?php namespace Rednecv\Repositories;

use Rednecv\Entities\PostPhoto;

class PostPhotoRepo extends BaseRepo{

    public function getModel()
    {
        return new PostPhoto;
    }
}