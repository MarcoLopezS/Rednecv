<?php namespace Rednecv\Repositories;

use Rednecv\Entities\UserProfile;

class UserProfileRepo extends BaseRepo{

    public function getModel()
    {
        return new UserProfile;
    }

}