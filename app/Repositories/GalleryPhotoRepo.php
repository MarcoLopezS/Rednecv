<?php namespace Rednecv\Repositories;

use Rednecv\Entities\GalleryPhoto;

class GalleryPhotoRepo extends BaseRepo {

    public function getModel()
    {
        return new GalleryPhoto;
    }
}