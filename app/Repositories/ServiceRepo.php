<?php namespace Rednecv\Repositories;

use Illuminate\Http\Request;

use Rednecv\Entities\Service;

class ServiceRepo extends BaseRepo{

    public function getModel()
    {
        return new Service;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->paginate();
    }
}