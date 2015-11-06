<?php namespace Rednecv\Repositories;

use Illuminate\Http\Request;

use Rednecv\Entities\HomeOption;

class HomeOptionRepo extends BaseRepo{

    public function getModel()
    {
        return new HomeOption;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->paginate();
    }
}