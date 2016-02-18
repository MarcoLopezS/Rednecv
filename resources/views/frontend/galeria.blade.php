@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>
<!-- Content -->
<section class="content-holder1 inner-pages">
	<section class="container">
		<section class="help-holder">
			<article class="left">
				<h2> <span class="txt-left">Galería de Fotos</span> <span class="bg-right"></span> </h2>
				<section class="row-fluid">

					@foreach($galeria as $item)
						{{--*/
						$galeria_titulo = $item->titulo;
						$galeria_descripcion = $item->descripcion;
						$galeria_imagen = '/upload/'.$item->imagen_carpeta.'520x300/'.$item->imagen;
						$galeria_url = '/galeria/'.$item->id.'-'.$item->slug_url;
						/*--}}

						<figure class="span4 galeria">
							<a href="{{ $galeria_url }}" >
								<img class="team-img f-width-img" src="{{ $galeria_imagen }}" alt=""/>
							</a>
                            <div class="info">
                                <h3><a href="{{ $galeria_url }}" >{{ $galeria_titulo }}</a></h3>
                                <p><a href="{{ $galeria_url }}" >{{ $galeria_descripcion }}</a></p>
                            </div>
						</figure>


					@endforeach

				</section>

                <section class="row-fluid">
                    {!! $galeria->appends(Request::all())->render() !!}
                </section>
			</article>
		</section>
	</section>
</section>

@stop