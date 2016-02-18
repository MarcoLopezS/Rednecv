@extends('layouts.frontend')

@section('contenido_header')
	<meta property="og:title" content='{{ $conf->titulo  }}'>
	<meta property="og:type" content='website' >
	<meta property="og:url" content='{{ $conf->dominio }}' >
	<meta property="og:image" content='{{ $conf->dominio.'imagenes/logo.png' }}' >
	<meta property="og:site_name" content='{{ $conf->titulo }}' >
	<meta property="fb:admins" content='1434798696787255'>
	<meta property="og:description" content='{{ $conf->description }}'>
@stop

@section('contenido_body')

<!-- banner -->
<section id="banner">
	<div class="container_wrap" id="slideshow_big">
		<!-- start header -->
		<div style="position:relative; z-index:2;">
			<div class="flexslider">
				<ul class="slides">
					
					@foreach($slider as $item)
					{{--*/
					$imagen = '/upload/'.$item->imagen_carpeta.'2200x900/'.$item->imagen;
					/*--}}
					<li class="slide-image">
						<div class="caption">
							<p>{{ $item->titulo }}</p>
						</div>
						<img src="{{ $imagen }}" class="attachment-header_image wp-post-image" alt="{{ $item->titulo }}">
					</li>
					@endforeach

				</ul>
			</div>
		</div>
		<!-- end header -->
	</div>
</section>

<!-- Content -->
<section class="content-holder1">
	<section class="container">
		<section class="service-tabs">
			<section class="row-fluid">

				@foreach($optHome as $item)
				<figure class="span3">
					<h3>{{ $item->titulo }}</h3>
					<span class="s-icon">
						{!! $item->imagen !!}
					</span>
					<p>{{ $item->descripcion }}</p>
				</figure>
				@endforeach

			</section>
		</section>
	</section>
</section>

<section class="content-holder1 footer-top">
	<section class="container">
		<section class="top">
			<section class="row-fluid">

				<figure class="span3">
					@include('frontend.widgets.sidebar-gallery')
				</figure>

				<figure class="span3">
					<h2><a href="/empresa">Nuestro Equipo</a></h2>
					<div class="author-img-holder">
						{{--*/
						$team_imagen = '/upload/'.$team->imagen_carpeta.'100x100/'.$team->imagen;
						$team_url = route('frontend.empresa');
						/*--}}
						<a href="{{ $team_url }}">
							<img src="{{ $team_imagen }}" class="author-img" alt="{{ $team->titulo }}" />
						</a>
						<a href="{{ $team_url }}">
							<strong class="author-name">{{ $team->titulo }}</strong>
						</a>
					</div>
					<p>{{ $team->descripcion }}</p>
				</figure>

				<figure class="span3 b-post">
					<h2><a href="{{ route('frontend.blog') }}">Blog</a></h2>
					{{--*/
					$blog_titulo = $noticia->titulo;
					$blog_contenido = $noticia->descripcion;
					$blog_imagen = '/upload/'.$noticia->imagen_carpeta.'222x80/'.$noticia->imagen;
					$blog_url = '/blog/'.$noticia->id.'-'.$noticia->slug_url;
					/*--}}

					<div class="f-img-holder">
						<a href="{{ $blog_url }}">
							<img src="{{ $blog_imagen }}" class="f-blog-img" alt="{{ $blog_titulo }}" />
						</a>
					</div>

					<p><strong><a href="{{ $blog_url }}" >{{ $blog_titulo }}</a></strong></p>

					<p>{{ $blog_contenido }}</p>

					<a href="{{ $blog_url }}" class="more-btn2">+ Leer más</a>

                    <a href="/blog" class="send-btn blog-bottom-home">Ver todas las noticias</a>

				</figure>

				<figure id="formContacto" class="span3">
					<h2>Contactanos</h2>

					<div class="progressForm">
						<i class="fa fa-2x fa-circle-o-notch fa-spin"></i>
					</div>

					{!! Form::open(['route' => 'frontend.contacto.post', 'method' => 'POST', 'id' => 'contactForm']) !!}

						<div class="contact-content text-justify"></div>

						{!! Form::text('nombre', null, ['class' => 'f-field', 'id' => 'nombre', 'placeholder' => 'Nombre']) !!}
						{!! Form::email('email', null, ['class' => 'f-field', 'id' => 'email', 'placeholder' => 'Email']) !!}
						{!! Form::textarea('mensaje', null, ['class' => 'f-area', 'placeholder' => 'Mensaje', 'cols' => '4', 'rows' => '20']) !!}
						<div class="g-recaptcha home" data-sitekey="{{ env('RE_CAP_SITE') }}" style=""></div>

						<a id="formContactoSubmit" href="#" class="send-btn">Enviar mensaje</a>

					{!! Form::close() !!}
				</figure>

			</section>
		</section>
	</section>
</section>

@stop

@section('contenido_footer')

{!! HTML::script('https://www.google.com/recaptcha/api.js') !!}

{!! HTML::script('js/contacto.js') !!}

@stop