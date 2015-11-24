<?php namespace Rednecv\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Entities\Client;
use Rednecv\Repositories\ClientRepo;

class CompanyClientController extends Controller {

    protected $rules = [
        'titulo' => 'required',
        'descripcion' => 'required|min:10|max:255',
        'contenido' => 'required',
        'imagen' => 'mimes:jpeg,jpg,png'
    ];

    protected $clientRepo;

    public function __construct(ClientRepo $clientRepo)
    {
        $this->middleware('auth');
        $this->clientRepo = $clientRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(Request $request)
    {
        $posts = $this->clientRepo->findAndPaginate($request);

        return view('admin.company-client.list', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.company-client.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        //CREAR CARPETA CON FECHA Y MOVER IMAGEN
        if($request->hasFile('imagen'))
        {
            $this->clientRepo->CrearCarpeta();
            $ruta = "upload/".$this->clientRepo->FechaCarpeta();
            $archivo = $request->file('imagen');
            $imagen = $this->clientRepo->FileMove($archivo, $ruta);
            $imagen_carpeta = $this->clientRepo->FechaCarpeta();
        }else{
            $imagen = "";
            $imagen_carpeta = "";
        }        

        //VARIABLES
        $titulo = $request->input('titulo');

        //GUARDAR DATOS
        $post = new Client($request->all());
        $post->imagen = $imagen;
        $post->imagen_carpeta = $imagen_carpeta;
        $this->clientRepo->create($post, $request->all());

        //MENSAJE
        flash()->success('El registro se agregó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.company.client.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = $this->clientRepo->findOrFail($id);

        return view('admin.company-client.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->clientRepo->findOrFail($id);

        return view('admin.company-client.edit', compact('post'));
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
        $post = $this->clientRepo->findOrFail($id);

        //VALIDACION DE DATOS
        $this->validate($request, $this->rules);

        //VARIABLES
        $titulo = $request->input('titulo');

        //VERIFICAR SI SUBIO IMAGEN
        if($request->hasFile('imagen'))
        {
            $this->clientRepo->CrearCarpeta();
            $ruta = "upload/".$this->clientRepo->FechaCarpeta();
            $archivo = $request->file('imagen');
            $imagen = $this->clientRepo->FileMove($archivo, $ruta);
            $imagen_carpeta = $this->clientRepo->FechaCarpeta();
        }else{
            $imagen = $request->input('imagen_actual');
            $imagen_carpeta = $request->input('imagen_actual_carpeta');
        }

        //GUARDAR DATOS
        $post->imagen = $imagen;
        $post->imagen_carpeta = $imagen_carpeta;
        $this->clientRepo->update($post, $request->except('imagen'));
        
        //MENSAJE
        flash()->success('El registro se actualizó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.company.client.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $post = $this->clientRepo->findOrFail($id);
        $post->delete();       

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.company.client.index');
    }


    /**
     * Generar URL a partir de Titulo de Noticia
     *
     * @param  int  $id
     * @return Response
     */
    public function slugUrl(Request $request)
    {
        $url = $this->clientRepo->SlugUrl($request->input('ajaxTitulo'));

        if($request->ajax())
        {
            return response()->json([
                'url' => $url
            ]);
        }
    }

}