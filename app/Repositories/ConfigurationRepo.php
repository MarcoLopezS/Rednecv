<?php namespace Rednecv\Repositories;

use Rednecv\Entities\Configuration;

class ConfigurationRepo extends BaseRepo{

    public function getModel()
    {
        return new Configuration;
    }

}