<?php namespace Rednecv\Http\Controllers\Frontend;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Entities\Category;
use Rednecv\Entities\Client;
use Rednecv\Entities\Company;
use Rednecv\Entities\Configuration;
use Rednecv\Entities\Gallery;
use Rednecv\Entities\GalleryPhoto;
use Rednecv\Entities\HomeOption;
use Rednecv\Entities\Post;
use Rednecv\Entities\PostPhoto;
use Rednecv\Entities\Service;
use Rednecv\Entities\Slider;
use Rednecv\Entities\Tag;
use Rednecv\Entities\Team;
use Rednecv\Entities\Testimony;

class FrontendController extends Controller{

    public function construccion()
    {
        return view('construccion');
    }

    /* HOME */
    public function index()
    {
        //NOTICIAS
        $noticia = Post::where('publicar', 1)->orderBy('published_at','desc')->first();

        //GALERIA DE FOTOS
        $fotos = GalleryPhoto::where('publicar', 1)->orderBy('orden', 'asc')->orderBy('created_at','desc')->paginate(9);

        //SLIDER
        $slider = Slider::orderBy('orden', 'asc')->get();

        //OPCIONES HOME
        $optHome = HomeOption::orderBy('titulo', 'asc')->paginate(4);

        //EQUIPO
        $team = Team::whereId(1)->first();

        return view('frontend.index', compact('noticia', 'fotos', 'slider', 'optHome', 'team'));
    }

    
    /* NOSOTROS */
    public function empresa()
    {
        //NOSOTROS
        $nosotros = Company::where('id', 1)->first();

        //EQUIPO
        $team = Team::orderBy('titulo', 'asc')->get();

        //TESTIMONIOS
        $testimony = Testimony::orderBy('titulo', 'asc')->get();

        //CLIENTES
        $client = Client::orderBy('titulo', 'asc')->get();

        return view('frontend.empresa', compact('nosotros', 'team', 'testimony', 'client'));
    }


    /* SERVICIOS */
    public function servicios()
    {
        //MENU
        $servicioMenu = Service::orderBy('titulo', 'asc')->get();

        //CONTENIDO
        $servicioCont = Service::orderBy('titulo', 'asc')->get();

        return view('frontend.servicios', compact('servicioMenu', 'servicioCont'));
    }


    /* GALERIA */
    public function galeria()
    {
        //GALERIA DE FOTOS
        $galeria = Gallery::where('publicar', 1)->orderBy('published_at', 'desc')->paginate(9);

        return view('frontend.galeria', compact('galeria'));
    }

    public function galeriaNoticia($id)
    {
        //GALERIA
        $noticia = Gallery::findOrFail($id);

        //FOTOS
        $noticiaFotos = GalleryPhoto::where('gallery_id', $id)->orderBy('orden', 'asc')->get();

        return view('frontend.galeria-nota', compact('noticia', 'noticiaFotos'));
    }
    

    /* BLOG - NOTICIAS */
    public function blog()
    {
        //NOTICIAS
        $blog = Post::where('publicar', 1)->orderBy('published_at','desc')->paginate(4);

        //CATEGORIA
        $category = Category::where('publicar', 1)->orderBy('titulo','asc')->get();

        //GALERIA DE FOTOS
        $fotos = GalleryPhoto::where('publicar', 1)->orderBy('orden', 'asc')->orderBy('created_at','desc')->paginate(9);

        return view('frontend.blog', compact('blog', 'category', 'fotos'));
    }

    public function noticia($id)
    {
        $noticia = Post::findOrFail($id);

        $noticiaFotos = PostPhoto::where('post_id', $id)->orderBy('orden', 'asc')->get();
        
        if($noticia->tags <> "-0,0,0-"){
            $noticiaTags = explode("-0,", $noticia->tags);
            $noticiaTags = explode(",0-", $noticiaTags[1]);
            $noticiaTags = explode(",", $noticiaTags[0]);
        }elseif($noticia->tags == "-0,0,0-" OR $noticia->tags == ""){
            $noticiaTags = "";
        }

        /* CATEGORIA */
        $category = Category::where('publicar', 1)->orderBy('titulo','asc')->get();

        //GALERIA DE FOTOS
        $fotos = GalleryPhoto::where('publicar', 1)->orderBy('orden', 'asc')->orderBy('created_at','desc')->paginate(9);

        return view('frontend.blog-nota', compact('noticia', 'noticiaFotos', 'noticiaTags', 'category', 'fotos'));
    }

    public function noticiaPreview($id)
    {
        $noticia = Post::findOrFail($id);
        $noticiaFotos = PostPhoto::where('post_id', $id)->orderBy('orden', 'asc')->get();
        if($noticia->tags <> "0,0,0"){
            $noticiaTags = explode("0,", $noticia->tags);
            $noticiaTags = explode(",0", $noticiaTags[1]);
            $noticiaTags = explode(",", $noticiaTags[0]);
        }elseif($noticia->tags == "0,0,0" OR $noticia->tags == ""){
            $noticiaTags = "";
        }

        return view('frontend.noticia-preview', compact('noticia', 'noticiaFotos', 'noticiaTags', 'columnistasDia'));
    }

    public function noticiaCategoria($url)
    {
        $categoria = Category::whereSlugUrl($url)->first();
        $noticias = Post::where('category_id', $categoria->id)->where('publicar', 1)->orderBy('published_at','desc')->paginate(7);

        return view('frontend.categoria', compact('categoria', 'noticias', 'columnistasDia'));
    }

    public function noticiaTags($id, $url)
    {
        $categoria = Tag::whereId($id)->whereSlugUrl($url)->first();
        $noticias = Post::where('tags', 'LIKE', '%,'.$id.',%')->where('publicar', 1)->orderBy('published_at','desc')->paginate(7);

        return view('frontend.categoria', compact('categoria', 'noticias', 'columnistasDia'));
    }

    public function getContacto()
    {
        return view('frontend.contacto');
    }

    public function postContacto(Request $request)
    {
        $data = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'mensaje' => $request->input('mensaje')
        ];

        $rules = [
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ];

        $this->validate($request, $rules);

        $fromEmail = 'mlopez18073@gmail.com';
        $fromNombre = 'Rednecv';

        \Mail::send('emails.frontend.contacto', $data, function($message) use ($fromNombre, $fromEmail){
            $message->to($fromEmail, $fromNombre);
            $message->from($fromEmail, $fromNombre);
            $message->subject('Rednecv - Contacto');
        });

        $mensaje = 'Tu mensaje ha sido enviado.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $mensaje
            ]);
        }       
    }

}