<?php namespace Rednecv\Repositories;

use Rednecv\Entities\Contacto;

class ContactoRepo extends BaseRepo{

    public function getModel()
    {
        return new Contacto;
    }

}