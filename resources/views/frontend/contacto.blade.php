@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>

<!-- Content -->
<section class="content-holder1 inner-pages">
	<section class="container">
		<section class="help-holder">
			<article class="left">
				<h2> <span class="txt-left">Contacto</span> <span class="bg-right"></span> </h2>
				<section class="row-fluid content-holder">
					<figure class="span8">
						
						<div id="map" 
						  	data-map-zoom="16" 
						  	data-map-latlng="{{ $contacto->mapa }}" 
						  	data-map-marker="imagenes/logo-map.png" 
						  	data-map-marker-size="200*80"></div>
						
						<section class="row-fluid">
							<figure  id="formContacto" class="span12">
							
								<h2>Contacto</h2>

								<div class="progressForm">
									<i class="fa fa-2x fa-circle-o-notch fa-spin"></i>
								</div>

								{!! Form::open(['route' => 'frontend.contacto.post', 'method' => 'POST', 'id' => 'contactForm']) !!}

									<div class="contact-content text-justify"></div>

									{!! Form::text('nombre', null, ['class' => 'f-field', 'id' => 'nombre', 'placeholder' => 'Nombre']) !!}
									{!! Form::email('email', null, ['class' => 'f-field', 'id' => 'email', 'placeholder' => 'Email']) !!}
									{!! Form::textarea('mensaje', null, ['class' => 'f-area', 'placeholder' => 'Mensaje', 'cols' => '4', 'rows' => '20']) !!}
									<div class="g-recaptcha home" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
									<a id="formContactoSubmit" href="#" class="send-btn">Enviar mensaje</a>						
								
								{!! Form::close() !!}

							</figure>
						</section>
					</figure>

					<figure class="span4">

						<h2>Dirección</h2>
						<ul class="contact-list">
							<li class="phone">{{ $contacto->telefono }}</li>
							<li class="mail"><a href="#">{{ $contacto->email }}</a></li>
							<li class="address">{{ $contacto->direccion }}</li>
						</ul>

					</figure>

				</section>
			</article>
		</section>
	</section>
</section>

@stop

@section('contenido_footer')

{{-- RECAPTCHA --}}
{!! HTML::script('https://www.google.com/recaptcha/api.js') !!}

{{-- MAPS --}}
{!! HTML::script('http://maps.google.com/maps/api/js?sensor=false') !!}

{!! HTML::script('js/contacto.js') !!}

@stop