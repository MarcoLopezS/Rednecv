<?php namespace Rednecv\Repositories;

use Illuminate\Http\Request;

use Rednecv\Entities\Company;

class CompanyRepo extends BaseRepo{

    public function getModel()
    {
        return new Company;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->paginate();
    }
}