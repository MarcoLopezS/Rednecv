<?php namespace Rednecv\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Entities\Service;
use Rednecv\Repositories\ServiceRepo;

class ServicesController extends Controller {

    protected $rules = [
        'titulo' => 'required',
        'slug_url' => 'required',
        'contenido' => 'required'
    ];

    protected $serviceRepo;

    public function __construct(ServiceRepo $serviceRepo)
    {
        $this->middleware('auth');
        $this->serviceRepo = $serviceRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(Request $request)
    {
        $posts = $this->serviceRepo->findAndPaginate($request);

        return view('admin.services.list', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.services.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);      

        //GUARDAR DATOS
        $post = new Service($request->all());        
        $this->serviceRepo->create($post, $request->all());

        //MENSAJE
        flash()->success('El registro se agregó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.service.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->serviceRepo->findOrFail($id);

        return view('admin.services.edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //BUSCAR ID
        $post = $this->serviceRepo->findOrFail($id);

        //VALIDACION DE DATOS
        $this->validate($request, $this->rules);

        //GUARDAR DATOS
        $this->serviceRepo->update($post, $request->except('imagen'));

        //MENSAJE
        flash()->success('El registro se actualizó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.service.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $post = $this->serviceRepo->findOrFail($id);
        $post->delete();       

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.service.index');
    }


    /**
     * Generar URL a partir de Titulo de Noticia
     *
     * @param  int  $id
     * @return Response
     */
    public function slugUrl(Request $request)
    {
        $url = $this->serviceRepo->SlugUrl($request->input('ajaxTitulo'));

        if($request->ajax())
        {
            return response()->json([
                'url' => $url
            ]);
        }
    }
    
}