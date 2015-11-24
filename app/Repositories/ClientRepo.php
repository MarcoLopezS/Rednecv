<?php namespace Rednecv\Repositories;

use Illuminate\Http\Request;

use Rednecv\Entities\Client;

class ClientRepo extends BaseRepo{

    public function getModel()
    {
        return new Client;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->paginate();
    }
}