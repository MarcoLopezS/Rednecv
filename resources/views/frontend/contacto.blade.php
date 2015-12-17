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
						
						<iframe width="100%" height="300" scrolling="no" frameborder="0" class="map-border" src="https://maps.google.com/?ie=UTF8&amp;ll=-20.234496,57.603722&amp;spn=0.093419,0.169086&amp;t=m&amp;z=13&amp;output=embed" marginwidth="0" marginheight="0"></iframe>
						
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
							<li class="phone">(+00) 1234 56 789</li>
							<li class="mail"><a href="#">info@crunhpress.com</a></li>
							<li class="address">15th Avenue, 12345, Navada, USA</li>
						</ul>

					</figure>

				</section>
			</article>
		</section>
	</section>
</section>

@stop

@section('contenido_footer')

{!! HTML::script('https://www.google.com/recaptcha/api.js') !!}

{!! HTML::script('js/contacto.js') !!}

@stop