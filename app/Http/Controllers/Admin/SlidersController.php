<?php namespace Rednecv\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Entities\Slider;
use Rednecv\Repositories\SliderRepo;

class SlidersController extends Controller {

    protected $sliderRepo;

    public function __construct(SliderRepo $sliderRepo)
    {
    	$this->middleware('auth');
        $this->sliderRepo = $sliderRepo;
    }

	/**
	 * Display a listing of the resource.
	 * GET /adminsliders
	 *
	 * @return Response
	 */
	public function index()
	{
		$photos = $this->sliderRepo->orderBy('orden', 'asc');

        return view('admin.sliders.list', compact('photos'));

	}

	public function order(Request $request)
    {
        if($request->ajax())
        {
            $sortedval = $_POST['listPhoto'];
            try{
                foreach ($sortedval as $key => $sort){
                    $sortPhoto = Slider::find($sort);
                    $sortPhoto->orden = $key;
                    $sortPhoto->save();
                }
            }
            catch (Exception $e)
            {
                return 'false';
            }
        }
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /adminsliders/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.sliders.upload');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminsliders
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        //CREAR CARPETA CON FECHA Y MOVER IMAGEN
        $this->sliderRepo->CrearCarpeta();
        $ruta = "upload/".$this->sliderRepo->FechaCarpeta();
        $archivo = $request->file('file');
        $imagen = $this->sliderRepo->FileMove($archivo, $ruta);
        $imagen_carpeta = $this->sliderRepo->FechaCarpeta();

        //GUARDAR DATOS
        $photo = new Slider();
        $photo->imagen = $imagen;
        $photo->imagen_carpeta = $imagen_carpeta;
        $photo->user_id = Auth::user()->id;
        $photo->save();
	}

	/**
	 * Display the specified resource.
	 * GET /adminsliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /adminsliders/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $photo = Slider::whereId($id)->first();

        return view('admin.sliders.edit', compact('photo'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /adminsliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$postPhoto = $this->sliderRepo->findOrFail($id);

        $ruleImg = [
            'imagen' => 'mimes:jpg,jpeg,png'
        ];

        //VALIDACION DE DATOS
        $this->validate($request, $ruleImg);

        //VARIABLES
        $titulo = $request->input('titulo');

        //VERIFICAR SI SUBIO IMAGEN
        if($request->hasFile('imagen'))
        {
            $this->sliderRepo->CrearCarpeta();
            $ruta = "upload/".$this->sliderRepo->FechaCarpeta();
            $archivo = $request->file('imagen');
            $imagen = $this->sliderRepo->FileMove($archivo, $ruta);
            $imagen_carpeta = $this->sliderRepo->FechaCarpeta();
        }else{
            $imagen = $request->input('imagen_actual');
            $imagen_carpeta = $request->input('imagen_actual_carpeta');
        }

        //GUARDAR DATOS
        $postPhoto->titulo = $titulo;
        $postPhoto->imagen = $imagen;
        $postPhoto->imagen_carpeta = $imagen_carpeta;
        $this->sliderRepo->update($postPhoto, $request->all());

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.slider.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /adminsliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$post = $this->sliderRepo->findOrFail($id);
        $post->delete();       

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.slider.index');
	}

}