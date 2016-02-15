@extends('layouts.frontend')

@section('contenido_header')
{!! HTML::style('libs/fancybox/jquery.fancybox.css?v=2.1.5') !!}

<style type="text/css">
	.row-fluid .span3{
		width: 30%;
	}

	.row-fluid .span3:first-child{
		margin-left: 2.564102564102564%;
	}
</style>

@stop

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="/images/404_01.png" alt=""/> </section>
<!-- Content -->
<section class="content-holder1 inner-pages">
	<section class="container">
		<section class="help-holder">
			<article class="left">
				<h2> <span class="txt-left">{{ $noticia->titulo }}</span> <span class="bg-right"></span> </h2>
                <p class="galeria-texto">{{ $noticia->descripcion }}</p>
				<section class="row-fluid">

					@foreach($noticiaFotos as $item)
						{{--*/
						$galeria_imagen = '/upload/'.$item->imagen_carpeta.$item->imagen;
						$galeria_imagen_thumb = '/upload/'.$item->imagen_carpeta.'520x244/'.$item->imagen;
						/*--}}
						<figure class="span3">
							<a class="fancybox" href="{{ $galeria_imagen }}" data-fancybox-group="gallery" title="{{ $item->titulo }}">
								<img class="team-img f-width-img" src="{{ $galeria_imagen_thumb }}" alt=""/>
							</a>
						</figure>

					@endforeach

				</section>
			</article>
		</section>
	</section>
</section>

@stop

@section('contenido_footer')
{!! HTML::script('libs/fancybox/jquery.fancybox.js?v=2.1.5') !!}
<script>
	var jFaBox = jQuery.noConflict();
	jFaBox(document).on("ready", function(){
		jFaBox('.fancybox').fancybox();
	});	
</script>
@stop