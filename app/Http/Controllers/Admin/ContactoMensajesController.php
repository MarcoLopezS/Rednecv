<?php namespace Rednecv\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Repositories\ContactoMensajeRepo;

class ContactoMensajesController extends Controller {

    private $contactoMensajeRepo;

    public function __construct(ContactoMensajeRepo $contactoMensajeRepo)
    {
        $this->contactoMensajeRepo = $contactoMensajeRepo;
    }

	/**
	 * Show the form for editing the specified adminconfig.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index(Request $request)
	{
		$mensajes = $this->contactoMensajeRepo->findAndPaginate($request);

		return view('admin.contacto-mensajes.list', compact('mensajes'));
	}

	public function show($id, Request $request)
	{
		$mensaje = $this->contactoMensajeRepo->findOrFail($id);

		$mensaje->leido = 1;
        $this->contactoMensajeRepo->update($mensaje, $request->all());

		return view('admin.contacto-mensajes.show', compact('mensaje'));
	}
	
}