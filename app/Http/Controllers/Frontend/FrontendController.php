<?php namespace Rednecv\Http\Controllers\Frontend;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Rednecv\Http\Controllers\Controller;

use Rednecv\Entities\Category;
use Rednecv\Entities\Configuration;
use Rednecv\Entities\Gallery;
use Rednecv\Entities\GalleryPhoto;
use Rednecv\Entities\Post;
use Rednecv\Entities\PostPhoto;
use Rednecv\Entities\Tag;

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

        return view('frontend.index', compact('noticia', 'fotos'));
    }

    
    /* NOSOTROS */
    public function nosotros()
    {
        return view('frontend.nosotros');
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
        /* NOTICIAS */
        $blog = Post::where('publicar', 1)->orderBy('published_at','desc')->paginate(4);

        /* CATEGORIA */
        $category = Category::where('publicar', 1)->orderBy('titulo','asc')->get();

        return view('frontend.blog', compact('blog', 'category'));
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

        return view('frontend.blog-nota', compact('noticia', 'noticiaFotos', 'noticiaTags', 'category'));
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
        /* CATEGORIA */
        $category = Category::where('publicar', 1)->orderBy('titulo','asc')->get();

        return view('frontend.contacto', compact('category'));
    }

    public function postContacto()
    {
        /* CATEGORIA */
        

        return view('frontend.contacto', compact('category'));
    }

}