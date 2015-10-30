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
						$galeria_imagen = '/upload/'.$item->imagen_carpeta.'520x244/'.$item->imagen;
						$galeria_url = '/galeria/'.$item->id.'-'.$item->slug_url;
						/*--}}

						<figure class="span4 galeria">
							<a href="{{ $galeria_url }}" >
								<img class="team-img f-width-img" src="{{ $galeria_imagen }}" alt=""/>
							</a>
						</figure>

					@endforeach

				</section>
			</article>
		</section>
	</section>
</section>

@stop