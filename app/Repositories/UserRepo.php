<?php namespace Rednecv\Repositories;

use Illuminate\Http\Request;

use Rednecv\Entities\User;

class UserRepo extends BaseRepo{

    public function getModel()
    {
        return new User;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->email($request->get('email'))
                    ->orderBy('email', 'asc')
                    ->paginate();
    }

}