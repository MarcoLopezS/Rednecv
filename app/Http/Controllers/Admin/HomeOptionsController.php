<?php namespace Rednecv\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Entities\HomeOption;
use Rednecv\Repositories\HomeOptionRepo;

class HomeOptionsController extends Controller {

    protected $rules = [
        'titulo' => 'required',
        'descripcion' => 'required|min:10|max:255',
        'imagen' => 'required'
    ];

    protected $homeOptionRepo;

    public function __construct(HomeOptionRepo $homeOptionRepo)
    {
        $this->middleware('auth');
        $this->homeOptionRepo = $homeOptionRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(Request $request)
    {
        $posts = $this->homeOptionRepo->findAndPaginate($request);
        
        return view('admin.home-options.list', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.home-options.create');
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
        $post = new HomeOption($request->all());
        $this->homeOptionRepo->create($post, $request->all());

        //MENSAJE
        flash()->success('El registro se agregó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.home.options.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = $this->homeOptionRepo->findOrFail($id);

        return view('admin.home-options.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->homeOptionRepo->findOrFail($id);

        return view('admin.home-options.edit', compact('post'));
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
        $post = $this->homeOptionRepo->findOrFail($id);

        //VALIDACION DE DATOS
        $this->validate($request, $this->rules);

        //GUARDAR DATOS
        $this->homeOptionRepo->update($post, $request->all());

        //MENSAJE
        flash()->success('El registro se actualizó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.home.options.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $post = $this->homeOptionRepo->findOrFail($id);
        $post->delete();       

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.home-options.index');
    }

    /**
     * Eliminacion completa de Noticia
     */
    public function destroyTotal($id, Request $request)
    {
        $post = $this->homeOptionRepo->findTrash($id);
        $post->forceDelete();

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.home-options.listsDeletes');
    }
}