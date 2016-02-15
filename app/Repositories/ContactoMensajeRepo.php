<?php namespace Rednecv\Repositories;

use Illuminate\Http\Request;

use Rednecv\Entities\ContactoMensaje;

class ContactoMensajeRepo extends BaseRepo {

    public function getModel()
    {
        return new ContactoMensaje;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
            ->nombre($request->get('titulo'))
            ->datefrom($request->get('from'))
            ->dateto($request->get('to'))
            ->orderBy('created_at', 'desc')
            ->paginate();
    }

}