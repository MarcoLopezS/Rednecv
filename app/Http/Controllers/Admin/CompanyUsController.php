<?php namespace Rednecv\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Entities\Company;
use Rednecv\Repositories\CompanyRepo;

class CompanyUsController extends Controller {

    protected $rules = [
        'titulo' => 'required',
        'contenido' => 'required'
    ];

    protected $companyRepo;
    private $id = 1;

    public function __construct(CompanyRepo $companyRepo)
    {
        $this->middleware('auth');
        $this->companyRepo = $companyRepo;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        $company = $this->companyRepo->findOrFail($this->id);

        return view('admin.company.edit', compact('company'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        //BUSCAR ID
        $post = $this->companyRepo->findOrFail($this->id);

        //VALIDACION DE DATOS
        $this->validate($request, $this->rules);

        //GUARDAR DATOS
        $this->companyRepo->update($post, $request->except('imagen'));

        //MENSAJE
        flash()->success('El registro se actualizó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.company.us.edit');
    }

}