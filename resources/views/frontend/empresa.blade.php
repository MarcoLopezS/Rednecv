@extends('layouts.frontend')

@section('contenido_header')
{!! HTML::style('libs/fancybox/jquery.fancybox.css?v=2.1.5') !!}
@stop

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>

<!-- Content -->
<section class="content-holder1 inner-pages">

		<section class="container">

			<section class="help-holder">

				<article class="left">

					<h2> <span class="txt-left">Empresa</span> <span class="bg-right"></span> </h2>

					<section class="row-fluid">

						<div id="tabs">
							
							<figure class="span3">

								<ul class="left-col-list">
									<li><a href="#nosotros">Nosotros</a> </li>
									<li><a href="#equipo">Equipo</a> </li>
									<li><a href="#clientes">Clientes</a> </li>
									<li><a href="#testimonios">Testimonios</a> </li>
								</ul>

							</figure>

							<figure class="span9">

								<div id="nosotros">

									<h1>Nosotros</h1>

									{!! $nosotros->contenido !!}
									
								</div>

								<div id="equipo">

									<h1>Equipo</h1>

									<p>La conforman distintos profesionales que como parte de su formación académica tienen conocimientos de Neurociencias, Educación y Coaching. Asimismo los profesionales tienen principalmente un perfil ético que los distingue y que demuestran a través de su buen trato y comportamiento.</p>

									@foreach($team as $item)
									{{--*/
									$imagen = '/upload/'.$item->imagen_carpeta.'210x190/'.$item->imagen;
									/*--}}
									<div class="team">
										
										<div class="imagen">

											<img src="{{ $imagen }}" alt="{{ $item->titulo }}">

											<h2>{{ $item->titulo }}</h2>

											{{ $item->descripcion }}
											
										</div>

										<div class="datos">

											{!! $item->contenido !!}
											
										</div>

									</div>
									@endforeach
									
								</div>

								<div id="clientes">

									<h1>Clientes</h1>

									@foreach($client as $item)
									{{--*/
									$testimony_imagen = '/upload/'.$item->imagen_carpeta.'130x130/'.$item->imagen; 
									/*--}}
									<div class="test-holder">
										<article class="client-s">
											<a class="fancybox" href="#cliente-{{ $item->id }}">
												<img src="{{ $testimony_imagen }}" class="content-img" alt="{{ $item->titulo }}"/>
											</a>
											<p>{{ $item->descripcion }}</p>
										</article>
										<h3 href="#" class="t-author">{{ $item->titulo }}</h3>
									</div>

									<div id="cliente-{{ $item->id }}" style="width:600px;display: none;">
										<h3>{{ $item->titulo }}</h3>
										<img src="{{ $testimony_imagen }}" class="content-img" alt="{{ $item->titulo }}"/>
										{!! $item->contenido !!}
									</div>

									@endforeach
									
								</div>

								<div id="testimonios">

									<h1>Testimonios</h1>

									@foreach($testimony as $item)
									{{--*/
									$testimony_imagen = '/upload/'.$item->imagen_carpeta.'130x130/'.$item->imagen; 
									/*--}}
									<div class="test-holder">
										<article class="client-s">
											<a class="fancybox" href="#testimonio-{{ $item->id }}">
												<img src="{{ $testimony_imagen }}" class="content-img" alt="{{ $item->titulo }}"/>
											</a>
											<p>{{ $item->descripcion }}</p>
										</article>
										<h3 href="#" class="t-author">{{ $item->titulo }}</h3>
									</div>

									<div id="testimonio-{{ $item->id }}" style="width:600px;display: none;">
										<h3>{{ $item->titulo }}</h3>
										<img src="{{ $testimony_imagen }}" class="content-img" alt="{{ $item->titulo }}"/>
										{!! $item->contenido !!}
									</div>

									@endforeach
									
								</div>

							</figure>

						</div>

					</section>

				</article>

			</section>

		</section>

	</section>

@stop

@section('contenido_footer')

<script>
	var jTabs = jQuery.noConflict();

	jTabs(document).on("ready", function(){

		jTabs("#tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
		jTabs("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");

	});

</script>

{!! HTML::script('libs/fancybox/jquery.fancybox.js?v=2.1.5') !!}
<script>
	var jFaBox = jQuery.noConflict();
	jFaBox(document).on("ready", function(){
		jFaBox('.fancybox').fancybox();
	});	
</script>
@stop