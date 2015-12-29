<?php namespace Rednecv\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Repositories\ContactoRepo;

class ContactoController extends Controller {

    protected $rules = [
        'mapa' => 'required',
        'email' => 'required|email',
        'direccion' => 'required'
    ];

    private $contactoRepo;
    private $id = 1;

    public function __construct(ContactoRepo $contactoRepo)
    {
        $this->contactoRepo = $contactoRepo;
    }

	/**
	 * Show the form for editing the specified adminconfig.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$contacto = $this->contactoRepo->findOrFail($this->id);

		return view('admin.contacto.edit', compact('contacto'));
	}

	/**
	 * Update the specified adminconfig in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
        //OBTENER REGISTRO
        $contacto = $this->contactoRepo->findOrFail($this->id);

        //VALIDAR
        $this->validate($request, $this->rules);

        //GUARDAR DATOS
        $contacto->fill($request->all());
        $contacto->save();

        //MENSAJE
        flash()->success('El registro se actualizó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.contacto');
	}

}
